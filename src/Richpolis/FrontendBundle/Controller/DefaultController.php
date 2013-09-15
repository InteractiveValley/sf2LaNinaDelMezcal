<?php

namespace Richpolis\FrontendBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Richpolis\BackendBundle\Entity\Contacto;
use Richpolis\BackendBundle\Form\ContactoType;

/**
 * Frontend controller.
 *
 * @Route("/")
 */
class DefaultController extends Controller {
    
    /**
     * Lists all Frontend entities.
     *
     * @Route("/inicio", name="homepage")
     * @Template("FrontendBundle:Default:index.html.twig")
     */
    public function indexAction()
    {
        return array();
    }
    
    /**
     * Pantalla de splash.
     *
     * @Route("/", name="splash")
     * @Template("FrontendBundle:Default:pagina1.html.twig")
     */
    public function splashAction()
    {
        return array();
        
    }
    
    /**
     * Pantalla de about_la_nina.
     *
     * @Route("/about", name="about_la_nina")
     * @Template("FrontendBundle:Default:about.html.twig")
     */
    public function aboutAction()
    {
        return array();
        
    }

    /**
     * Pantalla de the_mezcal.
     *
     * @Route("/mezcal", name="the_mezcal")
     * @Template("FrontendBundle:Default:botella.html.twig")
     */
    public function mezcalAction()
    {
        return $this->redirect("/mezcal/espadin");
        
    }

    /**
     * Pantalla de the_mezcal - botella espadin.
     *
     * @Route("/mezcal/espadin", name="botella_espadin")
     * @Template("FrontendBundle:Default:botella.html.twig")
     */
    public function espadinAction()
    {
        return array(
            "pagina_actual"=>"espadin",
            "app_angular"=>"js/app/espadin.js",
            "botella_anterior"=>"botella_primario",
            "botella_siguiente"=>"botella_primario",
            );
        
    }

    /**
     * Pantalla de the_mezcal - botella primario.
     *
     * @Route("/mezcal/primario", name="botella_primario")
     * @Template("FrontendBundle:Default:botella.html.twig")
     */
    public function primarioAction()
    {
        return array(
            "pagina_actual"=>"primario-mezcal",
            "app_angular"=>"js/app/primario.js",
            "botella_anterior"=>"botella_espadin",
            "botella_siguiente"=>"botella_espadin",
            );
        
    }


         
    /**
     * Pantalla de find_la_nina.
     *
     * @Route("/find", name="find_la_nina")
     * @Template("FrontendBundle:Default:find.html.twig")
     */
    public function findAction()
    {
        return array();
        
    }

    /**
     * @Route("/contacto", name="frontend_contacto")
     * @Method({"GET", "POST"})
     * @Template("FrontendBundle:Default:contacto.html.twig")
     */
    public function contactoAction() {
        $contacto = new Contacto();
        $form = $this->createForm(new ContactoType(), $contacto);
        $request = $this->getRequest();
        
        if ($request->getMethod() == 'POST') {
            $form->bindRequest($request);

            if ($form->isValid()) {
                $datos=$form->getData();
                
                $message = \Swift_Message::newInstance()
                        ->setSubject('Contacto desde pagina')
                        ->setFrom($datos->getEmail())
                        ->setTo($this->container->getParameter('richpolis.emails.to_email'))
                        ->setBody($this->renderView('BackendBundle:Default:contactoEmail.html.twig', array('datos' => $datos)), 'text/html');
                $this->get('mailer')->send($message);

                $this->get('session')->setFlash('noticia', 'Gracias por enviar su correo!');

                // Redirige - Esto es importante para prevenir que el usuario
                // reenvíe el formulario si actualiza la página
                $ok=true;
                $error=false;
                $mensaje="Se ha enviado el mensaje";
                $contacto = new Contacto();
                $form = $this->createForm(new ContactoType(), $contacto);
            }else{
                $ok=false;
                $error=true;
                $mensaje="El mensaje no se ha podido enviar";
            }
        }else{
            $ok=false;
            $error=false;
            $mensaje="Violacion de acceso";
        }
        
         $em = $this->getDoctrine()->getEntityManager();
         //$configuraciones = $em->getRepository('BackendBundle:Configuraciones')->findAll(); 

        return array(
              /*'configuraciones'=>$configuraciones,*/
              'form' => $form->createView(),
              'ok'=>$ok,
              'error'=>$error,
              'mensaje'=>$mensaje,
        );
    }
    
    
}

?>

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
    
    protected function lenguajePagina($request){
        $lang=$request->query->get('lang',0);
        if($lang){
            if($lang=="es"){
                $request->setLocale('es');
            }elseif($lang=="en"){
                $request->setLocale('en');
            }else{
                $request->setLocale('es');
            }    
        }
    }
    
    /**
     * Lists all Frontend entities.
     *
     * @Route("/{_locale}/inicio", name="homepage",defaults={"_locale" = "en"}, requirements={"_locale" = "en|es"})
     * @Template("FrontendBundle:Default:index.html.twig")
     */
    public function indexAction()
    {
        $this->lenguajePagina($this->getRequest());
        return array();
    }
    
    /**
     * Pantalla de splash.
     * @Route("/{_locale}/", name="splash", defaults={"_locale" = "en"}, requirements={"_locale" = "en|es"})
     * @Route("/")
     * @Template("FrontendBundle:Default:pagina1.html.twig")
     */
    public function splashAction()
    {
        $this->lenguajePagina($this->getRequest());
        
        return array();
        
    }
    
    /**
     * Pantalla de about_la_nina.
     * @Route("/{_locale}/about", name="about_la_nina", defaults={"_locale" = "en"}, requirements={"_locale" = "en|es"})
     * @Route("/about")
     * @Template("FrontendBundle:Default:about.html.twig")
     */
    public function aboutAction()
    {
        $this->lenguajePagina($this->getRequest());
        return array();
        
    }

    /**
     * Pantalla de the_mezcal.
     *
     * @Route("/{_locale}/mezcal", name="the_mezcal", defaults={"_locale" = "en"}, requirements={"_locale" = "en|es"}))
     * @Template("FrontendBundle:Default:botella.html.twig")
     */
    public function mezcalAction()
    {
        $this->lenguajePagina($this->getRequest());
        return $this->redirect("/mezcal/espadin");
        
    }

    /**
     * Pantalla de the_mezcal - botella espadin.
     *
     * @Route("/{_locale}/mezcal/espadin", name="botella_espadin", defaults={"_locale" = "en"}, requirements={"_locale" = "en|es"})
     * @Route("/mezcal/espadin")
     * @Template("FrontendBundle:Default:botella.html.twig")
     */
    public function espadinAction()
    {
        $this->lenguajePagina($this->getRequest());
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
     * @Route("/{_locale}/mezcal/primario", name="botella_primario", defaults={"_locale" = "en"}, requirements={"_locale" = "en|es"})
     * @Route("/mezcal/primario")
     * @Template("FrontendBundle:Default:botella.html.twig")
     */
    public function primarioAction()
    {
        $this->lenguajePagina($this->getRequest());
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
     * @Route("/{_locale}/find", name="find_la_nina", defaults={"_locale" = "en"}, requirements={"_locale" = "en|es"})
     * @Route("/find")
     * @Template("FrontendBundle:Default:find.html.twig")
     */
    public function findAction()
    {
        $this->lenguajePagina($this->getRequest());
        return array();
        
    }

    /**
     * @Route("/{_locale}/contacto", name="frontend_contacto", defaults={"_locale" = "en"}, requirements={"_locale" = "en|es"})
     * @Route("/contacto")
     * @Method({"GET", "POST"})
     * @Template("FrontendBundle:Default:contacto.html.twig")
     */
    public function contactoAction() {
        $this->lenguajePagina($this->getRequest());
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
    
    /**
     * Lista los ultimos tweets.
     *
     * @Route("/last-tweets/{username}/", name="last_tweets")
     */
    public function lastTweetsAction($username, $limit = 10, $age = null)
    {
        /* @var $twitter FetcherInterface */
        $twitter = $this->get('knp_last_tweets.last_tweets_fetcher');

        try {
            $tweets = $twitter->fetch($username, $limit);
        } catch (TwitterException $e) {
            $tweets = array();
        }

        $response = $this->render('FrontendBundle:Default:lastTweets.html.twig', array(
            'username' => $username,
            'tweets'   => $tweets,
        ));

        if ($age) {
            $response->setSharedMaxAge($age);
        }

        return $response;
    }
    
}

?>

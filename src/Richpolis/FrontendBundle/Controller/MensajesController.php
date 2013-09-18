<?php

namespace Richpolis\FrontendBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Richpolis\FrontendBundle\Entity\Mensajes;
use Richpolis\FrontendBundle\Form\MensajesType;

/**
 * Mensajes controller.
 *
 * @Route("/backend/mensajes")
 */
class MensajesController extends Controller
{
    private $botellas = null;
    protected function getFilters()
    {
        $filters=$this->get('session')->get('filters', array());
        return $filters;
    }

    protected function getBotellaDefault(){
        $filters = $this->getFilters();
        if(isset($filters['mensajes'])){
            return $filters['mensajes'];
        }else{
            $this->getBotellas();
            return $this->botellas[0];
        }
    }

    protected function getBotellas(){
        $em = $this->getDoctrine()->getManager();
        if($this->botellas == null){
            $this->botellas = $em->getRepository('FrontendBundle:Botellas')
                                   ->getBotellasActivas();
        }
        return $this->botellas;
    }

    protected function getBotellaActual($botellaId){
        $botellas= $this->getBotellas();
        $botellaActual=null;
        foreach($botellas as $botella){
            if($botella->getId()==$botellaId){
                $botellaActual=$botella;
                break;
            }
        }
        return $botellaActual;
    }
    
    /**
     * Lists all Mensajes entities.
     * @Route("/", name="mensajes")
     * 
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        
        $filters = $this->getFilters();

        if(!isset($filters['mensajes']))
            return $this->redirect($this->generateUrl('mensajes_seleccionar_botella'));

        $query = $em->getRepository("FrontendBundle:Mensajes")
                    ->getQueryMensajesPorBotellaActivas($filters['mensajes']);

        $paginator = $this->get('knp_paginator');
        
        $pagination = $paginator->paginate(
            $query,
            $this->getRequest()->query->get('page', 1),
            10
        );

        return array(
            'botellas'      =>$this->getBotellas(),
            'botella_actual'=>$this->getBotellaActual($filters['mensajes']),
            'pagination'      =>$pagination,
        );
    }
    
    /**
     * Seleccionar un tipo de botella.
     *
     * @Route("/seleccionar/botella", name="mensajes_seleccionar_botella")
     */
    public function selectAction()
    {
        $filters = $this->getFilters();
        
        if(isset($filters['mensajes'])){
            return $this->redirect($this->generateUrl('mensajes'));
        }else{
            return $this->render('FrontendBundle:Mensajes:select.html.twig', array(
                'botellas'  => $this->getBotellas(),
            ));
        }
    }
    
    /**
     * Mostrar por botella
     *
     * @Route("/list/{botella}/botella", name="mensajes_por_botella")
     */
    public function porCategoriaAction($botella)
    {
        $filters = $this->getFilters();
        if($botella){
            $filters['mensajes']=$botella;
            $this->get('session')->set('filters',$filters);
            return $this->redirect($this->generateUrl('mensajes'));
        }else{
            if(isset($filters['mensajes'])){
                return $this->redirect($this->generateUrl('mensajes'));
            }else{
                return $this->render('FrontendBundle:Mensajes:select.html.twig', array(
                    'botellas'  => $this->getBotellas(),
                ));
            }
        }        
    }
    
    /**
     * Finds and displays a Mensajes entity.
     *
     * @Route("/{id}/show", name="mensajes_show")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FrontendBundle:Mensajes')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Mensajes entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    
    /**
     * Displays a form to create a new Mensajes entity.
     *
     * @Route("/new", name="mensajes_new")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Mensajes();
        
        $botellaId=$this->getRequest()->query->get('botella',$this->getBotellaDefault());
        
        $botella=$this->getDoctrine()->getRepository('FrontendBundle:Botellas')
                                        ->find($botellaId);
        $entity->setBotella($botella);                                

        $form   = $this->createForm(new MensajesType(), $entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a new Mensajes entity.
     *
     * @Route("/create", name="mensajes_create")
     * @Method("POST")
     * @Template("FrontendBundle:Mensajes:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity  = new Mensajes();
        $form = $this->createForm(new MensajesType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('mensajes_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Mensajes entity.
     *
     * @Route("/{id}/edit", name="mensajes_edit")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FrontendBundle:Mensajes')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Mensajes entity.');
        }

        $editForm = $this->createForm(new MensajesType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing Mensajes entity.
     *
     * @Route("/{id}/update", name="mensajes_update")
     * @Method("POST")
     * @Template("FrontendBundle:Mensajes:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FrontendBundle:Mensajes')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Mensajes entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new MensajesType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('mensajes_show', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a Mensajes entity.
     *
     * @Route("/{id}/delete", name="mensajes_delete")
     * @Method("POST")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('FrontendBundle:Mensajes')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Mensajes entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('mensajes'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
    
    
}

<?php

namespace Richpolis\FrontendBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Richpolis\FrontendBundle\Entity\Botellas;
use Richpolis\FrontendBundle\Form\BotellasType;

/**
 * Botellas controller.
 *
 * @Route("/backend/botellas")
 */
class BotellasController extends Controller
{
    /**
     * Lists all Botellas entities.
     *
     * @Route("/", name="botellas")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $query = $em->getRepository("FrontendBundle:Botellas")->getQueryBotellasActivas();

        $paginator = $this->get('knp_paginator');
        
        $pagination = $paginator->paginate(
            $query,
            $this->getRequest()->query->get('page', 1),
            10
        );

        return array(
            'pagination' => $pagination,
        );
    }

    /**
     * Creates a new Botellas entity.
     *
     * @Route("/", name="botellas_create")
     * @Method("POST")
     * @Template("FrontendBundle:Botellas:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity  = new Botellas();
        $form = $this->createForm(new BotellasType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('botellas_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Displays a form to create a new Botellas entity.
     *
     * @Route("/new", name="botellas_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Botellas();
        $form   = $this->createForm(new BotellasType(), $entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Botellas entity.
     *
     * @Route("/{id}", name="botellas_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FrontendBundle:Botellas')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Botellas entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Botellas entity.
     *
     * @Route("/{id}/edit", name="botellas_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FrontendBundle:Botellas')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Botellas entity.');
        }

        $editForm = $this->createForm(new BotellasType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing Botellas entity.
     *
     * @Route("/{id}", name="botellas_update")
     * @Method("POST")
     * @Template("FrontendBundle:Botellas:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FrontendBundle:Botellas')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Botellas entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new BotellasType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('botellas_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a Botellas entity.
     *
     * @Route("/{id}", name="botellas_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('FrontendBundle:Botellas')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Botellas entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('botellas'));
    }

    /**
     * Creates a form to delete a Botellas entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}

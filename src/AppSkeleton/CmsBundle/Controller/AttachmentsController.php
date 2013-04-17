<?php

namespace AppSkeleton\CmsBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use AppSkeleton\CmsBundle\Entity\Attachments;
use AppSkeleton\CmsBundle\Form\AttachmentsType;

/**
 * Attachments controller.
 *
 * @Route("/attachments")
 */
class AttachmentsController extends Controller
{
    /**
     * Lists all Attachments entities.
     *
     * @Route("/", name="attachments")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AppSkeletonCmsBundle:Attachments')->findAll();

        return array(
            'entities' => $entities,
        );
    }

    /**
     * Creates a new Attachments entity.
     *
     * @Route("/", name="attachments_create")
     * @Method("POST")
     * @Template("AppSkeletonCmsBundle:Attachments:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity  = new Attachments();
        $form = $this->createForm(new AttachmentsType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('attachments_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Displays a form to create a new Attachments entity.
     *
     * @Route("/new", name="attachments_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Attachments();
        $form   = $this->createForm(new AttachmentsType(), $entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Attachments entity.
     *
     * @Route("/{id}", name="attachments_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppSkeletonCmsBundle:Attachments')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Attachments entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Attachments entity.
     *
     * @Route("/{id}/edit", name="attachments_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppSkeletonCmsBundle:Attachments')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Attachments entity.');
        }

        $editForm = $this->createForm(new AttachmentsType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing Attachments entity.
     *
     * @Route("/{id}", name="attachments_update")
     * @Method("PUT")
     * @Template("AppSkeletonCmsBundle:Attachments:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppSkeletonCmsBundle:Attachments')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Attachments entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new AttachmentsType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('attachments_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a Attachments entity.
     *
     * @Route("/{id}", name="attachments_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AppSkeletonCmsBundle:Attachments')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Attachments entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('attachments'));
    }

    /**
     * Creates a form to delete a Attachments entity by id.
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

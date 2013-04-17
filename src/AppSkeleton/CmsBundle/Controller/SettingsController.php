<?php

namespace AppSkeleton\CmsBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use AppSkeleton\CmsBundle\Entity\Settings;
use AppSkeleton\CmsBundle\Form\SettingsType;

/**
 * Settings controller.
 *
 * @Route("/settings")
 */
class SettingsController extends Controller
{
    /**
     * Lists all Settings entities.
     *
     * @Route("/", name="settings")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AppSkeletonCmsBundle:Settings')->findAll();

        return array(
            'entities' => $entities,
        );
    }

    /**
     * Creates a new Settings entity.
     *
     * @Route("/", name="settings_create")
     * @Method("POST")
     * @Template("AppSkeletonCmsBundle:Settings:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity  = new Settings();
        $form = $this->createForm(new SettingsType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('settings_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Displays a form to create a new Settings entity.
     *
     * @Route("/new", name="settings_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Settings();
        $form   = $this->createForm(new SettingsType(), $entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Settings entity.
     *
     * @Route("/{id}", name="settings_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppSkeletonCmsBundle:Settings')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Settings entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Settings entity.
     *
     * @Route("/{id}/edit", name="settings_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppSkeletonCmsBundle:Settings')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Settings entity.');
        }

        $editForm = $this->createForm(new SettingsType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing Settings entity.
     *
     * @Route("/{id}", name="settings_update")
     * @Method("PUT")
     * @Template("AppSkeletonCmsBundle:Settings:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppSkeletonCmsBundle:Settings')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Settings entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new SettingsType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('settings_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a Settings entity.
     *
     * @Route("/{id}", name="settings_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AppSkeletonCmsBundle:Settings')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Settings entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('settings'));
    }

    /**
     * Creates a form to delete a Settings entity by id.
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

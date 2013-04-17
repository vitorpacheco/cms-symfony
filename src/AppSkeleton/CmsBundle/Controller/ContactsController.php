<?php

namespace AppSkeleton\CmsBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use AppSkeleton\CmsBundle\Entity\Contacts;
use AppSkeleton\CmsBundle\Form\ContactsType;

/**
 * Contacts controller.
 *
 * @Route("/contacts")
 */
class ContactsController extends Controller
{
    /**
     * Lists all Contacts entities.
     *
     * @Route("/", name="contacts")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AppSkeletonCmsBundle:Contacts')->findAll();

        return array(
            'entities' => $entities,
        );
    }

    /**
     * Creates a new Contacts entity.
     *
     * @Route("/", name="contacts_create")
     * @Method("POST")
     * @Template("AppSkeletonCmsBundle:Contacts:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity  = new Contacts();
        $form = $this->createForm(new ContactsType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('contacts_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Displays a form to create a new Contacts entity.
     *
     * @Route("/new", name="contacts_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Contacts();
        $form   = $this->createForm(new ContactsType(), $entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Contacts entity.
     *
     * @Route("/{id}", name="contacts_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppSkeletonCmsBundle:Contacts')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Contacts entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Contacts entity.
     *
     * @Route("/{id}/edit", name="contacts_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppSkeletonCmsBundle:Contacts')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Contacts entity.');
        }

        $editForm = $this->createForm(new ContactsType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing Contacts entity.
     *
     * @Route("/{id}", name="contacts_update")
     * @Method("PUT")
     * @Template("AppSkeletonCmsBundle:Contacts:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppSkeletonCmsBundle:Contacts')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Contacts entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new ContactsType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('contacts_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a Contacts entity.
     *
     * @Route("/{id}", name="contacts_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AppSkeletonCmsBundle:Contacts')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Contacts entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('contacts'));
    }

    /**
     * Creates a form to delete a Contacts entity by id.
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

<?php

namespace AppSkeleton\CmsBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use AppSkeleton\CmsBundle\Entity\Posts;
use AppSkeleton\CmsBundle\Form\PostsType;

/**
 * Posts controller.
 *
 * @Route("/posts")
 */
class PostsController extends Controller
{
    /**
     * Lists all Posts entities.
     *
     * @Route("/", name="posts")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AppSkeletonCmsBundle:Posts')->findAll();

        return array(
            'entities' => $entities,
        );
    }

    /**
     * Creates a new Posts entity.
     *
     * @Route("/", name="posts_create")
     * @Method("POST")
     * @Template("AppSkeletonCmsBundle:Posts:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity  = new Posts();
        $form = $this->createForm(new PostsType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('posts_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Displays a form to create a new Posts entity.
     *
     * @Route("/new", name="posts_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Posts();
        $form   = $this->createForm(new PostsType(), $entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Posts entity.
     *
     * @Route("/{id}", name="posts_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppSkeletonCmsBundle:Posts')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Posts entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Posts entity.
     *
     * @Route("/{id}/edit", name="posts_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppSkeletonCmsBundle:Posts')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Posts entity.');
        }

        $editForm = $this->createForm(new PostsType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing Posts entity.
     *
     * @Route("/{id}", name="posts_update")
     * @Method("PUT")
     * @Template("AppSkeletonCmsBundle:Posts:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppSkeletonCmsBundle:Posts')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Posts entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new PostsType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('posts_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a Posts entity.
     *
     * @Route("/{id}", name="posts_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AppSkeletonCmsBundle:Posts')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Posts entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('posts'));
    }

    /**
     * Creates a form to delete a Posts entity by id.
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

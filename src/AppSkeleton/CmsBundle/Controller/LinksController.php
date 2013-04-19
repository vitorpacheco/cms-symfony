<?php

namespace AppSkeleton\CmsBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use AppSkeleton\CmsBundle\Entity\Links;
use AppSkeleton\CmsBundle\Form\LinksType;

/**
 * Links controller.
 *
 * @Route("/links")
 */
class LinksController extends Controller {

	/**
	 * Lists all Links entities.
	 *
	 * @Route("/", name="links")
	 * @Method("GET")
	 * @Template()
	 */
	public function indexAction() {
		$em = $this->getDoctrine()->getManager();

		$entities = $em->getRepository('AppSkeletonCmsBundle:Links')->findAll();

		return array(
			'entities' => $entities,
		);
	}

	/**
	 * Creates a new Links entity.
	 *
	 * @Route("/", name="links_create")
	 * @Method("POST")
	 * @Template("AppSkeletonCmsBundle:Links:new.html.twig")
	 */
	public function createAction(Request $request) {
		$now = new \DateTime('now');

		$entity  = new Links();
		$entity->setCreated($now);
		$entity->setUpdated($now);

		$form = $this->createForm(new LinksType(), $entity);
		$form->bind($request);

		if ($form->isValid()) {
			$em = $this->getDoctrine()->getManager();
			$em->persist($entity);
			$em->flush();

			return $this->redirect($this->generateUrl('links_show', array('id' => $entity->getId())));
		}

		return array(
			'entity' => $entity,
			'form'   => $form->createView(),
		);
	}

	/**
	 * Displays a form to create a new Links entity.
	 *
	 * @Route("/new", name="links_new")
	 * @Method("GET")
	 * @Template()
	 */
	public function newAction() {
		$entity = new Links();
		$form   = $this->createForm(new LinksType(), $entity);

		return array(
			'entity' => $entity,
			'form'   => $form->createView(),
		);
	}

	/**
	 * Finds and displays a Links entity.
	 *
	 * @Route("/{id}", name="links_show")
	 * @Method("GET")
	 * @Template()
	 */
	public function showAction($id) {
		$em = $this->getDoctrine()->getManager();

		$entity = $em->getRepository('AppSkeletonCmsBundle:Links')->find($id);

		if (!$entity) {
			throw $this->createNotFoundException('Unable to find Links entity.');
		}

		$deleteForm = $this->createDeleteForm($id);

		return array(
			'entity'      => $entity,
			'delete_form' => $deleteForm->createView(),
		);
	}

	/**
	 * Displays a form to edit an existing Links entity.
	 *
	 * @Route("/{id}/edit", name="links_edit")
	 * @Method("GET")
	 * @Template()
	 */
	public function editAction($id) {
		$em = $this->getDoctrine()->getManager();

		$entity = $em->getRepository('AppSkeletonCmsBundle:Links')->find($id);

		if (!$entity) {
			throw $this->createNotFoundException('Unable to find Links entity.');
		}

		$editForm = $this->createForm(new LinksType(), $entity);
		$deleteForm = $this->createDeleteForm($id);

		return array(
			'entity'      => $entity,
			'edit_form'   => $editForm->createView(),
			'delete_form' => $deleteForm->createView(),
		);
	}

	/**
	 * Edits an existing Links entity.
	 *
	 * @Route("/{id}", name="links_update")
	 * @Method("PUT")
	 * @Template("AppSkeletonCmsBundle:Links:edit.html.twig")
	 */
	public function updateAction(Request $request, $id) {
		$em = $this->getDoctrine()->getManager();

		$entity = $em->getRepository('AppSkeletonCmsBundle:Links')->find($id);
		$entity->setUpdated(new \Datetime('now'));

		if (!$entity) {
			throw $this->createNotFoundException('Unable to find Links entity.');
		}

		$deleteForm = $this->createDeleteForm($id);
		$editForm = $this->createForm(new LinksType(), $entity);
		$editForm->bind($request);

		if ($editForm->isValid()) {
			$em->persist($entity);
			$em->flush();

			return $this->redirect($this->generateUrl('links_edit', array('id' => $id)));
		}

		return array(
			'entity'      => $entity,
			'edit_form'   => $editForm->createView(),
			'delete_form' => $deleteForm->createView(),
		);
	}

	/**
	 * Deletes a Links entity.
	 *
	 * @Route("/{id}", name="links_delete")
	 * @Method("DELETE")
	 */
	public function deleteAction(Request $request, $id) {
		$form = $this->createDeleteForm($id);
		$form->bind($request);

		if ($form->isValid()) {
			$em = $this->getDoctrine()->getManager();
			$entity = $em->getRepository('AppSkeletonCmsBundle:Links')->find($id);

			if (!$entity) {
				throw $this->createNotFoundException('Unable to find Links entity.');
			}

			$em->remove($entity);
			$em->flush();
		}

		return $this->redirect($this->generateUrl('links'));
	}

	/**
	 * Creates a form to delete a Links entity by id.
	 *
	 * @param mixed $id The entity id
	 *
	 * @return Symfony\Component\Form\Form The form
	 */
	private function createDeleteForm($id) {
		return $this->createFormBuilder(array('id' => $id))
			->add('id', 'hidden')
			->getForm()
			;
	}
}

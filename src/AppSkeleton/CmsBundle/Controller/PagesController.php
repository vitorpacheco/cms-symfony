<?php

namespace AppSkeleton\CmsBundle\Controller;


use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
 * Pages controller.
 *
 * @Route("/")
 */
class PagesController extends Controller {

	/**
	 * Lists all Links entities.
	 *
	 * @Route("/dashboard", name="dashboard")
	 * @Method("GET")
	 * @Template()
	 */
	public function dashboardAction() {
		return array();
	}

}
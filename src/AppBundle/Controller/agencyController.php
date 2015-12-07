<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class  agencyController extends Controller

{
	/**
     * @Route("/login_agenzia", name="login_agenzia")
     */
    public function login_agenziaActionAction(Request $request)
    {
		// replace this example code with whatever you need
        return $this->render('AppBundle::login_agenzia.html.twig');
    }
	
	/**
     * @Route("/report_agenzia", name="report_agenzia")
     */
    public function report_agenziaAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('AppBundle::report_agenzia.html.twig');
    }
	
}
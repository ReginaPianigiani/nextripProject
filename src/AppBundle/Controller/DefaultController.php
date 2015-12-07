<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/login_agenzia", name="login_agenzia")
     */
    public function loginAgenziaAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('AppBundle::login_agenzia.html.twig');
    }

 
}
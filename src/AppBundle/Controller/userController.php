<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Destination;

class  userController extends Controller

{
	/**
     * @Route("/login", name="login")
     */
    public function loginAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('AppBundle::login.html.twig');
    }
	
	/**
     * @Route("/home", name="home")
     */
    public function homeAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('AppBundle::home.html.twig');
	}
	
	/**
     * @Route("/profile", name="profile")
     */
    public function profileAction(Request $request)
    {
        $destination = new Destination();
       
        $form = $this->createFormBuilder($destination)
            ->add('destination', 'text')
            ->add('insert', 'submit', array('label' => 'Inserisci'))
            ->getForm();
			
		$form->handleRequest($request);
		
		 if ($form->isValid()) {
			 $data = $form -> getData();
			 
			 return $this->redirectToRoute('add_meta/'.$data->getDestination());
		 }
        return $this->render('AppBundle::profile.html.twig', array(
            'form' => $form->createView(),
			)
		);
		
	}
	
	/**
     * @Route("/add_meta/{destination}", name="add_meta")
     */
    public function add_metaAction(Request $request, $destination)
    {
		var_dump($destination);die;
        // replace this example code with whatever you need
        return $this->render('AppBundle::add_meta.html.twig');
	}
	
	/**
     * @Route("/comments", name="comments")
     */
    public function commentsAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('AppBundle::comments.html.twig');
	}
	
	/**
     * @Route("/friends", name="friends")
     */
    public function friendsAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('AppBundle::friends.html.twig');
	}
	
	
	
}

<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;

class contactMailController extends Controller
{
    /**
     * @Route("/contact/mail")
     * @Template("AppBundle:ContactMail:contactMail.html.twig")
     */
    public function contactMailAction(Request $request)
    {
        $form = $this->createFormBuilder()
					->add("from", "text")
					->add('subject', 'text',[
							'attr'=>[
								'placeholder'=>'Title',
								],
							])
					->add('message', 'textarea')
					->add('send', 'submit', ['label'=>'Submit'])
					->getForm();

				$form->handleRequest($request);
				
				if ($form->isValid()) {
					$this->addFlash('notice','Richiesta ricevuta');
					
					$mailAdmin = $this ->getParameter('email_amministratore');
					$data = $form ->getData();
					
					$message = new \Swift_Message();
					
					$message->setTo($mailAdmin, 'Admin del sito');					
					$message->setFrom($data['from']);					
					$message->setSubject($data['subject']);					
					$message->setBody($data['message']);

					$this->get('mailer')->send($message);
				}
				
				return[
					'form_di_contatto' =>$form->createView(),
					];
				}

}

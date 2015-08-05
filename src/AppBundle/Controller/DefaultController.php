<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        $user = $this->container->get('security.context')->getToken()->getUser();

        if( $this->container->get('security.context')->isGranted('IS_AUTHENTICATED_FULLY') ){
            return $this->redirectToRoute('vitalpost');
        }
        else
        {
            return $this->render('AppBundle::index.html.twig');
        }

    }

    /**
     * @Route("/admin")
     */
    public function adminAction()
    {
    	return new Response('Admin page!');
    }


}

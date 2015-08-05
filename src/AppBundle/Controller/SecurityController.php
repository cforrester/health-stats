<?php

namespace AppBundle\Controller;

use FOS\UserBundle\Controller\SecurityController as BaseController;
use Symfony\Component\DependencyInjection\ContainerAware;
use Symfony\Component\Security\Core\SecurityContext;

use Symfony\Component\HttpFoundation\Request;


class SecurityController extends BaseController
{
    /**
    * Overriding the FOS default method so that we can choose a template
    */
    protected function renderLogin(array $data)
    {
        $template = $this->getTemplate();

        return $this->container->get('templating')->renderResponse($template, $data);
    }


    /**
    * You get the subdomain and return the correct template
    */
    public function getTemplate(){

        $subdomain = $this->container->get('request')->getHost();

        if ($subdomain === "microsite1.mainsite.com"){
            $template = sprintf('AcmeUserBundle:Security:loginMicrosite1.html.%s', $this->container->getParameter('fos_user.template.engine'));
        }
        elseif($subdomain === "microsite2.mainsite.com"){
            $template = sprintf('AcmeUserBundle:Security:loginMicrosite2.html.%s', $this->container->getParameter('fos_user.template.engine'));
       }
       //blablabla
       //Customize with what you need here.

       return $template;
    }
}
<?php

namespace WebsiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="index")
     */
    public function indexAction()
    {
        //return $this->render('default/index.html.twig');
        return $this->render('default/index.html.twig');
    }
    public function sidebarAction()
    {
            return $this->render('default/sidebar.html.twig');
    }
}

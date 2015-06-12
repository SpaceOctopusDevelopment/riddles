<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    /**
     * @Route("/app/example", name="homepage")
     */
    public function indexAction()
    {
        return $this->render('default/index.html.twig');
    }

    public function aboutAction(){
        //I hate camelCase 
        return $this->render('default/about.html.twig');
    }

    public function addAction(){
        return $this->render('default/add.html.twig'); 
    }
}

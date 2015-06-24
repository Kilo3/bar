<?php

namespace Bar\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $name = 'test';
        return $this->render('BarMainBundle:Default:index.html.twig', array('name' => $name));
    }
}

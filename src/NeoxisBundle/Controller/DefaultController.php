<?php

namespace NeoxisBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('NeoxisBundle:Default:index.html.twig');
    }
}

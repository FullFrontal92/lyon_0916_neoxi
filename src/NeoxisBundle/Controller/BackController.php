<?php
namespace NeoxisBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BackController extends Controller
{
    public function loginAction()
    {
        return $this->render('NeoxisBundle:Back:login.html.twig');
    }

    public function adminAction()
    {
        return $this->render('NeoxisBundle:Back:admin.html.twig');
    }

}
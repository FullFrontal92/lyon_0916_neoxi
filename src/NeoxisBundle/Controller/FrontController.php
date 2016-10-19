<?php
namespace NeoxisBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class FrontController extends Controller
{
    public function actuAction()
    {
        return $this->render('NeoxisBundle:Front:actu.html.twig');
    }

    public function contactAction()
    {
        return $this->render('NeoxisBundle:Front:contact.html.twig');
    }

    public function notre_expertiseAction()
    {
        return $this->render('NeoxisBundle:Front:notre_expertise.html.twig');
    }

    public function nos_engagementsAction()
    {
        return $this->render('NeoxisBundle:Front:nos_engagements.html.twig');
    }

    public function logiciels_referencesAction()
    {
        return $this->render('NeoxisBundle:Front:logiciels_references.html.twig');
    }

    public function societeAction()
    {
        return $this->render('NeoxisBundle:Front:societe.html.twig');
    }

    public function headAction()
    {
        return $this->render('NeoxisBundle:Front:head.html.twig');
    }

    public function headerAction()
    {
        return $this->render('NeoxisBundle:Front:header.html.twig');
    }

    public function footerAction()
    {
        return $this->render('NeoxisBundle:views:front:footer.html.twig');
    }

    public function getUpAction()
    {
        return $this->render('NeoxisBundle:Front:getUp.html.twig');
    }
}


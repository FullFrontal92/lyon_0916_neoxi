<?php
namespace NeoxisBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class FrontController extends Controller
{
    public function actualiteAction()
    {
        $em = $this->getDoctrine()->getManager();

        $news = $em->getRepository('NeoxisBundle:news')->findAll();
        return $this->render('NeoxisBundle:Front:actu.html.twig', array(
            'news' => $news,
        ));
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

    public function mention_legalesAction()
    {
        return $this->render('NeoxisBundle:Front:mention_legales.html.twig');
    }

    public function neo_homeAction()
    {
        $em = $this->getDoctrine()->getManager();

        $news = $em->getRepository('NeoxisBundle:news')->findAll();
        return $this->render('NeoxisBundle:Front:neo_home.html.twig', array(
            'news' => $news,
        ));
    }
}


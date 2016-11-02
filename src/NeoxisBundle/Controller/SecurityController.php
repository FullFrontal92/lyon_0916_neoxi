<?php
/**
 * Created by PhpStorm.
 * User: apprenti
 * Date: 24/10/16
 * Time: 17:02
 */

namespace NeoxisBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SecurityController extends Controller
{

    public function loginAction()
    {
        $authenticationUtils = $this->get('security.authentication_utils');

        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();

        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('security/login.html.twig', array(
            'last_username' => $lastUsername,
            'error'         => $error,
        ));
    }


    public function adminAction()
    {
        $em = $this->getDoctrine()->getManager();

        $news = $em->getRepository('NeoxisBundle:news')->findAll();

        return $this->render('security/admin.html.twig', array(
            'news' => $news,
        ));
    }
}
<?php
namespace NeoxisBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use NeoxisBundle\Entity\news;
use Symfony\Component\HttpFoundation\Request;

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

    public function swiftmailerAction()
    {
        $Request = $this->getRequest();
        if ($Request->getMethod() == "POST") {

            $name = $Request->get("name");
            $surname = $Request->get("surname");

            //change mail here ///////////////////////////////////////////
            $To = 'mailneoxi@gmail.com'; //<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<
            //change mail here ///////////////////////////////////////////

            $email = $Request->get("email");
            $phone = $Request->get("phone");
            $subject = 'Formulaire Neoxi: - '.$name.' '.$surname;
            $message = $Request->get("message");

            $mailer = $this->container->get('mailer');
            $transport = \Swift_SmtpTransport::newInstance('smtp.gmail.com', 465, 'ssl')
                ->setUsername('mailneoxi@gmail.com')
                ->setPassword('neoximail');
            $mailer = \Swift_Mailer::newInstance($transport);

            $message = \Swift_Message::newInstance('Test')
                ->setSubject($subject)
                ->setFrom(array('mailneoxi@gmail.com' => 'neoxi'))
                ->setTo($To)
                ->setBody($email.': 
                                  
'.$name.' '.$surname.' - tel: '.$phone.'
        
'.$message);
            $mailer->send($message);
        }
        header('Location:/contact');
        exit();
    }
}
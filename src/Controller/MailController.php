<?php

namespace App\Controller;

use Pimcore\Controller\FrontendController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MailController extends FrontendController
{
    /**
  * @Route("/email", name="login",methods={"GET"})
   */
  public function Emailtrigger()
  {
    $mail=new \Pimcore\Mail();
    $mail->to('fortesting@gmail.com');
    $mail->text("this is testing mail");
    $mail->send();
    return $this->render('default/home.html.twig');
  }

}


<?php

namespace App\Controller;

use Pimcore\Controller\FrontendController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use App\Form\Contact;

class EmailController extends FrontendController
{
//      /**
    
//     * @param Request $request
//     * @return Response
//     */

//    /**
//    * @Route("/mail", name="mail",methods={"GET", "POST"})
//    */
     /**
    * @Template
    * @param Request $request
    * @return array
    */

    public function emailAction(Request $request)
    {
        // $form = $this->createForm(type: Contact::class);

        // $form->handleRequest($request);
        // if ($form->isSubmitted()) {
        //     if ($form->isValid()) {
        //        $formData = $form->getData();

        //      try {
        //         $mail=new \Pimcore\Mail();
        //         $mail=from($formData['email']);
        //         $mail->to('team6testpimcore@gmail.com');
        //         $mail->setDocument('/emails/contact-us');
        //         $mail->setParams($formData);
        //         $mail->send();
        //       } catch (\Throwable $e) {
        //         return $this->redirect(url:'http://ecom/Contact');
        //       }

        //       return $this->redirect(url:'http://ecom/Contact');
        //     }
        // }
 
        //      return [

        //         'form' => $form->createView()

        //      ];

        $mail = new \Pimcore\Mail();
        $mail->to('team6testpimcore@gmail.com');
        $mail->setDocument('/email/contact-us');
        $mail->send();
    }

    /**
    * @Template
    * @param Request $request
    * @return Response
    */

    public function contactAction(Request $request)
    {
        $attributes = $request->attributes->all();

        return $this->render('emails/contact.html.twig', ['attributes'=>$attributes]);
    }
}  

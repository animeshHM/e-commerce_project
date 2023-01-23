<?php

namespace App\Controller;

use Google\Service\Dns\ResponsePoliciesListResponse;
use Pimcore\Controller\FrontendController;
use Pimcore\Model\DataObject;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\DefaultService;

class DefaultController extends FrontendController
{

    /**
     * @param DefaultServics $
     */

    /**
     * @param Request $request
     * @return Response
     */
    public function defaultAction(Request $request): Response
    {
        return $this->render('default/default.html.twig');
    }

    /**
     * @param Request $request
     * @return Response
     */
    public function headerAction(Request $request): Response
    {
        return $this->render('default/header.html.twig');
    }

    /**
     * @param Request $request
     * @return Response
     */
    public function footerAction(Request $request): Response
    {
        return $this->render('default/footer.html.twig');
    }

    /**
     * @Route("/home", name="home", methods={"GET"})
     * @param Request $request
     * @return Response
     */
    public function homeAction(Request $request): Response
    {
        return $this->render('default/home.html.twig');
    }

    /**
     * @Route("/allProducts/{page}", methods={"GET", "POST"})
     * @param Request $request
     * @return Response
     */
    public function allProductsAction($page): Response
    {
        $obj=[];
        $pageItems = [];
        $items = new DataObject\Electronics\Listing();
        $items->setOrderKey("productName");
        $items->setOrder('asc');
        foreach ($items as $item) {
            array_push($obj, $item);
        }

        $items = new DataObject\Clothing\Listing();
        $items->setOrderKey("productName");
        $items->setOrder('asc');
        foreach ($items as $item) {
            array_push($obj, $item);
        }

        $items = new DataObject\Footwear\Listing();
        $items->setOrderKey("productName");
        $items->setOrder('asc');
        foreach ($items as $item) {
            array_push($obj, $item);
        }

        $items = new DataObject\Beauty\Listing();
        $items->setOrderKey("productName");
        $items->setOrder('asc');
        foreach ($items as $item) {
            array_push($obj, $item);
        }

        $pageItems = array_slice($obj, ($page - 1) * 3, 3);
        $totalPages = ceil(count($obj)/3);
        return $this->render('default/allProducts.html.twig', ['object'=>$pageItems, 'number'=>$totalPages]);
    }



    /**
     * @Route("/login", name="login", methods={"GET"})
     * @param Request $request
     * @return Response
     */
    public function loginAction(Request $request): Response
    {
        return $this->render('default/login.html.twig');
    }

    /**
     * @Route("/signup", name="signup", methods={"GET"})
     * @param Request $request
     * @return Response
     */
    public function signupAction(Request $request): Response
    {
        return $this->render('default/signup.html.twig');
    }

    /**
     * @param Request $request
     * @return Response
     */
    public function feedbackAction(Request $request): Response
    {
        return $this->render('default/feedback.html.twig');
    }

    /**
     * @Route("/submit", name="submit", methods={"POST"})
     * @param Request $request
     * @return Response
     */
    public function submit(Request $request): Response
    {
        $ob = new DataObject\Feedback;
        $key = "feedback".time();
        $ob->setKey($key);
        $ob->setParentId(35);
        $ob->setName($request->get("Name"));
        $ob->setEmail($request->get("Email"));
        $ob->setMessage($request->get("Message"));
        $ob->save();

        $mail=new \Pimcore\Mail();
        $mail->to('fortesting@gmail.com');
        $mail->text("this is testing mail");
        $mail->send();

        return $this->render('default/home.html.twig');
    }

    /**
     * @Route("/cart", name="cart", methods={"GET"})
     * @param Request $request
     * @return Response
     */
    public function addToCartAction(Request $request): Response
    {
        return $this->render('default/cart.html.twig');
    }
}

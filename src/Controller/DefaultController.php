<?php

namespace App\Controller;

use Pimcore\Controller\FrontendController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Pimcore\Model\DataObject;
use Symfony\Component\Rounting\Annotation\Route;

class DefaultController extends FrontendController
{
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
    public function beautyAction(Request $request): Response
    {   
        $item = new DataObject\Beauty\Listing();
        $item->setOrderKey("productId");
        $item->setOrder('asc');
        return $this->render('default/beauty.html.twig', ['object'=>$item]);
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
     * @param Request $request
     * @return Response
     */
    public function homeAction(Request $request): Response
    {
        return $this->render('default/home.html.twig');
    }

    /**
     * @param Request $request
     * @return Response
     */
    public function clothingAction(Request $request): Response
    {
        return $this->render('default/clothing.html.twig');
    }


     /**
     * @param Request $request
     * @return Response
     */
    public function footwearAction(Request $request): Response
    {
        return $this->render('default/footwear.html.twig');
    }

    /**
     * @param Request $request
     * @return Response
     */
    public function feedbackAction(Request $request): Response
    {
        return $this->render('default/feedback.html.twig');
    }
}


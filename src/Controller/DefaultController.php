<?php

namespace App\Controller;

use Pimcore\Controller\FrontendController;
use Pimcore\Model\DataObject;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Pimcore\Model\DataObject\Electronics;
use Pimcore\Model\DataObject\Electronics\Listing;
use Symfony\Component\Routing\Annotation\Route;

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
     * @Route("/electronics", name="electronics", methods={"GET"})
     * @param Request $request
     * @return Response
     */
    public function electronicsAction(Request $request): Response
    {
        $items = new DataObject\Electronics\Listing();
        $items->setOrderKey("productName");
        $items->setOrder('asc');
        return $this->render('electronics/default.html.twig', ['object'=>$items]);
    }
}

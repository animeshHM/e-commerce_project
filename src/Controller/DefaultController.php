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

    /**
     * @Route("/mobile", name="mobile", methods={"GET"})
     * @param Request $request
     * @return Response
     */
    public function mobileAction(Request $request): Response
    {
        $items = new DataObject\Electronics\Listing();
        $items->setOrderKey("productName", false);
        $items->setOrder('asc');
        $mobiles = [];
        foreach ($items as $item){
            if ($item->getElectronicsType()=='Mobile') {
                array_push($mobiles, $item);
            }
        }
        return $this->render('electronics/default.html.twig', ['object'=>$mobiles]);
    }

    /**
     * @Route("/laptop", name="laptop", methods={"GET"})
     * @param Request $request
     * @return Response
     */
    public function laptopAction(Request $request): Response
    {
        $items = new DataObject\Electronics\Listing();
        $items->setOrderKey("productName", false);
        $items->setOrder('asc');
        $laptops = [];
        foreach ($items as $item){
            if ($item->getElectronicsType()=='Laptop') {
                array_push($laptops, $item);
            }
        }
        return $this->render('electronics/default.html.twig', ['object'=>$laptops]);
    }

    /**
     * @Route("/refrigerator", name="refrigerator", methods={"GET"})
     * @param Request $request
     * @return Response
     */
    public function refrigeratorAction(Request $request): Response
    {
        $items = new DataObject\Electronics\Listing();
        $items->setOrderKey("productName", false);
        $items->setOrder('asc');
        $refrigerators = [];
        foreach ($items as $item){
            if ($item->getElectronicsType()=='Refrigerator') {
                array_push($refrigerators, $item);
            }
        }
        return $this->render('electronics/default.html.twig', ['object'=>$refrigerators]);
    }

    /**
     * @Route("/television", name="television", methods={"GET"})
     * @param Request $request
     * @return Response
     */
    public function televisionAction(Request $request): Response
    {
        $items = new DataObject\Electronics\Listing();
        $items->setOrderKey("productName", false);
        $items->setOrder('asc');
        $televisions = [];
        foreach ($items as $item){
            if ($item->getElectronicsType()=='Television') {
                array_push($televisions, $item);
            }
        }
        return $this->render('electronics/default.html.twig', ['object'=>$televisions]);
    }
}

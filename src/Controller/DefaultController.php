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
        return $this->render('default/electronics.html.twig', ['object'=>$items]);
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
        return $this->render('default/electronics.html.twig', ['object'=>$mobiles]);
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
        return $this->render('default/electronics.html.twig', ['object'=>$laptops]);
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
        return $this->render('default/electronics.html.twig', ['object'=>$refrigerators]);
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
        return $this->render('default/electronics.html.twig', ['object'=>$televisions]);
    }

    /**
     * @Route("/clothing", name="clothing", methods={"GET"})
     * @param Request $request
     * @return Response
     */
    public function clothingAction(Request $request): Response
    {
        $items = new DataObject\Clothing\Listing();
        $items->setOrderKey("productName");
        $items->setOrder('asc');
        return $this->render('default/clothing.html.twig', ['object'=>$items]);
    }

    /**
     * @Route("/topWear", name="topWear", methods={"GET"})
     * @param Request $request
     * @return Response
     */
    public function topWearAction(Request $request): Response
    {
        $items = new DataObject\Clothing\Listing();
        $items->setOrderKey("productName", false);
        $items->setOrder('asc');
        $topWear = [];
        foreach ($items as $item){
            if ($item->getClothingType()=='TopWear') {
                array_push($topWear, $item);
            }
        }
        return $this->render('default/clothing.html.twig', ['object'=>$topWear]);
    }

    /**
     * @Route("/bottomWear", name="bottomWear", methods={"GET"})
     * @param Request $request
     * @return Response
     */
    public function bottomWearAction(Request $request): Response
    {
        $items = new DataObject\Clothing\Listing();
        $items->setOrderKey("productName", false);
        $items->setOrder('asc');
        $bottomWear = [];
        foreach ($items as $item){
            if ($item->getClothingType()=='BottomWear') {
                array_push($bottomWear, $item);
            }
        }
        return $this->render('default/clothing.html.twig', ['object'=>$bottomWear]);
    }

    /**
     * @Route("/ethnicWear", name="ethnicWear", methods={"GET"})
     * @param Request $request
     * @return Response
     */
    public function ethnicWearAction(Request $request): Response
    {
        $items = new DataObject\Clothing\Listing();
        $items->setOrderKey("productName", false);
        $items->setOrder('asc');
        $ethnicWear = [];
        foreach ($items as $item){
            if ($item->getClothingType()=='EthnicWear') {
                array_push($ethnicWear, $item);
            }
        }
        return $this->render('default/clothing.html.twig', ['object'=>$ethnicWear]);
    }

    /**
     * @Route("/menClothing", name="menClothing", methods={"GET"})
     * @param Request $request
     * @return Response
     */
    public function menClothingAction(Request $request): Response
    {
        $items = new DataObject\Clothing\Listing();
        $items->setOrderKey("productName", false);
        $items->setOrder('asc');
        $menClothing = [];
        foreach ($items as $item){
            if ($item->getGender()=='Male') {
                array_push($menClothing, $item);
            }
        }
        return $this->render('default/clothing.html.twig', ['object'=>$menClothing]);
    }

    /**
     * @Route("/womenClothing", name="womenClothing", methods={"GET"})
     * @param Request $request
     * @return Response
     */
    public function womenClothingAction(Request $request): Response
    {
        $items = new DataObject\Clothing\Listing();
        $items->setOrderKey("productName", false);
        $items->setOrder('asc');
        $womenClothing = [];
        foreach ($items as $item){
            if ($item->getGender()=='Female') {
                array_push($womenClothing, $item);
            }
        }
        return $this->render('default/clothing.html.twig', ['object'=>$womenClothing]);
    }
}

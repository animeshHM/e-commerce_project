<?php

namespace App\Controller;

use Pimcore\Controller\FrontendController;
use Google\Service\Dns\ResponsePoliciesListResponse;
use Pimcore\Model\DataObject;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\ObjectListingService;

class ObjectListingController extends FrontendController
{
    /**
     * @Route("/electronics", name="electronics", methods={"GET"})
     * @param Request $request
     * @return Response
     */
    public function electronicsAction(Request $request): Response
    {
        $item = new ObjectListingService;
        $items = $item -> electronicsDataAction();
        return $this->render('default/electronics.html.twig', ['object'=>$items]);
    }

    /**
     * @Route("/mobile", name="mobile", methods={"GET"})
     * @param Request $request
     * @return Response
     */
    public function mobileAction(Request $request): Response
    {
        $item = new ObjectListingService;
        $items = $item -> mobileDataAction();
        return $this->render('default/electronics.html.twig', ['object'=>$items]);
    }

    /**
     * @Route("/laptop", name="laptop", methods={"GET"})
     * @param Request $request
     * @return Response
     */
    public function laptopAction(Request $request): Response
    {
        $item = new ObjectListingService;
        $items = $item -> laptopDataAction();
        return $this->render('default/electronics.html.twig', ['object'=>$items]);
    }

    /**
     * @Route("/refrigerator", name="refrigerator", methods={"GET"})
     * @param Request $request
     * @return Response
     */
    public function refrigeratorAction(Request $request): Response
    {
        $item = new ObjectListingService;
        $items = $item -> refrigeratorDataAction();
        return $this->render('default/electronics.html.twig', ['object'=>$items]);
    }

    /**
     * @Route("/television", name="television", methods={"GET"})
     * @param Request $request
     * @return Response
     */
    public function televisionAction(Request $request): Response
    {
        $item = new ObjectListingService;
        $items = $item -> televisionDataAction();
        return $this->render('default/electronics.html.twig', ['object'=>$items]);
    }

    /**
     * @Route("/clothing", name="clothing", methods={"GET"})
     * @param Request $request
     * @return Response
     */
    public function clothingAction(Request $request): Response
    {
        $item = new ObjectListingService;
        $items = $item -> clothingDataAction();
        return $this->render('default/clothing.html.twig', ['object'=>$items]);
    }

    /**
     * @Route("/topWear", name="topWear", methods={"GET"})
     * @param Request $request
     * @return Response
     */
    public function topWearAction(Request $request): Response
    {
        $item = new ObjectListingService;
        $items = $item -> topWearDataAction();
        return $this->render('default/clothing.html.twig', ['object'=>$items]);
    }

    /**
     * @Route("/bottomWear", name="bottomWear", methods={"GET"})
     * @param Request $request
     * @return Response
     */
    public function bottomWearAction(Request $request): Response
    {
        $item = new ObjectListingService;
        $items = $item -> bottomWearDataAction();
        return $this->render('default/clothing.html.twig', ['object'=>$items]);
    }

    /**
     * @Route("/ethnicWear", name="ethnicWear", methods={"GET"})
     * @param Request $request
     * @return Response
     */
    public function ethnicWearAction(Request $request): Response
    {
        $item = new ObjectListingService;
        $items = $item -> ethnicWearDataAction();
        return $this->render('default/clothing.html.twig', ['object'=>$items]);
    }

    /**
     * @Route("/menClothing", name="menClothing", methods={"GET"})
     * @param Request $request
     * @return Response
     */
    public function menClothingAction(Request $request): Response
    {
        $item = new ObjectListingService;
        $items = $item -> menClothingDataAction();
        return $this->render('default/clothing.html.twig', ['object'=>$items]);
    }

    /**
     * @Route("/womenClothing", name="womenClothing", methods={"GET"})
     * @param Request $request
     * @return Response
     */
    public function womenClothingAction(Request $request): Response
    {
        $item = new ObjectListingService;
        $items = $item -> womenClothingDataAction();
        return $this->render('default/clothing.html.twig', ['object'=>$items]);
    }

    /**
     * @Route("/beauty", name="beauty", methods={"GET"})
     * @param Request $request
     * @return Response
     */
    public function beautyAction(Request $request): Response
    {
        $item = new ObjectListingService;
        $items = $item->beautyDataAction();
        return $this->render('default/beauty.html.twig', ['object'=>$items]);
    }

    /**
    * @Route("/eyeliner", name="eyeliner", methods={"GET"})
    * @param Request $request
    * @return Response
    */
    public function eyelinerAction(Request $request): Response
    {
        $item = new ObjectListingService;
        $items = $item->eyelinerDataAction();
        return $this->render('default/beauty.html.twig', ['object'=>$items]);
    }

    /**
    * @Route("/lipstick", name="lipstick", methods={"GET"})
    * @param Request $request
    * @return Response
    */
    public function lipstickAction(Request $request): Response
    {
        $item = new ObjectListingService;
        $items = $item->lipstickDataAction();
        return $this->render('default/beauty.html.twig', ['object'=>$items]);
    }

    /**
    * @Route("/perfume", name="perfume", methods={"GET"})
    * @param Request $request
    * @return Response
    */
    public function perfumeAction(Request $request): Response
    {
        $item = new ObjectListingService;
        $items = $item->perfumeDataAction();
        return $this->render('default/beauty.html.twig', ['object'=>$items]);
    }

    /**
    * @Route("/shampoo", name="shampoo", methods={"GET"})
    * @param Request $request
    * @return Response
    */
    public function shampooAction(Request $request): Response
    {
        $item = new DataObject\Beauty\Listing();
        $items = $item->shampooDataAction();
        return $this->render('default/beauty.html.twig', ['object'=>$items]);
    }

    /**
     * @Route("/footwear", name="footwear", methods={"GET"})
     * @param Request $request
     * @return Response
     */
    public function footwearAction(Request $request): Response
    {
        $item = new ObjectListingService;
        $items = $item->footwearDataAction();
        return $this->render('default/footwear.html.twig', ['object'=>$items]);
    }

     /**
    * @Route("/boots", name="boots", methods={"GET"})
    * @param Request $request
    * @return Response
    */
    public function bootsAction(Request $request): Response
    {
        $item = new ObjectListingService;
        $items = $item->bootsDataAction();
        return $this->render('default/footwear.html.twig', ['object'=>$items]);
    }

    /**
    * @Route("/heels", name="heels", methods={"GET"})
    * @param Request $request
    * @return Response
    */
    public function heelsAction(Request $request): Response
    {
        $item = new ObjectListingService;
        $items = $item->heelsDataAction();
        return $this->render('default/footwear.html.twig', ['object'=>$items]);
    }

    /**
    * @Route("/sandals", name="sandals", methods={"GET"})
    * @param Request $request
    * @return Response
    */
    public function sandalsAction(Request $request): Response
    {
        $item = new ObjectListingService;
        $items = $item->sandalsDataAction();
        return $this->render('default/footwear.html.twig', ['object'=>$items]);
    }

    /**
    * @Route("/formalshoes", name="formalshoes", methods={"GET"})
    * @param Request $request
    * @return Response
    */
    public function formalshoesAction(Request $request): Response
    {
        $item = new ObjectListingService;
        $items = $item->formalshoesDataAction();
        return $this->render('default/footwear.html.twig', ['object'=>$items]);
    }

    /**
    * @Route("/sportsshoes", name="sportsshoes", methods={"GET"})
    * @param Request $request
    * @return Response
    */
    public function sportsshoesAction(Request $request): Response
    {
        $item = new ObjectListingService;
        $items = $item->sportsshoesDataAction();
        return $this->render('default/footwear.html.twig', ['object'=>$items]);
    }
}
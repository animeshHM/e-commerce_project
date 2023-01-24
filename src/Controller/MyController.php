<?php

namespace App\Controller;

use App\Service\ObjectListingService;
use Google\Service\Dns\ResponsePoliciesListResponse;
use Pimcore\Controller\FrontendController;
use Pimcore\Model\DataObject;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MyController extends FrontendController
{
    /**
     * @Route("/clothing/data", methods={"POST", "GET"})
     * @param Request $request
     * @return Response
     */
    public function clothingDisplayAction(Request $request): Response
    {
        $items = new DataObject\Clothing\Listing();

        foreach ($items as $key => $item) {
            $data[] = array(
                "productId" => $item->getProductID(),
                "productName" => $item->getProductName(),
                "productImage" => $item->getProductImage()->getFullPath(),
                "description" => $item->getDescription(),
                "gender" => $item->getGender(),
                "clothingType" => $item->getClothingType()
            );
        }

        return $this->json(["success" => true, "data" => $data]);
    }

    /**
     * @Route("/electronics/data", methods={"POST", "GET"})
     * @param Request $request
     * @return Response
     */
    public function electronicsDisplayAction(Request $request): Response
    {
        $items = new ObjectListingService();
        $item = $items->electronicsJsonDataAction();
        $object = json_decode($item);
        return $this->json($object);
    }

    /**
     * @Route("/beauty/data", methods={"POST", "GET"})
     * @param Request $request
     * @return Response
     */
    public function beautyJsonAction(Request $request): Response
    {
        $items = new ObjectListingService();
        $item = $items->beautyJsonDataAction();
        $object = json_decode($item);
        return $this->json($object);
    }

    // /**
    //  * @Route("/beauty", methods={"POST", "GET"})
    //  * @param Request $request
    //  * @return Response
    //  */
    // public function beautyDisplayAction(Request $request): Response
    // {
    //     $items = new ObjectListingService();
    //     $item = $items->beautyDataAction();
    //     $object = json_decode($item);
    //     // return $this->json($object);
    //     return $this->render('default/beauty.html.twig', ['object'=>$object]);
    // }

    /**
     * @Route("/footwear/data", methods={"POST", "GET"})
     * @param Request $request
     * @return Response
     */
    public function footwearDisplayAction(Request $request): Response
    {
        $footwearItems = new DataObject\Footwear\Listing();

        foreach ($footwearItems as $key => $footwearItem) {
            $data[] = array(
                "productId" => $footwearItem->getProductID(),
                "productName" => $footwearItem->getProductName(),
                "productImage" => $footwearItem->getProductImage()->getFullPath(),
                "description" => $footwearItem->getDescription(),
                "gender" => $footwearItem->getGender(),
                "footwearType" => $footwearItem->getFootwearType()
            );
        }

        return $this->json(["success" => true, "data" => $data]);
    }
}

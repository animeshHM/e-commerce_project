<?php

namespace App\Controller;

use Pimcore\Controller\FrontendController;
use Google\Service\Dns\ResponsePoliciesListResponse;
use Pimcore\Model\DataObject;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\ObjectListingService;

class SearchController extends FrontendController
{
    /**
     * @Route("/searchElectronics", name="searchElectronics", methods={"POST"})
     * @param Request $request
     * @return Response
     */
    public function searchElectronics(Request $request): Response
    {
        $str = $request->get("search");
        $items = new DataObject\Electronics\Listing();
        $items->setCondition("description LIKE ?", ["%$str%"]);
        return $this->render('default/electronics.html.twig', ['object'=>$items]);
    }

    /**
     * @Route("/searchBeauty", name="searchBeauty", methods={"POST"})
     * @param Request $request
     * @return Response
     */
    public function searchBeauty(Request $request): Response
    {
        $str = $request->get("search");
        $items = new DataObject\Beauty\Listing();
        $items->setCondition("description LIKE ?", ["%$str%"]);
        return $this->render('default/beauty.html.twig', ['object'=>$items]);
    }

    /**
     * @Route("/searchFootwear", name="searchFootwear", methods={"POST"})
     * @param Request $request
     * @return Response
     */
    public function searchFootwear(Request $request): Response
    {
        $str = $request->get("search");
        $items = new DataObject\Footwear\Listing();
        $items->setCondition("description LIKE ?", ["%$str%"]);
        return $this->render('default/footwear.html.twig', ['object'=>$items]);
    }

    /**
     * @Route("/searchClothing", name="searchClothing", methods={"POST"})
     * @param Request $request
     * @return Response
     */
    public function searchClothing(Request $request): Response
    {
        $str = $request->get("search");
        $items = new DataObject\Clothing\Listing();
        $items->setCondition("description LIKE ?", ["%$str%"]);
        return $this->render('default/clothing.html.twig', ['object'=>$items]);
    }
}
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
    public function searchElectronics(Request $request, \Knp\Component\Pager\PaginatorInterface $paginator): Response
    {
        $list = [];
        $str = $request->get("search");
        $items = new DataObject\Electronics\Listing();
        $items->setCondition("description LIKE ?", ["%$str%"]);
        foreach ($items as $item) {
            array_push($list, $item);
        }
        $paginator = $paginator->paginate(
            $list,
            $request->get('page', 1),
            3
        );
        return $this->render('default/electronics.html.twig',
        ['object' => $paginator,
        'paginationVariables' => $paginator->getPaginationData()]);

    }

    /**
     * @Route("/searchBeauty", name="searchBeauty", methods={"POST"})
     * @param Request $request
     * @return Response
     */
    public function searchBeauty(Request $request, \Knp\Component\Pager\PaginatorInterface $paginator): Response
    {
        $list = [];
        $str = $request->get("search");
        $items = new DataObject\Beauty\Listing();
        $items->setCondition("description LIKE ?", ["%$str%"]);
        foreach ($items as $item) {
            array_push($list, $item);
        }
        $paginator = $paginator->paginate(
            $list,
            $request->get('page', 1),
            3
        );
        return $this->render('default/beauty.html.twig',
        ['object' => $paginator,
        'paginationVariables' => $paginator->getPaginationData()]);

    }

    /**
     * @Route("/searchFootwear", name="searchFootwear", methods={"POST"})
     * @param Request $request
     * @return Response
     */
    public function searchFootwear(Request $request , \Knp\Component\Pager\PaginatorInterface $paginator): Response
    {
        $list = [];
        $str = $request->get("search");
        $items = new DataObject\Footwear\Listing();
        $items->setCondition("description LIKE ?", ["%$str%"]);
        foreach ($items as $item) {
            array_push($list, $item);
        }
        $paginator = $paginator->paginate(
            $list,
            $request->get('page', 1),
            3
        );
        return $this->render('default/footwear.html.twig',
        ['object' => $paginator,
        'paginationVariables' => $paginator->getPaginationData()]);

    }

    /**
     * @Route("/searchClothing", name="searchClothing", methods={"POST"})
     * @param Request $request
     * @return Response
     */
    public function searchClothing(Request $request,  \Knp\Component\Pager\PaginatorInterface $paginator): Response
    {
        $list = [];
        $str = $request->get("search");
        $items = new DataObject\Clothing\Listing();
        $items->setCondition("description LIKE ?", ["%$str%"]);
        foreach ($items as $item) {
            array_push($list, $item);
        }
        $paginator = $paginator->paginate(
            $list,
            $request->get('page', 1),
            3
        );
        return $this->render('default/clothing.html.twig',
        ['object' => $paginator,
        'paginationVariables' => $paginator->getPaginationData()]);
    }
}

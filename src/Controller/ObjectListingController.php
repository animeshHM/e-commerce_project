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
    public function electronicsAction(Request $request,  \Knp\Component\Pager\PaginatorInterface $paginator): Response
    {
        $list = [];
        $item = new ObjectListingService;
        $items = $item->electronicsDataAction();

        foreach ($items as $item) {
            array_push($list, $item);
        }
        $paginator = $paginator->paginate(
            $list,
            $request->get('page', 1),
            3
        );

        return $this->render(
            'default/electronics.html.twig',
            [
                'object' => $paginator,
                'paginationVariables' => $paginator->getPaginationData()
            ]
        );
    }

    /**
     * @Route("/mobile", name="mobile", methods={"GET"})
     * @param Request $request
     * @return Response
     */
    public function mobileAction(Request $request,  \Knp\Component\Pager\PaginatorInterface $paginator): Response
    {
        $item = new ObjectListingService;
        $items = $item->mobileDataAction();
        $paginator = $paginator->paginate(
            $items,
            $request->get('page', 1),
            3
        );

        return $this->render(
            'default/electronics.html.twig',
            [
                'object' => $paginator,
                'paginationVariables' => $paginator->getPaginationData()
            ]
        );
        // return $this->render('default/electronics.html.twig', ['object' => $items]);
    }

    /**
     * @Route("/laptop", name="laptop", methods={"GET"})
     * @param Request $request
     * @return Response
     */
    public function laptopAction(Request $request,  \Knp\Component\Pager\PaginatorInterface $paginator): Response
    {
        $item = new ObjectListingService;
        $items = $item->laptopDataAction();
        $paginator = $paginator->paginate(
            $items,
            $request->get('page', 1),
            3
        );

        return $this->render(
            'default/electronics.html.twig',
            [
                'object' => $paginator,
                'paginationVariables' => $paginator->getPaginationData()
            ]
        );
        // return $this->render('default/electronics.html.twig', ['object' => $items]);
    }

    /**
     * @Route("/refrigerator", name="refrigerator", methods={"GET"})
     * @param Request $request
     * @return Response
     */
    public function refrigeratorAction(Request $request,  \Knp\Component\Pager\PaginatorInterface $paginator): Response
    {
        $item = new ObjectListingService;
        $items = $item->refrigeratorDataAction();
        $paginator = $paginator->paginate(
            $items,
            $request->get('page', 1),
            3
        );

        return $this->render(
            'default/electronics.html.twig',
            [
                'object' => $paginator,
                'paginationVariables' => $paginator->getPaginationData()
            ]
        );
        // return $this->render('default/electronics.html.twig', ['object' => $items]);
    }

    /**
     * @Route("/television", name="television", methods={"GET"})
     * @param Request $request
     * @return Response
     */
    public function televisionAction(Request $request,  \Knp\Component\Pager\PaginatorInterface $paginator): Response
    {
        $item = new ObjectListingService;
        $items = $item->televisionDataAction();
        $paginator = $paginator->paginate(
            $items,
            $request->get('page', 1),
            3
        );

        return $this->render(
            'default/electronics.html.twig',
            [
                'object' => $paginator,
                'paginationVariables' => $paginator->getPaginationData()
            ]
        );
        // return $this->render('default/electronics.html.twig', ['object' => $items]);
    }

    /**
     * @Route("/clothing", name="clothing", methods={"GET"})
     * @param Request $request
     * @return Response
     */
    public function clothingAction(Request $request,  \Knp\Component\Pager\PaginatorInterface $paginator): Response
    {
        $list = [];
        $item = new ObjectListingService;
        $items = $item->clothingDataAction();
        foreach ($items as $item) {
            array_push($list, $item);
        }
        $paginator = $paginator->paginate(
            $list,
            $request->get('page', 1),
            3
        );

        return $this->render(
            'default/clothing.html.twig',
            [
                'object' => $paginator,
                'paginationVariables' => $paginator->getPaginationData()
            ]
        );
    }

    /**
     * @Route("/topWear", name="topWear", methods={"GET"})
     * @param Request $request
     * @return Response
     */
    public function topWearAction(Request $request,  \Knp\Component\Pager\PaginatorInterface $paginator): Response
    {
        $item = new ObjectListingService;
        $items = $item->topWearDataAction();
        $paginator = $paginator->paginate(
            $items,
            $request->get('page', 1),
            3
        );

        return $this->render(
            'default/clothing.html.twig',
            [
                'object' => $paginator,
                'paginationVariables' => $paginator->getPaginationData()
            ]
        );
    }

    /**
     * @Route("/bottomWear", name="bottomWear", methods={"GET"})
     * @param Request $request
     * @return Response
     */
    public function bottomWearAction(Request $request,  \Knp\Component\Pager\PaginatorInterface $paginator): Response
    {
        $item = new ObjectListingService;
        $items = $item->bottomWearDataAction();
        $paginator = $paginator->paginate(
            $items,
            $request->get('page', 1),
            3
        );

        return $this->render(
            'default/clothing.html.twig',
            [
                'object' => $paginator,
                'paginationVariables' => $paginator->getPaginationData()
            ]
        );

    }

    /**
     * @Route("/ethnicWear", name="ethnicWear", methods={"GET"})
     * @param Request $request
     * @return Response
     */
    public function ethnicWearAction(Request $request,  \Knp\Component\Pager\PaginatorInterface $paginator): Response
    {
        $item = new ObjectListingService;
        $items = $item->ethnicWearDataAction();
        $paginator = $paginator->paginate(
            $items,
            $request->get('page', 1),
            3
        );

        return $this->render(
            'default/clothing.html.twig',
            [
                'object' => $paginator,
                'paginationVariables' => $paginator->getPaginationData()
            ]
        );
        // return $this->render('default/clothing.html.twig', ['object' => $items]);
    }

    /**
     * @Route("/menClothing", name="menClothing", methods={"GET"})
     * @param Request $request
     * @return Response
     */
    public function menClothingAction(Request $request,  \Knp\Component\Pager\PaginatorInterface $paginator): Response
    {
        $item = new ObjectListingService;
        $items = $item->menClothingDataAction();
        $paginator = $paginator->paginate(
            $items,
            $request->get('page', 1),
            3
        );

        return $this->render(
            'default/clothing.html.twig',
            [
                'object' => $paginator,
                'paginationVariables' => $paginator->getPaginationData()
            ]
        );
        // return $this->render('default/clothing.html.twig', ['object' => $items]);
    }

    /**
     * @Route("/womenClothing", name="womenClothing", methods={"GET"})
     * @param Request $request
     * @return Response
     */
    public function womenClothingAction(Request $request,  \Knp\Component\Pager\PaginatorInterface $paginator): Response
    {
        $item = new ObjectListingService;
        $items = $item->womenClothingDataAction();
        $paginator = $paginator->paginate(
            $items,
            $request->get('page', 1),
            3
        );

        return $this->render(
            'default/clothing.html.twig',
            [
                'object' => $paginator,
                'paginationVariables' => $paginator->getPaginationData()
            ]
        );
        // return $this->render('default/clothing.html.twig', ['object' => $items]);
    }

    /**
     * @Route("/beauty", name="beauty", methods={"GET"})
     * @param Request $request
     * @return Response
     */
    public function beautyAction(Request $request, \Knp\Component\Pager\PaginatorInterface $paginator): Response
    {
        $list = [];
        $item = new ObjectListingService;
        $items = $item->beautyDataAction();

        foreach ($items as $item) {
            array_push($list, $item);
        }
        $paginator = $paginator->paginate(
            $list,
            $request->get('page', 1),
            3
        );
        return $this->render(
            'default/beauty.html.twig',
            [
                'object' => $paginator,
                'paginationVariables' => $paginator->getPaginationData()
            ]
        );
    }

    /**
     * @Route("/eyeliner", name="eyeliner", methods={"GET"})
     * @param Request $request
     * @return Response
     */
    public function eyelinerAction(Request $request,  \Knp\Component\Pager\PaginatorInterface $paginator): Response
    {
        $item = new ObjectListingService;
        $items = $item->eyelinerDataAction();
        $paginator = $paginator->paginate(
            $items,
            $request->get('page', 1),
            3
        );
        return $this->render(
            'default/beauty.html.twig',
            [
                'object' => $paginator,
                'paginationVariables' => $paginator->getPaginationData()
            ]
        );
        // return $this->render('default/beauty.html.twig', ['object' => $items]);
    }

    /**
     * @Route("/lipstick", name="lipstick", methods={"GET"})
     * @param Request $request
     * @return Response
     */
    public function lipstickAction(Request $request,  \Knp\Component\Pager\PaginatorInterface $paginator): Response
    {
        $item = new ObjectListingService;
        $items = $item->lipstickDataAction();
        $paginator = $paginator->paginate(
            $items,
            $request->get('page', 1),
            3
        );
        return $this->render(
            'default/beauty.html.twig',
            [
                'object' => $paginator,
                'paginationVariables' => $paginator->getPaginationData()
            ]
        );
        // return $this->render('default/beauty.html.twig', ['object' => $items]);
    }

    /**
     * @Route("/perfume", name="perfume", methods={"GET"})
     * @param Request $request
     * @return Response
     */
    public function perfumeAction(Request $request,  \Knp\Component\Pager\PaginatorInterface $paginator): Response
    {
        $item = new ObjectListingService;
        $items = $item->perfumeDataAction();
        $paginator = $paginator->paginate(
            $items,
            $request->get('page', 1),
            3
        );
        return $this->render(
            'default/beauty.html.twig',
            [
                'object' => $paginator,
                'paginationVariables' => $paginator->getPaginationData()
            ]
        );
        // return $this->render('default/beauty.html.twig', ['object' => $items]);
    }

    /**
     * @Route("/shampoo", name="shampoo", methods={"GET"})
     * @param Request $request
     * @return Response
     */
    public function shampooAction(Request $request,  \Knp\Component\Pager\PaginatorInterface $paginator): Response
    {
        $item = new ObjectListingService;
        $items = $item->shampooDataAction();
        $paginator = $paginator->paginate(
            $items,
            $request->get('page', 1),
            3
        );
        return $this->render(
            'default/beauty.html.twig',
            [
                'object' => $paginator,
                'paginationVariables' => $paginator->getPaginationData()
            ]
        );
        // return $this->render('default/beauty.html.twig', ['object' => $items]);
    }

    /**
     * @Route("/footwear", name="footwear", methods={"GET"})
     * @param Request $request
     * @return Response
     */
    public function footwearAction(Request $request, \Knp\Component\Pager\PaginatorInterface $paginator): Response
    {
        $list = [];
        $item = new ObjectListingService;
        $items = $item->footwearDataAction();

        foreach ($items as $item) {
            array_push($list, $item);
        }
        $paginator = $paginator->paginate(
            $list,
            $request->get('page', 1),
            3
        );
        return $this->render(
            'default/footwear.html.twig',
            [
                'object' => $paginator,
                'paginationVariables' => $paginator->getPaginationData()
            ]
        );
    }

    /**
     * @Route("/boots", name="boots", methods={"GET"})
     * @param Request $request
     * @return Response
     */
    public function bootsAction(Request $request, \Knp\Component\Pager\PaginatorInterface $paginator): Response
    {
        $item = new ObjectListingService;
        $items = $item->bootsDataAction();
        $paginator = $paginator->paginate(
            $items,
            $request->get('page', 1),
            3
        );
        return $this->render(
            'default/footwear.html.twig',
            [
                'object' => $paginator,
                'paginationVariables' => $paginator->getPaginationData()
            ]
        );
        // return $this->render('default/footwear.html.twig', ['object' => $items]);
    }

    /**
     * @Route("/heels", name="heels", methods={"GET"})
     * @param Request $request
     * @return Response
     */
    public function heelsAction(Request $request, \Knp\Component\Pager\PaginatorInterface $paginator): Response
    {
        $item = new ObjectListingService;
        $items = $item->heelsDataAction();
        $paginator = $paginator->paginate(
            $items,
            $request->get('page', 1),
            3
        );
        return $this->render(
            'default/footwear.html.twig',
            [
                'object' => $paginator,
                'paginationVariables' => $paginator->getPaginationData()
            ]
        );
        // return $this->render('default/footwear.html.twig', ['object' => $items]);
    }

    /**
     * @Route("/sandals", name="sandals", methods={"GET"})
     * @param Request $request
     * @return Response
     */
    public function sandalsAction(Request $request, \Knp\Component\Pager\PaginatorInterface $paginator): Response
    {
        $item = new ObjectListingService;
        $items = $item->sandalsDataAction();
        $paginator = $paginator->paginate(
            $items,
            $request->get('page', 1),
            3
        );
        return $this->render(
            'default/footwear.html.twig',
            [
                'object' => $paginator,
                'paginationVariables' => $paginator->getPaginationData()
            ]
        );
        // return $this->render('default/footwear.html.twig', ['object' => $items]);
    }

    /**
     * @Route("/formalshoes", name="formalshoes", methods={"GET"})
     * @param Request $request
     * @return Response
     */
    public function formalshoesAction(Request $request, \Knp\Component\Pager\PaginatorInterface $paginator): Response
    {
        $item = new ObjectListingService;
        $items = $item->formalshoesDataAction();
        $paginator = $paginator->paginate(
            $items,
            $request->get('page', 1),
            3
        );
        return $this->render(
            'default/footwear.html.twig',
            [
                'object' => $paginator,
                'paginationVariables' => $paginator->getPaginationData()
            ]
        );
        // return $this->render('default/footwear.html.twig', ['object' => $items]);
    }

    /**
     * @Route("/sportsshoes", name="sportsshoes", methods={"GET"})
     * @param Request $request
     * @return Response
     */
    public function sportsshoesAction(Request $request, \Knp\Component\Pager\PaginatorInterface $paginator): Response
    {
        $item = new ObjectListingService;
        $items = $item->sportsshoesDataAction();
        $paginator = $paginator->paginate(
            $items,
            $request->get('page', 1),
            3
        );
        return $this->render(
            'default/footwear.html.twig',
            [
                'object' => $paginator,
                'paginationVariables' => $paginator->getPaginationData()
            ]
        );
        // return $this->render('default/footwear.html.twig', ['object' => $items]);
    }
}

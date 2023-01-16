<?php

namespace App\Controller;

use Google\Service\Dns\ResponsePoliciesListResponse;
use Pimcore\Controller\FrontendController;
use Pimcore\Model\DataObject;
use Pimcore\Model\DataObject\Feedback;
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
     * @Route("/home", name="home", methods={"GET"})
     * @param Request $request
     * @return Response
     */
    public function homeAction(Request $request): Response
    {
        return $this->render('default/home.html.twig');
    }

    // /**
    //  * @Route("/electronics/{page}", name="electronics", methods={"GET", "POST"})
    //  * @param Request $request
    //  * @return Response
    //  */
    // public function electronicsPageAction($page): Response
    // {
    //     $items = new DataObject\Electronics\Listing();
    //     $items->setOrderKey("productName");
    //     $items->setOrder('asc');
    //     $obj=[];
    //     $pageItems = [];
    //     foreach ($items as $item){
    //         array_push($obj, $item);
    //     }
    //     $pageItems = array_slice($obj, ($page - 1) * 3, 3);
    //     $totalPages = count($obj)/3;
    //     return $this->render('default/electronics.html.twig', ['object'=>$pageItems, 'number'=>$totalPages]);
    // }

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
        $items->setOrderKey("RAND()", false);
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

    /**
     * @Route("/beauty", name="beauty", methods={"GET"})
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
    * @Route("/eyeliner", name="eyeliner", methods={"GET"})
    * @param Request $request
    * @return Response
    */
    public function eyelinerAction(Request $request): Response
    {
        $items = new DataObject\Beauty\Listing();
        $items->setOrderKey("productID", false);
        $items->setOrder('asc');
        $eyeliner = [];
        foreach ($items as $item){
            if ($item->getbeautyType()=='Eyeliner') {
                array_push($eyeliner, $item);
            }
        }
    return $this->render('default/beauty.html.twig', ['object'=>$eyeliner]);
    }

    /**
    * @Route("/lipstick", name="lipstick", methods={"GET"})
    * @param Request $request
    * @return Response
    */
    public function lipstickAction(Request $request): Response
    {
        $items = new DataObject\Beauty\Listing();
        $items->setOrderKey("productID", false);
        $items->setOrder('asc');
        $lipstick = [];
        foreach ($items as $item){
            if ($item->getbeautyType()=='Lipstick') {
                array_push($lipstick, $item);
            }
        }
    return $this->render('default/beauty.html.twig', ['object'=>$lipstick]);
    }

    /**
    * @Route("/perfume", name="perfume", methods={"GET"})
    * @param Request $request
    * @return Response
    */
    public function perfumeAction(Request $request): Response
    {
        $items = new DataObject\Beauty\Listing();
        $items->setOrderKey("productID", false);
        $items->setOrder('asc');
        $perfume = [];
        foreach ($items as $item){
            if ($item->getbeautyType()=='Perfume') {
                array_push($perfume, $item);
            }
        }
    return $this->render('default/beauty.html.twig', ['object'=>$perfume]);
    }

    /**
    * @Route("/shampoo", name="shampoo", methods={"GET"})
    * @param Request $request
    * @return Response
    */
    public function shampooAction(Request $request): Response
    {
        $items = new DataObject\Beauty\Listing();
        $items->setOrderKey("productID", false);
        $items->setOrder('asc');
        $shampoo = [];
        foreach ($items as $item){
            if ($item->getbeautyType()=='Shampoo') {
                array_push($shampoo, $item);
            }
        }
        return $this->render('default/beauty.html.twig', ['object'=>$shampoo]);
    }

    /**
     * @Route("/footwear", name="footwear", methods={"GET"})
     * @param Request $request
     * @return Response
     */
    public function footwearAction(Request $request): Response
    {
        $items = new DataObject\Footwear\Listing();
        $items->setOrderKey("productName");
        $items->setOrder('asc');
        return $this->render('default/footwear.html.twig', ['object'=>$items]);
    }

     /**
    * @Route("/boots", name="boots", methods={"GET"})
    * @param Request $request
    * @return Response
    */
    public function bootsAction(Request $request): Response
    {
        $items = new DataObject\Footwear\Listing();
        $items->setOrderKey("productID", false);
        $items->setOrder('asc');
        $boots = [];
        foreach ($items as $item){
            if ($item->getfootwearType()=='Boots') {
                array_push($boots, $item);
            }
        }
    return $this->render('default/footwear.html.twig', ['object'=>$boots]);
    }

    /**
    * @Route("/heels", name="heels", methods={"GET"})
    * @param Request $request
    * @return Response
    */
    public function heelsAction(Request $request): Response
    {
        $items = new DataObject\Footwear\Listing();
        $items->setOrderKey("productID", false);
        $items->setOrder('asc');
        $heels = [];
        foreach ($items as $item){
            if ($item->getfootwearType()=='Heels') {
                array_push($heels, $item);
            }
        }
    return $this->render('default/footwear.html.twig', ['object'=>$heels]);
    }

    /**
    * @Route("/sandals", name="sandals", methods={"GET"})
    * @param Request $request
    * @return Response
    */
    public function sandalsAction(Request $request): Response
    {
        $items = new DataObject\Footwear\Listing();
        $items->setOrderKey("productID", false);
        $items->setOrder('asc');
        $sandals = [];
        foreach ($items as $item){
            if ($item->getfootwearType()=='Sandals') {
                array_push($sandals, $item);
            }
        }
    return $this->render('default/footwear.html.twig', ['object'=>$sandals]);
    }

    /**
    * @Route("/formalshoes", name="formalshoes", methods={"GET"})
    * @param Request $request
    * @return Response
    */
    public function formalshoesAction(Request $request): Response
    {
        $items = new DataObject\Footwear\Listing();
        $items->setOrderKey("productID", false);
        $items->setOrder('asc');
        $formalshoes = [];
        foreach ($items as $item){
            if ($item->getfootwearType()=='FormalShoes') {
                array_push($formalshoes, $item);
            }
        }
    return $this->render('default/footwear.html.twig', ['object'=>$formalshoes]);
    }

    /**
    * @Route("/sportsshoes", name="sportsshoes", methods={"GET"})
    * @param Request $request
    * @return Response
    */
    public function sportsshoesAction(Request $request): Response
    {
        $items = new DataObject\Footwear\Listing();
        $items->setOrderKey("productID", false);
        $items->setOrder('asc');
        $sportsshoes = [];
        foreach ($items as $item){
            if ($item->getfootwearType()=='SportsShoes') {
                array_push($sportsshoes, $item);
            }
        }
    return $this->render('default/footwear.html.twig', ['object'=>$sportsshoes]);
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
        $ob = new Feedback;
        $key = "feedback".time();
        $ob->setKey($key);
        $ob->setParentId(35);
        $ob->setName($_POST["Name"]);
        $ob->setEmail($_POST["Email"]);
        $ob->setMessage($_POST["Message"]);
        $ob->save();

        $mail=new \Pimcore\Mail();
        $mail->to('fortesting@gmail.com');
        $mail->text("this is testing mail");
        $mail->send();

        return $this->render('default/home.html.twig');
    }
}

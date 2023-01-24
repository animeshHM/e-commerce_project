<?php

namespace App\Service;

use Google\Service\Dns\ResponsePoliciesListResponse;
use Pimcore\Controller\FrontendController;
use Pimcore\Model\DataObject;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ObjectListingService
{
    public function electronicsDataAction()
    {
        $items = new DataObject\Electronics\Listing();
        $items->setOrderKey("productName");
        $items->setOrder('asc');
        return $items;
    }

    public function mobileDataAction()
    {
        $items = new DataObject\Electronics\Listing();
        $items->setOrderKey("productName", false);
        $items->setOrder('asc');
        $mobiles = [];
        foreach ($items as $item) {
            if ($item->getElectronicsType()=='Mobile') {
                array_push($mobiles, $item);
            }
        }
        return $mobiles;
    }
    public function televisionDataAction()
    {
        $items = new DataObject\Electronics\Listing();
        $items->setOrderKey("productName", false);
        $items->setOrder('asc');
        $televisions = [];
        foreach ($items as $item) {
            if ($item->getElectronicsType()=='Television') {
                array_push($televisions, $item);
            }
        }
        return $televisions;
    }
    public function laptopDataAction()
    {
        $items = new DataObject\Electronics\Listing();
        $items->setOrderKey("productName", false);
        $items->setOrder('asc');
        $laptops = [];
        foreach ($items as $item) {
            if ($item->getElectronicsType()=='Laptop') {
                array_push($laptops, $item);
            }
        }
        return $laptops;
    }
    public function refrigeratorDataAction()
    {
        $items = new DataObject\Electronics\Listing();
        $items->setOrderKey("productName", false);
        $items->setOrder('asc');
        $refrigerators = [];
        foreach ($items as $item) {
            if ($item->getElectronicsType()=='Refrigerator') {
                array_push($refrigerators, $item);
            }
        }
        return $refrigerators;
    }

    public function clothingDataAction()
    {
        $items = new DataObject\Clothing\Listing();
        $items->setOrderKey("productName");
        $items->setOrder('asc');
        return $items;
    }

    public function topWearDataAction()
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
        return $topWear;
    }

    public function bottomWearDataAction()
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
        return $bottomWear;
    }

    public function ethnicWearDataAction()
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
        return $ethnicWear;
    }

    public function menClothingDataAction()
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
        return $menClothing;
    }

    public function womenClothingDataAction()
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
        return $womenClothing;
    }

    public function beautyDataAction()
    {
        $item = new DataObject\Beauty\Listing();
        $item->setOrderKey("productName");
        $item->setOrder('asc');
        return $item;
    }

    public function eyelinerDataAction()
    {
        $items = new DataObject\Beauty\Listing();
        $items->setOrderKey("productName", false);
        $items->setOrder('asc');
        $eyeliner = [];
        foreach ($items as $item){
            if ($item->getbeautyType()=='Eyeliner') {
                array_push($eyeliner, $item);
            }
        }
    return $eyeliner;
    }

    public function lipstickDataAction()
    {
        $items = new DataObject\Beauty\Listing();
        $items->setOrderKey("productName", false);
        $items->setOrder('asc');
        $lipstick = [];
        foreach ($items as $item){
            if ($item->getbeautyType()=='Lipstick') {
                array_push($lipstick, $item);
            }
        }
    return $lipstick;
    }

    public function perfumeDataAction()
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
        return $perfume;
    }

    public function shampooDataAction()
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
        return $shampoo;
    }

    public function footwearDataAction()
    {
        $items = new DataObject\Footwear\Listing();
        $items->setOrderKey("productName");
        $items->setOrder('asc');
        return $items;
    }

    public function bootsDataAction()
    {
        $items = new DataObject\Footwear\Listing();
        $items->setOrderKey("productName", false);
        $items->setOrder('asc');
        $boots = [];
        foreach ($items as $item){
            if ($item->getfootwearType()=='Boots') {
                array_push($boots, $item);
            }
        }
        return $boots;
    }

    public function heelsDataAction()
    {
        $items = new DataObject\Footwear\Listing();
        $items->setOrderKey("productName", false);
        $items->setOrder('asc');
        $heels = [];
        foreach ($items as $item){
            if ($item->getfootwearType()=='Heels') {
                array_push($heels, $item);
            }
        }
        return $heels;
    }

    public function sandalsDataAction()
    {
        $items = new DataObject\Footwear\Listing();
        $items->setOrderKey("productName", false);
        $items->setOrder('asc');
        $sandals = [];
        foreach ($items as $item){
            if ($item->getfootwearType()=='Sandals') {
                array_push($sandals, $item);
            }
        }
        return $sandals;
    }

    public function formalshoesDataAction()
    {
        $items = new DataObject\Footwear\Listing();
        $items->setOrderKey("productName", false);
        $items->setOrder('asc');
        $formalshoes = [];
        foreach ($items as $item){
            if ($item->getfootwearType()=='FormalShoes') {
                array_push($formalshoes, $item);
            }
        }
        return $formalshoes;
    }

    public function sportsshoesDataAction()
    {
        $items = new DataObject\Footwear\Listing();
        $items->setOrderKey("productName", false);
        $items->setOrder('asc');
        $sportsshoes = [];
        foreach ($items as $item){
            if ($item->getfootwearType()=='SportsShoes') {
                array_push($sportsshoes, $item);
            }
        }
        return $sportsshoes;
    }

    public function electronicsJsonDataAction()
    {
        $items = new DataObject\Electronics\Listing();
        $items->setOrderKey("productName");
        $items->setOrder("asc");
        $laptop = [];
        $mobile = [];
        $television = [];
        $refrigerator = [];
        foreach ($items as $item) {
            if ($item->getElectronicsType() == 'Laptop') {

                $dataOneObj = [
                    'productName' => $item->getProductName(),
                    'productImage' => $item->getProductImage()->getFullPath(),
                    'type' => $item->getElectronicsType(),
                    'description' => $item->getDescription(),
                    'brand' => $item->getElectronicItem()->getLaptop()->getBrand(),
                    'battery' => $item->getElectronicItem()->getLaptop()->getBattery(),
                    'displayType' => $item->getElectronicItem()->getLaptop()->getDisplayType(),
                    'cpuType' => $item->getElectronicItem()->getLaptop()->getCPUType(),
                    'screenSize' => $item->getElectronicItem()->getLaptop()->getScreenSize(),
                    'operatingSystem' => $item->getElectronicItem()->getLaptop()->getOperatingSystem(),
                ];

                $laptop[] = $dataOneObj;

            } elseif ($item->getElectronicsType() == 'Mobile') {

                $dataOneObj = [
                    'productName' => $item->getProductName(),
                    'productImage' => $item->getProductImage()->getFullPath(),
                    'type' => $item->getElectronicsType(),
                    'description' => $item->getDescription(),
                    'brand' => $item->getElectronicItem()->getMobile()->getBrand(),
                    'battery' => $item->getElectronicItem()->getMobile()->getBattery(),
                    'displayType' => $item->getElectronicItem()->getMobile()->getStorage(),
                    'refreshRate' => $item->getElectronicItem()->getMobile()->getRefreshRate(),
                    'operatingSystem' => $item->getElectronicItem()->getMobile()->getDisplayType(),
                ];

                $mobile[] = $dataOneObj;

            } elseif ($item->getElectronicsType() == 'Television') {

                $dataOneObj = [
                    'productName' => $item->getProductName(),
                    'productImage' => $item->getProductImage()->getFullPath(),
                    'type' => $item->getElectronicsType(),
                    'description' => $item->getDescription(),
                    'brand' => $item->getElectronicItem()->getTelevision()->getBrand(),
                    'screenSize' => $item->getElectronicItem()->getTelevision()->getScreenSize(),
                    'resolution' => $item->getElectronicItem()->getTelevision()->getResolution(),
                    'soundTechnology' => $item->getElectronicItem()->getTelevision()->getSoundTechnology(),
                    'mountingType' => $item->getElectronicItem()->getTelevision()->getMountingType(),
                    'displayType' => $item->getElectronicItem()->getTelevision()->getDisplayType(),
                ];

                $television[] = $dataOneObj;

            } elseif ($item->getElectronicsType() == 'Refrigerator') {

                $dataOneObj = [
                    'productName' => $item->getProductName(),
                    'productImage' => $item->getProductImage()->getFullPath(),
                    'type' => $item->getElectronicsType(),
                    'description' => $item->getDescription(),
                    'brand' => $item->getElectronicItem()->getRefrigerator()->getBrand(),
                    'capacity' => $item->getElectronicItem()->getRefrigerator()->getCapacity(),
                    'doorCount' => $item->getElectronicItem()->getRefrigerator()->getDoorCount(),
                    'starRating' => $item->getElectronicItem()->getRefrigerator()->getStarRating(),
                    'refrigeratorType' => $item->getElectronicItem()->getRefrigerator()->getRefrigeratorType(),
                    'defrostingType' => $item->getElectronicItem()->getRefrigerator()->getDefrostingType(),
                ];

                $refrigerator[] = $dataOneObj;

            }
        }

        return json_encode(['laptop' => $laptop, 'mobile' => $mobile,
                                'television' => $television, 'refrigerator' => $refrigerator]);
    }

    public function beautyJsonDataAction()
    {
        $items = new DataObject\Beauty\Listing();
        $items->setOrderKey("productName");
        $items->setOrder("asc");
        $eyeliner = [];
        $shampoo = [];
        $lipmakeup = [];
        $perfume=[];
        foreach ($items as $item) {
            if ($item->getBeautyType() == 'Eyeliner') {

                $dataOneObj = [
                    'productName' => $item->getProductName(),
                    'productImage' => $item->getProductImage()->getFullPath(),
                    'manufacturingDate' => $item->getManufacturingDate(),
                    'expiryDate' => $item->getExpiryDate(),
                    // 'price' => $item->getPrice(),
                    'type' => $item->getBeautyType(),
                    'description' => $item->getDescription(),
                    'brand' => $item->getBrands(),
                    'colorShade' => $item->getMakeupProducts()->getEyeliner()->getColorShadeName(),
                    'features' => $item->getMakeupProducts()->getEyeliner()->getFeatures(),
                    'applyType' => $item->getMakeupProducts()->getEyeliner()->getApplyType()
                ];

                $eyeliner[] = $dataOneObj;

            } elseif ($item->getBeautyType() == 'Shampoo') {

                $dataOneObj = [
                    'productName' => $item->getProductName(),
                    'productImage' => $item->getProductImage()->getFullPath(),
                    'manufacturingDate' => $item->getManufacturingDate(),
                    'expiryDate' => $item->getExpiryDate(),
                    // 'price' => $item->getPrice(),
                    'type' => $item->getBeautyType(),
                    'description' => $item->getDescription(),
                    'hairType' => $item->getMakeupProducts()->getShampoo()->getHairType(),
                    'keyIngredients' => $item->getMakeupProducts()->getShampoo()->getKeyIngredients(),
                    'preference' => $item->getMakeupProducts()->getShampoo()->getPreference()
                ];

                $shampoo[] = $dataOneObj;

            } elseif ($item->getBeautyType() == 'Perfume') {

                $dataOneObj = [
                    'productName' => $item->getProductName(),
                    'productImage' => $item->getProductImage()->getFullPath(),
                    'manufacturingDate' => $item->getManufacturingDate(),
                    'expiryDate' => $item->getExpiryDate(),
                    // 'price' => $item->getPrice(),
                    'type' => $item->getBeautyType(),
                    'description' => $item->getDescription(),
                    'hairType' => $item->getMakeupProducts()->getPerfume()->getFormulation(),
                    'keyIngredients' => $item->getMakeupProducts()->getPerfume()->getFragrance(),
                    'preference' => $item->getMakeupProducts()->getPerfume()->getStrenght()
                ];

                $perfume[] = $dataOneObj;

            } elseif ($item->getBeautyType() == 'Lipstick') {

                $dataOneObj = [
                    'productName' => $item->getProductName(),
                    'productImage' => $item->getProductImage()->getFullPath(),
                    'manufacturingDate' => $item->getManufacturingDate(),
                    'expiryDate' => $item->getExpiryDate(),
                    // 'price' => $item->getPrice(),
                    'type' => $item->getBeautyType(),
                    'description' => $item->getDescription(),
                    'colorFamily' => $item->getMakeupProducts()->getLipMakeup()->getColourFamily(),
                    'formulation' => $item->getMakeupProducts()->getLipMakeup()->getFormulation(),
                    'liptickFinish' => $item->getMakeupProducts()->getLipMakeup()->getLipstickFinish()
                ];

                $lipmakeup[] = $dataOneObj;

            }
        }

        return json_encode(['eyeliner' => $eyeliner, 'shampoo' => $shampoo,
                                'perfume' => $perfume, 'lipmakeup' => $lipmakeup]);
    }
}

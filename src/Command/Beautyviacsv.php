<?php
 
namespace App\Command;
use Pimcore\Console\AbstractCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Pimcore\Model\DataObject\Beauty;
 
class   Beautyviacsv extends AbstractCommand {
 
 protected function configure()
 {
 $this
 ->setName('import:beauty')
 ->setDescription('this command imports data');
//  ->addArgument("class_name", InputArgument::REQUIRED);
 }
 
 protected function execute(InputInterface $input, OutputInterface $output): int
 {
//  $output->writeln("Class to import : " . $input->getArgument("class_name"));
//  return Command::SUCCESS;

$object=new Beauty();
$object->setKey('Eyeliner2');
$object->setParentId(15);
$path = 'public/csv/beauty.csv';
    $file = file($path);
        foreach ($file as $k) {
            $csv[] = explode(',', $k);
        }
        $beautyproduct=$csv[1][0];
        $beautydescription=$csv[1][1];
        $beautyquantity=$csv[1][2];
        //$beautyprice=$csv[1][3];
        //$beautymanufacturingdate=$csv[1][4];
        //$beautyexpirydate=$csv[1][5];
        $beautybrands=$csv[1][6];
        $beautyrating=$csv[1][7];
        //$beautymakeupproducts=$csv[1][8];
        $beautybeautytype=$csv[1][9];

        $object->setproductID($beautyproduct);
        $object->setdescription($beautydescription);
        $object->setQuantity($beautyquantity);
        //$object->setprice($beautyprice);
        //$object->setManufacturingDate($beautymanufacturingdate);
        //$object->setExpiryDate($beautyexpirydate);
        $object->setBrands($beautybrands);
        $object->setRatings($beautyrating);
        //$object->setMakeupProducts($makeupproducts);
        $object->setBeautyType($beautybeautytype);
        
        $object->save();
        return 0;
 }
 
}
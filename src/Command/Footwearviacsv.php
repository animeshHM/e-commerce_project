<?php

namespace App\Command;
use Pimcore\Console\AbstractCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Pimcore\Model\DataObject\Footwear;

class Footwearviacsv extends AbstractCommand {

    protected function configure()
    {
        $this
        ->setName('import:footwear')
        ->setDescription('this command imports footwear data');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
    $object = new Footwear();
    $object->setKey('Heels20');
    $object->setParentId(60);
    $path = 'public/csv/footwear.csv';
    $file = file($path);

        foreach ($file as $k) {
            $csv[] = explode(',', $k);
        }
        $footwearproductName=$csv[1][0];
        $footwearproductId=$csv[1][1];
        $footweardescription=$csv[1][2];
        $footwearprice=$csv[1][3];
        $footweargender=$csv[1][4];
        $footwearcolor=$csv[1][5];
        $footwearbrand=$csv[1][6];
        $footwearquantity=$csv[1][7];
        $footwearbrands=$csv[1][8];
        $footwearrating=$csv[1][9];
        $footwearfootweartype=$csv[1][10];

        $object->setproductName($footwearproductName);
        $object->setproductID($footwearproductId);
        $object->setdescription($footweardescription);
        $object->setQuantity($footwearquantity);
        $object->setBrand($footwearbrands);
        $object->setFootwearType($footwearfootweartype);

        $object->save();
        return 0;
    }

}

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

$object->setKey('eyeliner2csv');

$object->setParentId(15);

$path = 'public/csv/beauty.csv';

    $file = file($path);

        foreach ($file as $k) {

            $csv[] = explode(',', $k);

        }

        $beautyproduct=$csv[1][0];
        $beautydescription=$csv[1][1];

        $object->setproductID($beautyproduct);
        $object->setdescription($beautydescription);
        $object->save();
        return 0;
 }
 
}
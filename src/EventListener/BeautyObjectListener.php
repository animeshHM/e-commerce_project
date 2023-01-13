<?php

namespace App\EventListener;

use Pimcore\Model\DataObject\Beauty;

class BeautyObjectListener
{
    public function beforeUpdate(\Pimcore\Event\Model\DataObjectEvent $event)
    {
        $object = $event->getObject();
        if ($object instanceof Beauty) {
            if ($object->getExpiryDate() < $object->getManufacturingDate()) {
                throw new \Exception("Expiry Date cannot be less than Manufacturing Date");
            }
        }
    }
}

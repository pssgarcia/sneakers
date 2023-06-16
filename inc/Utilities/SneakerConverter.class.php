<?php

class SneakerConverter {
    public static function convertToStd($sneaker){
        if (! is_array($sneaker)){
            $stdObject = new stdClass;
            $stdObject->sneakerId = $sneaker->getSneakerId();
            $stdObject->brand = $sneaker->getBrand();
            $stdObject->sneakerName = $sneaker->getSneakerName();
            $stdObject->price = $sneaker->getPrice();
            $stdObject->releaseDate = $sneaker->getReleaseDate();
            $stdObject->size = $sneaker->getSize();
            $stdObject->buyerRegion = $sneaker->getBuyerRegion();

            return $stdObject;
        }else{
            $stdObjectLits = [];
            foreach($sneaker as $newSneaker){
               $stdObject = new stdClass;
               $stdObject->sneakerId = $newSneaker->getSneakerId();
               $stdObject->brand = $newSneaker->getBrand();
               $stdObject->sneakerName = $newSneaker->getSneakerName();
               $stdObject->price = $newSneaker->getPrice();
               $stdObject->releaseDate = $newSneaker->getReleaseDate();
               $stdObject->size = $newSneaker->getSize();
               $stdObject->buyerRegion = $newSneaker->getBuyerRegion();
               $stdObjectList[] = $stdObject;
            }
            return $stdObjectList;
        }
    }
}

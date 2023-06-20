<?php

class Sneaker {
   private int $sneakerId;
   private string $brand;
   private string $sneakerName;
   private string $price;
   private string $releaseDate;
   private float $size;
   private string $buyerRegion;

   public function getSneakerId() {
      return $this->sneakerId;
   }

   public function setSneakerId($sneakerId) {
      $this->sneakerId = $sneakerId;
   }

   public function getBrand() {
      return $this->brand;
   }

   public function setBrand($brand) {
      $this->brand = $brand;
   }

   public function getSneakerName() {
      return $this->sneakerName;
   }

   public function setSneakerName($sneakerName) {
      $this->sneakerName = $sneakerName;
   }

   public function getPrice() {
      return $this->price;
   }

   public function setPrice($price) {
      $this->price = $price;
   }

   public function getReleaseDate() {
      return $this->releaseDate;
   }

   public function setReleaseDate($releaseDate) {
      $this->releaseDate = $releaseDate;
   }

   public function getSize() {
      return $this->size;
   }

   public function setSize($size) {
      $this->size = $size;
   }

   public function getBuyerRegion() {
      return $this->buyerRegion;
   }

   public function setBuyerRegion($buyerRegion) {
      $this->buyerRegion = $buyerRegion;
   }
}
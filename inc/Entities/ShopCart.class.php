<?php

class ShopCart {
   private int $shopCartId;
   private int $sneakerId;
   private int $userId;

   public function getShopCartId() {
      return $this->shopCartId;
   }

   public function setShopCartId($shopCartId) {
      $this->shopCartId = $shopCartId;
   }

   public function getSneakerId() {
      return $this->sneakerId;
   }

   public function setSneakerId($sneakerId) {
      $this->sneakerId = $sneakerId;
   }

   public function getUserId() {
      return $this->userId;
   }

   public function setUserId($userId) {
      $this->userId = $userId;
   }
}
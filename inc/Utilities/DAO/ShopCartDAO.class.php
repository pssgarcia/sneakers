<?php

class ShopCartDAO {
   private static $db;

   public static function startDb() {
      self::$db = new PDOService('ShopCart');
   }

   public static function insertToCart($userCart) {
      $sql = "INSERT INTO shop_cart (sneaker_id, user_id) VALUES (:sneaker_id, :user_id)";

      self::$db->query($sql);
      self::$db->bind(':sneaker_id', $userCart->getSneakerId());
      self::$db->bind(':user_id', $userCart->getUserId());

      self::$db->execute();

      return self::$db->lastInsertedId();
   }
}
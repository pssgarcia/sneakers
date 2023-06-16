<?php

class SneakerDAO {
   private static $db;

   public static function startDb() {
      self::$db = new PDOService('Sneaker');
   }

   public static function getAllSneakers() {
      $sql = 'SELECT * FROM sneakers';

      self::$db->query($sql);
      self::$db->execute();

      return self::$db->resultSet();
   }
}
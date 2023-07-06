<?php

class SneakerDAO {
   private static $db;

   public static function startDb() {
      self::$db = new PDOService('Sneaker');
   }

   public static function getOneSneaker(int $sneakerId) {
      $sql = "SELECT * FROM sneakers WHERE sneakerId = :id";

      self::$db->query($sql);
      self::$db->bind(":id", $sneakerId);
      self::$db->execute();

      return self::$db->singleResult();
  }

   public static function getAllSneakers() {
      $sql = 'SELECT * FROM sneakers';

      self::$db->query($sql);
      self::$db->execute();

      return self::$db->resultSet();
   }
}
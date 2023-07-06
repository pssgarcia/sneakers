<?php

class ContactDAO {
   private static $db;

   public static function startDb() {
      self::$db = new PDOService('Contact');
   }

   public static function getAllContact(){
    $sql = "SELECT * FROM contact";

    self::$db->query($sql);
    self::$db->execute();

    return self::$db->resultSet();
}

   public static function insertContact($contact) {
      $sql = "INSERT INTO contact (Id, userId, message) VALUES (:Id, :userId,:message)";

      self::$db->query($sql);
      self::$db->bind(':Id', $contact->getId());
      self::$db->bind(':userId', $contact->getUserId());
      self::$db->bind(':message', $contact->getMessage());

      self::$db->execute();

      return self::$db->lastInsertedId();
   }
}
<?php

class Contact {
   private int $Id;
   private int $userId;
   private string $message;

   public function getId() {
      return $this->Id;
   }

   public function setId($Id) {
      $this->Id = $Id;
   }

   public function getUserId() {
      return $this->userId;
   }

   public function setUserId($userId) {
      $this->userId = $userId;
   }

   public function getMessage() {
      return $this->message;
   }

   public function setMessage($message) {
      $this->message = $message;
   }
}
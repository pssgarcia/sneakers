<?php

class UserDAO {
    private static $db;

    public static function startDb(){
        self::$db = new PDOService('User');
    }

    public static function getAllUsers(){
        $sql = 'SELECT * FROM users';

        self::$db->query($sql);
        self::$db->execute();

        return self::$db->resultSet();
    }

    public static function getUserByEmail($userEmail){
        $sql = 'SELECT * FROM users WHERE userEmail=:userEmail';

        self::$db->query($sql);
        self::$db->bind(":userEmail",$userEmail);
        self::$db->execute();

        return self::$db->singleResult();
    }

    public static function insertUsers(User $newUser) {
        $sql = "INSERT INTO users (userFullName, userEmail, userPassword, userPhone, userAddress) VALUES (:userFullName, :userEmail, :userPassword, :userPhone, :userAddress)";
        self::$db->query($sql);
        self::$db->bind(":userFullName",$newUser->getUserFullName());
        self::$db->bind(":userEmail",$newUser->getUserEmail());
        self::$db->bind(":userPassword",$newUser->getUserPassword());
        self::$db->bind(":userPhone",$newUser->getUserPhone());
        self::$db->bind(":userAddress",$newUser->getUserAddress());

        self::$db->execute();
        return self::$db->lastInsertId();
    }
}
?>
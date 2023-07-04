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

    public static function getUserByUsername(){
        $sql = 'SELECT * FROM users WHERE userName=:userName';

        self::$db->query($sql);
        self::$db->bind(":userName",$userName);
        self::$db->execute();

        return self::$db->singleResult();
    }
}
?>
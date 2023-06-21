<?php

class UsersDAO {
    private static $db;

    public static function startDb(){
        self::$db = new PDOService('Users');
    }

    public static function getAllUsers(){
        $sql = 'SELECT * FROM users';

        self::$db->query($sql);
        self::$db->execute();

        return self::$db->resultSet();
    }
}
?>
<?php

require_once("../../../inc/config.inc.php");

require_once("../../../inc/Entities/Users.class.php");
require_once("../../../inc/Utilities/PDOService.class.php");
require_once("../../../inc/Utilities/DAO/UsersDAO.class.php");
require_once("../../../inc/Utilities/UsersConverter.class.php");

UsersDAO::startDb();

header("Access-Control-Allow-Origin: *");

$method = $_SERVER['REQUEST_METHOD'];

switch ($method){
    case 'GET':
        echo json_encode(UsersConverter::convertoStd(UsersDAO::getAllUsers()));
        break;
    default:
        echo json_encode(array(UserDAO::getAllUsers()));
}

?>
<?php

require_once("../../../inc/config.inc.php");

require_once("../../../inc/Entities/Contact.class.php");
require_once("../../../inc/Utilities/PDOService.class.php");
require_once("../../../inc/Utilities/DAO/ContactDAO.class.php");
require_once("../../../inc/Utilities/ContactConverter.class.php");

ContactDAO::startDb();

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET,POST ");
header('Content-Type: application/json; charset=utf-8');


$method = $_SERVER['REQUEST_METHOD'];

switch ($method){
    case 'GET':
        echo json_encode(ContactConverter::convertToStd(ContactDAO::getAllContact()));
    break;
    case "POST":
        $data = json_decode(file_get_contents('php://input'));
        ContactDAO::insertContact(
            ContactConverter::convertToObj($data)
        );
        header("location: http://localhost:8080");
    break;
}

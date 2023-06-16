<?php

require_once("../../../inc/config.inc.php");

require_once("../../../inc/Entities/Sneaker.class.php");
require_once("../../../inc/Utilities/PDOService.class.php");
require_once("../../../inc/Utilities/DAO/SneakerDAO.class.php");
require_once("../../../inc/Utilities/SneakerConverter.class.php");

SneakerDAO::startDb();

header("Access-Control-Allow-Origin: *");

$method = $_SERVER['REQUEST_METHOD']; 

switch ($method) {
   case "GET":
      echo json_encode(SneakerConverter::convertToStd(SneakerDAO::getAllSneakers()));
      break;
   default: 
      echo json_encode(array(SneakerDAO::getAllSneakers()));
}

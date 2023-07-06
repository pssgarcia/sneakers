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
   case "POST":
      $data = json_decode(file_get_contents("php://input"));
      if (isset($data->requestedId)) {

            echo json_encode(
               SneakerConverter::convertToStd(
                  SneakerDAO::getOneSneaker($data->requestedId)
               )
            );
      }
   break;
}

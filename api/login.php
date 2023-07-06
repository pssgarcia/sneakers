<?php
require_once("../inc/config.inc.php");

require_once("../inc/Entities/User.class.php");
require_once("../inc/Utilities/PDOService.class.php");
require_once("../inc/Utilities/DAO/UserDAO.class.php");
require_once("../inc/Utilities/UserConverter.class.php");

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST");
header("Content-type: application/json; charset=utf-8");

$method = $_SERVER['REQUEST_METHOD'];

switch($method){

    case "POST":
        $data = json_decode(file_get_contents("php://input"));
        $response = new stdClass;
        $response->success = false;
        $response->message = "Login failed";
        $response->sessionToken = null;
        UserDAO::startDb();
        $currentUser = UserDAO::getUserByEmail($data->userEmail);
        if (isset($currentUser)) {
            if(
                ($data->userEmail == $currentUser->getUserEmail())
                 && 
                ($data->userPassword == $currentUser->getUserPassword())
            ){
                session_start();
                $_SESSION["userId"] = $currentUser->getUserId();
                $response->success = true;
                $response->message = "Login success - PHP";
                $response->sessionToken = session_id();
                $test = UserConverter::converToStd($currentUser);
                $response->user = $test; 
                $response->session = $_SESSION;
                
            }
        }
        echo json_encode($response);
        break;
}

?>
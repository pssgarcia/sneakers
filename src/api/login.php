<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST");
header("Content-type: application/json; charset=utf-8");

$method = $_SERVER['REQUEST_METHOD'];
echo "lucas";
die();
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
            if($data->$userEmail == $currentUser->getUserEmail()) && ($data->$userPassword == $currentUser->getPassword()){
                session_start();
                $_SESSION["userId"] = $currentUser->getId();
                $response->success = true;
                $response->message = "Login success - PHP";
                $response->sessionToken = session_id();
                $response->session = $_SESSION;
                
            }
        }
        echo json_encode($response);
        break;
}

?>
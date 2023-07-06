<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST");
header("Access-Control-Allow-Headers: Content-Type, Authorization");
header("Content-type: application/json; charset=utf-8");

$method = $_SERVER['REQUEST_METHOD'];
if ($method == "GET"){
    session_start();
    if (isset($_SERVER)){
        echo "Session exists";
    }else{
        echo "Session does not exist";
    }

    $response = new stdClass;
    $response->success = true;
    $response->message = "Session";
    $response->session = $_SESSION;

    echo json_encode($response);
}
?>
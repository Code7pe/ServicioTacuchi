<?php
header("Content-Type:application/json");
require "data.php";

if(!empty($_GET['name'])){
    $name = $_GET['name'];
    $result = get_text($name);

    if(empty($result)){
        response(200, "Product Not Found", NULL);
    }else{
        response(200, "Product Found", $result);
    }
}else{
    response(400, "Invalid Request", NULL);
}



// if(!empty($_POST)){
//     $var = $_POST;
//     $result = $var;

//     if(empty($result)){
//         response(200, "Service Not Found", NULL);
//     }else{
//         response(200, "Ok", $result);
//     }
// }else{
//     response(400, "Invalid Request", NULL);
// }

function response($status, $status_message, $data){
    header("HTTP/1.1 ".$status);

    // $response['status'] = $status;
    // $response['status_message'] = $status_message;
    $response['data'] = $data;

    $json_response = json_encode($response);
    echo $json_response;
}
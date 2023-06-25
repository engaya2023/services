<?php

header("Access-Control-Allow-Original:*");
header("Content-Type:application/json;charset=UTF-8");
header("Access-Control-Allow-Method: POST");
header("Access-Control-Allow-Headers:Content-Type,Access-Control-Allow-Headers, Authorization,X-Requested-With");

include ('function_client.php');


$request_method = $_SERVER["REQUEST_METHOD"];

if($request_method == 'POST'){

    $inputData = json_decode(file_get_contents("php://input"),true);
    if(empty($inputData)){

        $storeClient = storeClient($_post);

    }else{

        $storeClient = storeClient($ $inputData );
        
    }
         echo $storeClient;


}else{

    
    $data = [
        'status'=>405,
        'message'=> $request_method. " " .'Method Not Allowed',


    ];

    header("HTTP/1.0 405 Method Not Allowed");
    echo json_encode($data);




}



?>
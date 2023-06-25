
<?php


        header("Access-Control-Allow-Original:*");
        header("Content-Type:application/json;charset=UTF-8");
        header("Access-Control-Allow-Method:Get");
        header("Access-Control-Allow-Headers:Content-Type,Access-Control-Allow-Headers, Authorization,X-Requested-With");

        include ('function_client.php');

        $request_method = $_SERVER["REQUEST_METHOD"];

        if($request_method== "GET"){

            $clientList = getClientList();
            echo $clientList;

        }
        else{

            $data = [
                'status'=>405,
                'message'=> $request_method. 'Method Not Allowed',


            ];

            header("HTTP/1.0 405 Method Not Allowed");
            echo json_encode($data);
        }
<?php 



error_reporting(0);

require 'conn.php';

function error423($message){

                $data=[

                'status' => 423,
                'message'=> $message. 'unprocessable entity',

        ];

            header("HTTP/1.0 422 unprocessable entity ");
            echo json_encode($data);
            exit();
        }

        function storeClient($clientInput){

        global $conn;
        
        $first_name =mysqli_real_escape_string($conn,$clientInput['first_name']);
        $last_name =mysqli_real_escape_string($conn,$clientInput['last_name']);
        $phone =mysqli_real_escape_string($conn,$clientInput['phone']);
        $email =mysqli_real_escape_string($conn,$clientInput['email']);
        $password =mysqli_real_escape_string($conn,$clientInput['password']);
        $address =mysqli_real_escape_string($conn,$clientInput['address']);
        $city =mysqli_real_escape_string($conn,$clientInput['city']);
        $service =mysqli_real_escape_string($conn,$clientInput['service']);


        if(empty(trim($first_name))){

            return error423('Enter your first name');

        }elseif(empty(trim($last_name))){

            return error423('Enter your first name');


        }elseif(empty(trim($phone))){
            return error423('Enter your last name');

        }elseif(empty(trim($email))){
            return error423('Enter your email');

        }elseif(empty(trim($password))){
            return error423('Enter your pass');

        }elseif(empty(trim($address))){
            return error423('Enter your addresses');


        }elseif(empty(trim($city))){
            return error423('Enter your city');

            
        }elseif(empty(trim($service))){
            return error423('Enter your service');

        }

        else{

            $query = "INSERT INTO client (first_name,last_name, phone ,email,password,address,city,service) VALUES ('$first_name','$last_name','$phone','$email','$password','$address','$city',$service)" ;


            $result = mysqli_query($conn,$query);

            if($result){
                $data=
                [
                    'status'=>201,
                    'message '=> ' Data created  successfully' ,
                ];
                header("HTTP/1.0 201 created ");
                return json_encode($data);




            }else{
                $data=
                [
                    'status'=>500 ,
                    'message '=> 'Internal Server Error ' 
                ];
                header("HTTP/1.0 500 Internal Server Error ");
                return json_encode($data);


            }
        }

        }

?>

<?php

function getClientList(){
    global $conn ;

    $query = "SELECT * FROM users ";
    $query_run = mysqli_query($conn,$query);

if($query_run){

if(mysqli_num_rows ($query_run)>0){
    $res= mysqli_fetch_all($query_run,MYSQLI_ASSOC);         
    $data = [

        'status'=> 200 ,
        'message'=>' Data Fetched Successfully',
        'data' => $res 

    ];
         header("HTTP/1.0 200 OK ");
         return json_encode($data);


        }else{

        $data = [
            'status'=>404,
            'message'=>' No  Data Found',
    
        ];
         header("HTTP/1.0 404  No  Data Found ");
         return json_encode($data);
    }


}else{

        $data = [

            'status'=>500,
            'message'=>'Internal Server Error',
    
        ];

        header("HTTP/1.0 500 Internal Server Error");
        return json_encode($data);
};
};



?>











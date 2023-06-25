<?php 



error_reporting(0);

require 'conn.php';

function error424($message){

                $data=[

                'status' => 424,
                'message'=> $message. 'unprocessable entity',

        ];

            header("HTTP/1.0 422 unprocessable entity ");
            echo json_encode($data);
            exit();
        }

        function storeUser($clientInput){

        global $conn;
        
        $email =mysqli_real_escape_string($conn,$clientInput['email']);
        $password =mysqli_real_escape_string($conn,$clientInput['password']);


        if(empty(trim($email))){

            return error424('Enter your email');

        }elseif(empty(trim($password))){

            return error424('Enter your first name');

           
        }

        else{

            $query = "INSERT INTO login_form ( email,password) VALUES ('$email','$password')" ;

            $result = mysqli_query($conn,$query);
            header('location:home.php');

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
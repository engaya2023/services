<?php 
$conn = mysqli_connect('localhost','root','','user_db');



if(!$conn){

    echo ' Error: ' .mysqli_connect_error();
    
}



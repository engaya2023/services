<?php

$host = "localhost";
$username = "root";
$pass = "";
$dbname = "user_db";

$conn = mysqli_connect($host,$username,$pass,$dbname);

if(!$conn){

    die("Connection Failed: ". mysqli_connect_error());



}
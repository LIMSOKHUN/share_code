<?php
$host_name ="localhost";
$user_name ="root";
$password ="";
$db_name ="blogdb";

$conn = new mysqli($host_name,$user_name,$password,$db_name);

if(!$conn){
    die("Error Connect");
}
?>
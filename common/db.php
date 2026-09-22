<?php
$host="localhost";
$user="root";
$pass="";
$db="talksphere";

$conn=new mysqli($host,$user,$pass,$db);
if($conn->connect_error){
    die("not connected with db ".$conn->connect_error);
}


?>
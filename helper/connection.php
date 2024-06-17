<?php 
$hostname = "localhost";
$username = "root";
$password = "";
$database = "new_project";
$port = "3306";
$connection = mysqli_connect($hostname , $username , $password , $database , $port);
if(!$connection){
    echo "เชื่อมต่อไม่ได้";
}
?>
<?php 
require("helper/connection.php");
$sql = "INSERT INTO รายการอาหาร(title,price) VALUES ('หมูกระเทียม','40')";
$result = mysqli_query($connection , $sql);
var_dump($result);
?>

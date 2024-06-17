<?php 
require("helper/connection.php");
$sql = "INSERT INTO รายการอาหาร(title,price) VALUES ('ก๋วยเตี๋ยวเรือ','45')";
$result = mysqli_query($connection , $sql);
var_dump($result);
?>

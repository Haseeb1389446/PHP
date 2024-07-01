<?php 

include "config.php";
$id = $_POST["id"];
$query = "DELETE FROM `ajax` WHERE id = $id";
$rezult = mysqli_query($con,$query);

?>
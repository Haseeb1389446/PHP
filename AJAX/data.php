<?php 

include "config.php";
$name = $_POST["name"];
$email = $_POST["email"];
$city = $_POST["city"];

$query = "INSERT INTO `ajax`(`name`, `email`, `city`) VALUES ('$name','$email','$city')";
$result = mysqli_query($con,$query);

?>
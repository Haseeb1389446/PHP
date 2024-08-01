<?php 

include "navbar.php";
include "config.php";

$id = $_GET["id"];

$query = "DELETE FROM `users` WHERE id = $id";
$rezult = mysqli_query($con,$query);

if ($rezult) {
    echo "<script>alert('Record deleted');
    window.location.href = 'show.php';
    </script>";
}else{
    echo "<script>alert('Record does not deleted')</script>";
};

?>
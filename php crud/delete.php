<?php 

include "config.php";
$id = $_GET["id"];
$query = "DELETE FROM `products` WHERE id = $id";
$rezult = mysqli_query($con,$query);

if($rezult){
    echo "<script>alert('Record Deleted');
    window.location.href = 'show.php';
    </script>";
}else{
    echo "<script>alert('Record not Deleted error')</script>";
}

?>
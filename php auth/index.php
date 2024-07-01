<?php 

session_start();
include "config.php";

if(!isset($_SESSION["id"])){

    header("location:login.php");

}else{
    
    $id = $_SESSION["id"];
    $query = "SELECT * FROM `tbl_users` where id = '$id'";
    $rezult = mysqli_query($con, $query);
    $data = mysqli_fetch_assoc($rezult);

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Welcome : <?php 
    
    if($id){
        echo $data["name"];
    }else{
        echo "Undefiend";
    }

    ?></h1><a href="logout.php">logout</a>
</body>
</html>
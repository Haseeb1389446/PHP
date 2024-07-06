<?php 

include "config.php";
include "navbar.php";

if(isset($_POST["submit"])){
    $name = $_POST["name"];
    $desc = $_POST["desc"];
    $price = $_POST["price"];
    $qty = $_POST["qty"];
    $img = $_FILES["img"]["name"];
    $tmpimg = $_FILES["img"]["tmp_name"];

    
    $folder = "img/".$img;
    move_uploaded_file($tmpimg,$folder);
    
    $query = "INSERT INTO `products`(`name`, `descpt`, `price`, `qty`, `img`) VALUES ('$name','$desc','$price','$qty','$img')";
    $rezult = mysqli_query($con,$query);

    if($rezult){
        echo "<script>alert('record has been inserted')</script>";
    }else{
        echo "<script>alert('failed')</script>";
    }
    
};

// print_r($_FILES["img"]);

?>



<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <form method="post" enctype="multipart/form-data" class="pt-5 mt-5">
                    <fieldset>
                        <h1>Insert product</h1>
                        <div class="row">
                        </div>
                        <div>
                            <label for="name" class="form-label mt-4">product name</label>
                            <input type="text" name="name" class="form-control" id="name" placeholder="product name">
                        </div>
                        <div>
                            <label for="desc" class="form-label mt-4">description</label>
                            <input type="text" name="desc" class="form-control" id="desc"
                                placeholder="desc">
                        </div>
                        <div>
                            <label for="price" class="form-label mt-4">price</label>
                            <input type="number" name="price" class="form-control" id="price" placeholder="product price">
                        </div>
                        <div>
                            <label for="qty" class="form-label mt-4">qty</label>
                            <input type="number" name="qty" class="form-control" id="qty"
                                placeholder="qty" autocomplete="off">
                        </div>
                        <div>
                            <label for="img" class="form-label mt-4">product image</label>
                            <input class="form-control mb-5" name="img" type="file" id="img">
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    </fieldset>
                </form>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>


</body>

</html>
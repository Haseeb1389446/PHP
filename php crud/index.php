<?php

include "navbar.php";
include "config.php";

if (isset($_POST["submit"])) {

    $name = $_POST["name"];
    $descpt = $_POST["descpt"];
    $price = $_POST["price"];
    $qty = $_POST["qty"];
    $img = $_FILES["img"]["name"];
    $tmpimg = $_FILES["img"]["tmp_name"];

    $folder = "img/" . $img;
    move_uploaded_file($tmpimg, $folder);
    $query = "INSERT INTO `products`(`name`, `descpt`, `price`, `qty`, `img`) VALUES ('$name','$descpt','$price','$qty','$img')";

    $rezult = mysqli_query($con,$query);

    if ($rezult) {
        echo "<script>alert('Record has been inserted')</script>";
    } else {
        echo "<script>alert('Record does not inserted')</script>";
    };
}

// print_r($_FILES["img"])

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.min.css">
    <title>Insert product</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8 mt-5">
                <form method="POST" enctype="multipart/form-data">
                    <fieldset>
                        <h1>Submit Record</h1>

                        <div>
                            <label for="name" class="form-label mt-4">Product name</label>
                            <input required name="name" type="text" class="form-control" id="name" placeholder="Product name">
                        </div>

                        <div>
                            <label for="desc" class="form-label mt-4">Product description</label>
                            <input required name="descpt" type="text" class="form-control" id="desc"
                                placeholder="Product description">
                        </div>

                        <div>
                            <label for="price" class="form-label mt-4">Product price</label>
                            <input required name="price" type="number" class="form-control" id="price"
                                placeholder="Product price">
                        </div>
                        <div>
                            <label for="qty" class="form-label mt-4">Product Quantity</label>
                            <input required name="qty" type="number" class="form-control" id="qty" placeholder="Product Quantity"
                                autocomplete="off">
                        </div>

                        <div>
                            <label for="img" class="form-label mt-4">Product img</label>
                            <input required name="img" class="form-control mb-5" type="file" id="formfile">
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
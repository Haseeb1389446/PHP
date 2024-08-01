<?php

include "config.php";
include "navbar.php";

$id = $_GET["id"];
$fetch = "SELECT `id`, `name`, `email`, `city` FROM `users` WHERE id = $id";
$res = mysqli_query($con,$fetch);
$row = mysqli_fetch_assoc($res);

if (isset($_POST["update"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $city = $_POST["city"];

    $query = "UPDATE `users` SET `name`='$name',`email`='$email',`city`='$city' WHERE id = $id";
    $rezult = mysqli_query($con,$query);

    if ($rezult) {
        echo "<script>alert('Update successfully');
        window.location.href = 'show.php';
        </script>";
    }else{
        echo "<script>alert('Update failed');</script>";
    }
}

?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8 mt-5 pt-5">
                <form method="post">
                    <h1>update User</h1>
                    <div class="mb-3 mt-3">
                        <label for="exampleInputEmail1" class="form-label">username</label>
                        <input type="text" value="<?php echo $row["name"]; ?>" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Email</label>
                        <input type="email" value="<?php echo $row["email"]; ?>" name="email" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">City</label>
                        <input type="text" value="<?php echo $row["city"]; ?>" name="city" class="form-control" id="exampleInputPassword1">
                    </div>
                    <button type="submit" name="update" class="btn btn-primary">update</button>
                </form>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></>
</body>

</html>
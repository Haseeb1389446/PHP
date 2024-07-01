
<?php

include "navbar.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>show products</title>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8 mt-5 pt-5">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">NAME</th>
                            <th scope="col">DESCRIPTION</th>
                            <th scope="col">PRICE</th>
                            <th scope="col">QTY</th>
                            <th scope="col">IMG</th>
                            <th scope="col">ACTION</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php 
                        
                        include "config.php";
                        $query = "SELECT * FROM `products`";
                        $rezult = mysqli_query($con,$query);

                        while($row = mysqli_fetch_assoc($rezult)){
                        
                        ?>

                        <tr class="table-active">
                            <td><?php echo $row["id"] ?></td>
                            <td><?php echo $row["name"] ?></td>
                            <td><?php echo $row["descpt"] ?></td>
                            <td><?php echo $row["price"] ?></td>
                            <td><?php echo $row["qty"] ?></td>
                            <td><img src="img/<?php echo $row["img"] ?>" alt="product image" height="80px" width="80px"></td>
                            <td><a href="edit.php?id=<?php echo $row["id"] ?>" class="btn btn-warning">Edit</a> <a href="delete.php?id=<?php echo $row["id"] ?>" class="btn btn-danger">Delete</a></td>
                        </tr>

                        <?php 
                        
                        };

                        ?>
                    </tbody>
                </table>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
</body>

</html>
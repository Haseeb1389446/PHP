<?php

include "config.php";
include "navbar.php";

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
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">NAME</th>
                            <th scope="col">EMAIL</th>
                            <th scope="col">CITY</th>
                            <th scope="col">ACTION</th>
                        </tr>
                    </thead>



                    <tbody>

                        <?php

                        $query = "SELECT * FROM `users`";
                        $rezult = mysqli_query($con, $query);

                        while ($row = mysqli_fetch_assoc($rezult)) {

                        ?>

                            <tr>
                                <th scope="row"><?php echo $row["id"]; ?></th>
                                <td><?php echo $row["name"]; ?></td>
                                <td><?php echo $row["email"]; ?></td>
                                <td><?php echo $row["city"]; ?></td>
                                <td><a href="edit.php?id=<?php echo $row['id']; ?>" class="btn btn-warning">Edit</a> <a
                                        href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a></td>
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



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>
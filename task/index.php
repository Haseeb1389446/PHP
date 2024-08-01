<?php

$start = $_GET["t1"];
$end = $_GET["t2"];
$even = null;
$odd = null;

for ($i = $start; $i <= $end; $i++) {
    if ($i % 2 == 0) {
        $even .= $i . "<br>";
    } else {
        $odd .= $i . "<br>";
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

    <form action="index.php" method="get">
        <div class="container m-3 p-3">
            <div class="row">
                <div class="col-sm-6"><input type="text" name="t1" class="form-control" value="<?php echo $start;?>"></div>
                <div class="col-sm-6"><input type="text" name="t2" class="form-control" value="<?php echo $end;?>"></div>
            </div>
            <div class="row">
                <div class="col-md-12"><input type="submit" value="Generate" class="btn btn-primary btn-lg mt-4"></div>
            </div>
            <div class="row">
                <div class="col-md-6">Even <br> <?php echo $even; ?></div>
                <div class="col-md-6">Odd <br> <?php echo $odd; ?></div>
            </div>
        </div>
    </form>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>
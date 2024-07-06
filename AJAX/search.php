<?php

include "config.php";

$name = $_POST["sword"];
$query = "SELECT * FROM `ajax` WHERE name like '%$name%' OR email like '%$name%' OR city like '$name'";
$rezult = mysqli_query($con, $query);
$record = "";

foreach ($rezult as $row) {

    $record = "
        <tr>
            <td>$row[id]</td>
            <td>$row[name]</td>
            <td>$row[email]</td>
            <td>$row[city]</td>
            <td><a href='#' class='btn btn-warning'>Edit</a> <a rowid='$row[id]' id='deletebtn' class='btn btn-danger'>Delete</a></td>
        </tr>
    ";

    if ($record) {
        echo $record;
    } else {
        echo "<script>document.getElementById('tdata').innerHTML = `<tr><td colspan='5'>Record not found</td></tr>`;</script>";
    }
}
;

?>
<?php 

include "config.php";
$query = "SELECT * FROM `ajax`";
$result = mysqli_query($con, $query);
$record = "";

foreach ($result as $row){
    $record = "
        <tr>
            <td>$row[id]</td>
            <td>$row[name]</td>
            <td>$row[email]</td>
            <td>$row[city]</td>
            <td><a href='#' class='btn btn-warning'>Edit</a> <a rowid='$row[id]' id='deletebtn' class='btn btn-danger'>Delete</a></td>
        </tr>
    ";

    echo $record;
}

?>
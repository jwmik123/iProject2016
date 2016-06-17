<?php

include 'config.php';
include 'db.php';

$getSchools = "SELECT * FROM scholen";
$result = $mysqli->query($getSchools);

$emparray = array();
while($row =mysqli_fetch_assoc($result))
{
    $emparray[] = $row;
}

echo json_encode($emparray);

<?php
/**
 * Created by PhpStorm.
 * User: Dorota
 * Date: 2015-09-30
 * Time: 16:53
 */

include_once('connection_mysql.php');

$sql = 'DELETE FROM Kino WHERE name = "%z";';

$result = $conn->query($sql);

echo $conn->error;



$sql = 'DELETE FROM Platnosc WHERE data < "2015-09-25";';

$result = $conn->query($sql);

print_r($result);

echo $conn->error;


$conn->close();
$conn = null;
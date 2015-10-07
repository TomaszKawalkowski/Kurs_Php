<?php
/**
 * Created by PhpStorm.
 * User: Dorota
 * Date: 2015-10-01
 * Time: 12:14
 */

$servername = "localhost";
$username = "root";
$password = "coderslab";
$base = "Kino";

$conn = new mysqli ($servername, $username, $password, $base);

if ($conn->connect_error){
    die ("olaczenie nie udane. Blad: .$conn->connect_error");

}


echo "polaczenie udane";

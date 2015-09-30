<?php
/**
 * Created by PhpStorm.
 * User: Dorota
 * Date: 2015-09-30
 * Time: 11:20
 */

$servername = "localhost";
$username = "root";
$password = "coderslab";
$baseName = "sql_cwiczenia"; //Tworzymy nowe po³¹æzenie

$conn = new mysqli ($servername, $username, $password, $baseName); //Sprawdzamy po³¹czenie, mysqli - domyœlna klasa mysqli w PHP-czêœæ jêzyka

If($conn->connect_error){
    die("Polaczenie nie udane. Blad:".$conn->connect_error);
}

echo "Polaczenie udane.";

$sqlQuery = "CREATE DATABASE sql_cwiczenia";

$result = $conn->query($sqlQuery);
if($result == FALSE){
    echo ("<br>zapytanie siê nie uda³o. Blad:<br>".$conn->error);
}
else echo "zapytanie siê udalo";

//nieszczymy polaczenie :
$conn->close();
$conn = null;
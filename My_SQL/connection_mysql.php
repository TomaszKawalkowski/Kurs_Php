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
$baseName = "sql_cwiczenia"; //Tworzymy nowe po���zenie

$conn = new mysqli ($servername, $username, $password, $baseName); //Sprawdzamy po��czenie, mysqli - domy�lna klasa mysqli w PHP-cz�� j�zyka

If($conn->connect_error){
    die("Polaczenie nie udane. Blad:".$conn->connect_error);
}

echo "Polaczenie udane.";



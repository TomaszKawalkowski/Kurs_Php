<?php
/**
 * Created by PhpStorm.
 * User: Dorota
 * Date: 2015-09-30
 * Time: 15:02
 */

include_once('connection_mysql.php');

$sql = "CREATE TABLE Kino (kino_id INT AUTO_INCREMENT, name VARCHAR(255),
adress VARCHAR(255), PRIMARY KEY (kino_id))";

$result = $conn->query($sql);

if ($result === TRUE){
    echo "<br>Tabela kino zostala utworzona poprawne<br>";
}
else{
    echo "Blad podczas tworzenia tabeli Kino lub Tablica ju¿ istnieje<br>{$conn->error}";

}

$sql = "CREATE TABLE Film (film_id INT AUTO_INCREMENT, name VARCHAR(255),
opis VARCHAR(255), PRIMARY KEY (film_id))";

$result = $conn->query($sql);

if ($result === TRUE){
    echo "Tabela Film zostala utworzona poprawne<br>";
}
else{
    echo "Blad podczas tworzenia tabeli Film lub Tablica ju¿ istnieje<br>";
}


  $sql = "CREATE TABLE Bilet (bilet_id INT AUTO_INCREMENT, ilosc VARCHAR(255),
cena FLOAT(5,2), PRIMARY KEY (bilet_id))";
$result = $conn->query($sql);

if ($result === TRUE){
    echo "Tabela Bilet zostala utworzona poprawne<br>";
}
else{
    echo "Blad podczas tworzenia tabeli Bilet lub Tablica ju¿ istnieje<br>{$conn->error}";
}

    $sql = "CREATE TABLE Platnosc (platnosc_id INT AUTO_INCREMENT, typ VARCHAR(10),
data DATE, PRIMARY KEY (platnosc_id))";
$result = $conn->query($sql);

if ($result === TRUE){
    echo "Tabela Platnosc zostala utworzona poprawne<br>";
}
else{
    echo "Blad podczas tworzenia tabeli Platnosc lub Tablica ju¿ istnieje<br>{$conn->error}";
}

$conn->close();
$conn = null;

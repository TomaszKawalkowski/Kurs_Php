<?php
/**
 * Created by PhpStorm.
 * User: Dorota
 * Date: 2015-09-30
 * Time: 16:53
 */

include_once('connection_mysql.php');
/*$sql = 'SELECT * FROM Film  WHERE name LIKE "W%" ';

$result = $conn->query($sql);

echo $conn->error;

if ($result->num_rows>0){

    while($row=$result->fetch_array()){

        echo "<br>nazwy filmow wieksze od W<br>".$row['name']."<br>";
    }
}

$sql = 'SELECT * FROM Bilet  WHERE cena > "15.30" ';

$result = $conn->query($sql);

echo $conn->error;


if ($result->num_rows>0){

    while($row=$result->fetch_array()){

        echo "<br>Cena biletu wieksza od 15.30<br>".$row['cena']."<br>";
    }
}


$sql = 'SELECT * FROM Bilet  WHERE ilosc > "3" ';

$result = $conn->query($sql);

echo $conn->error;

if ($result->num_rows>0){

    while($row=$result->fetch_array()){

        echo "<br>Ilosc biletów wieksza od 3<br>".$row."<br>";
    }
}


$sql = 'SELECT * FROM Bilet';

$result = $conn->query($sql);

echo $conn->error;

if ($result->num_rows>0){

    while($row=$result->fetch_array()){
        echo "<br>Bilety <br>";
        echo ("<br>.".$row['bilet_id']."<br>".$row['ilosc']."<br>".$row['cena']."<br>");


    }
}

$sql = 'SELECT * FROM Film';

$result = $conn->query($sql);

echo $conn->error;

if ($result->num_rows>0){

    while($row=$result->fetch_array()){
        echo "<br>Film <br>";
        echo ("<br>.".$row['film_id']."<br>".$row['name']."<br>".$row['opis']."<br>");


    }
}

$sql = 'SELECT * FROM Kino';

$result = $conn->query($sql);

echo $conn->error;

if ($result->num_rows>0){

   $row=$result->fetch_array();
        foreach ($row as $klucz => $wartosc) {
            echo "tab['" . $klucz . "'] ==" . $wartosc;
        }
    }



$conn->close();
$conn = null;

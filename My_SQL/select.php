<?php
/**
 * Created by PhpStorm.
 * User: Dorota
 * Date: 2015-09-30
 * Time: 14:24
 */

require_once('connection_mysql.php');

$sqlQuery = "SELECT * FROM students";

$result = $conn->query($sqlQuery);

if ($result != FALSE){
    if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc())  //fetch_rózne opcje zwraca rekordy w formie tablicy
    { echo("id ".$row["user_id"]). "imie ".$row["user_name"];//wszystko co zwracam jest napisem, nie liczb¹
        echo "<br>Imiê studenta ".($row['name'])."<br>"; //CZAD
    var_dump($row);}
    }
    else {
        echo "Brak wyników";
    }

}
else{

    echo $conn->error;
}

$conn->close();
$conn = null;
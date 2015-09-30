<?php
/**
 * Created by PhpStorm.
 * User: Dorota
 * Date: 2015-09-30
 * Time: 15:31
 */
include_once('connection_mysql.php');

IF ($_SERVER['REQUEST_METHOD']==='POST'){

    switch($_POST['typ']){
        case"kino":
            echo "wybrales formularz kino<br>";
            $name = $_POST['pierwszy'];
            $adress = $_POST['drugi'];
            $sqlQuery = "INSERT INTO Kino(name, adress) VALUES('$name',' $adress')";
            $result = $conn->query($sqlQuery);
            if ($result == TRUE){
                ECHO ("ZAKTUALIZOWANO TABELE KINO<BR>");
                ECHO ("ID KINA TO $conn->insert_id<BR>");

            }
            else {
                echo "blad dodania do bazy";

            }
            break;
        case"film":
            echo "wybrales formularz film<br>";
            $name = $_POST['pierwszy'];
            $opis = $_POST['drugi'];
            $sqlQuery = "INSERT INTO Film(name, opis) VALUES('$name',' $opis')";
            $result = $conn->query($sqlQuery);
            if ($result == TRUE){
                ECHO ("ZAKTUALIZOWANO TABELE FILM <BR>");
                ECHO ("ID filmu TO $conn->insert_id<BR>");

            }
            else {
                echo "blad dodania do bazy";

            }
            break;
        case"bilet":
            echo "wybrales formularz bilet<br>";
            $ilosc = $_POST['pierwszy'];
            $cena = $_POST['drugi'];
            $sqlQuery = "INSERT INTO Bilet(ilosc, cena) VALUES('$ilosc',' $cena')";
            $result = $conn->query($sqlQuery);
            if ($result == TRUE){
                ECHO ("ZAKTUALIZOWANO TABELE BILET <BR>");
                ECHO ("ID filmu TO $conn->insert_id<BR>");
            }
            else {
                echo "blad dodania do bazy";

            }
            break;
        case"platnosc":
            echo "wybrales formularz platnosc<br>";
            $typ = $_POST['pierwszy'];
            $data = $_POST['drugi'];
            $sqlQuery = "INSERT INTO Platnosc(typ, data) VALUES('$typ',' $data')";
            $result = $conn->query($sqlQuery);
            if ($result == TRUE){
                ECHO ("ZAKTUALIZOWANO TABELE PLATNOSC <BR>");
                ECHO ("ID PLATNOSC TO $conn->insert_id<BR>");
            }
            else {
                echo "blad dodania do bazy";

            }
            break;
        default:
            echo "dupa blada";
            break;
    }



}

?>
<!DOCTYPE html>

    <fieldset>
        <form action="zadanie_3.php" method="post">
            <h2>FORMULARZ KINA</h2>

            <INPUT type="hidden" name="typ" value="kino">
            <INPUT type="text" name="pierwszy" placeholder="name" style="width: 200px"><br>
            <INPUT type="text" name="drugi" placeholder="adress" style="width: 200px">
            <input type="submit">
</form>


    </fieldset>
    <fieldset>
        <form action="zadanie_3.php" method="post">
            <h2>FORMULARZ FILM</h2>

            <INPUT type="hidden" name="typ" value="film">
            <INPUT type="text" name="pierwszy" placeholder="name" style="width: 200px"><br>
            <INPUT type="text" name="drugi" placeholder="opis" style="width: 200px">
            <input type="submit">
        </form>
    </fieldset>
    <fieldset>
        <form action="zadanie_3.php" method="post">
            <h2>FORMULARZ BILET</h2>

            <INPUT type="hidden" name="typ" value="bilet">
            <INPUT type="number" name="pierwszy" placeholder="ilosc" style="width: 200px"><br>
            <INPUT type="text" name="drugi" placeholder="cena" style="width: 200px">
            <input type="submit">
        </form>
    </fieldset>
    <fieldset>
        <form action="zadanie_3.php" method="post">
            <h2>FORMULARZ PLATNOSC</h2>

            <INPUT type="hidden" name="typ" value="platnosc">
            <INPUT type="text" name="pierwszy" placeholder="typ" style="width: 200px"><br>
            <INPUT type="date" name="drugi" placeholder="data" style="width: 200px">
            <input type="submit">
        </form>
    </fieldset>








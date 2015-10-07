<?php
/**
 * Created by PhpStorm.
 * User: Dorota
 * Date: 2015-10-01
 * Time: 15:48
 */
include_once('connection_Kino.php');
if($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (isset($_POST['Cinema'])) {
        $cinema1 = $_POST['Cinema'];
        $c = '"';
        $cinema = $c.$cinema1.$c;
        var_dump($cinema);
    }

    if (isset($_POST['Movie'])) {
        $movie1 = $_POST['Movie'];
        $movie = $c.$movie1.$c;
        var_dump($movie);
    }



    $sql = "SELECT * FROM Cinemas WHERE Cinemas.name = $cinema;";
    $result = $conn->query($sql);
    var_dump($sql);
    var_dump($result->num_rows);
    if ($result->num_rows > 0)
        while($row = $result->fetch_assoc()){
            $CinemaID = intval($row[id]);
        }
    Echo "<br> var dump cinema id";
    Var_dump($CinemaID);
    $sql = "SELECT * FROM Movies WHERE Movies.name = $movie;";
    $result = $conn->query($sql);
    var_dump($sql);
    var_dump($result);
    if ($result->num_rows > 0)
        while($row = $result->fetch_assoc()){
            $MovieID = intval($row[id]);
        }
    Echo "<br> var dump movie id";
    Var_dump($MovieID);

    $sql = "INSERT INTO CINEMAS_MOVIES (Movies_id, Cinemas_id) VALUES($MovieID, $CinemaID)";

    $result = $conn->query($sql);
    var_dump($result->num_rows);
    /*$lastID = $conn->insert_id;

    $sql = "SELECT "
    echo " ID Ticketa:".$lastID."<br>";
    if ($result > 0) {
        echo "You just baught seans" . $quantity . "Tickets";
        echo "with price:" . $price . "<br>";
    }

}*/
}

?>

<form action="zadanie_2b_dzien_2_MySql.php" method="POST">
<fieldset>

    <legend>SEANSE</legend>
        <pre><label>
            WYBIERZ KINO

        <select name="Cinema">


<?php
    $sql = "SELECT * FROM Cinemas;";
    $result = $conn->query($sql);
    print_r($result);
    if ($result != FALSE) {
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo '<option name="cinema" value="'.$row['name'].'">"'.$row['name'].'"</option>';
            }
        }
    }?>

    </select>
</pre>
    </label>
    <br>
    <label><pre>
        WYBIERZ Film

        <select name="Movie">


            <?php
            $sql = "SELECT * FROM Movies;";
            $result = $conn->query($sql);
            print_r($result);
            if ($result != FALSE) {
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo '<option name="movie" value="'.$row['name'].'">"'.$row['name'].'"</option>';
                    }
                }
            }?>

        </select>

    </label>
    </pre>
</fieldset>
    <input type="submit" value="Send order ">

</form>
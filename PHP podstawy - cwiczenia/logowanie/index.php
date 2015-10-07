<?php
session_start();


if (isset($_SESSION['login'])){

    echo "<BR>Treœæ  DLA WYBRANYCH";
    ?> <br><a href = "wyloguj.php">Wyloguj siê</a><?php

}

else {

    echo "nic nie umiesz<br>";
    Echo "PrzejdŸ do strony logowania"?> <a href= "login.php">strona logowania</a><?php
}



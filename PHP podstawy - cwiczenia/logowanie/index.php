<?php
session_start();


if (isset($_SESSION['login'])){

    echo "<BR>Tre��  DLA WYBRANYCH";
    ?> <br><a href = "wyloguj.php">Wyloguj si�</a><?php

}

else {

    echo "nic nie umiesz<br>";
    Echo "Przejd� do strony logowania"?> <a href= "login.php">strona logowania</a><?php
}



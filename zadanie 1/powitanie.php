<?php


if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $imie = trim($_POST['imie']);



    echo "<h1> Witaj $imie </h1>";
    }
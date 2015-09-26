<?php
/**
 * Created by PhpStorm.
 * User: Tomasz
 * Date: 26.09.2015
 * Time: 10:05
 */
session_start();
if($_SERVER['REQUEST_METHOD'] === 'POST') {



echo 'zawartosc tabeli SESSION na wejsciu<br>';
    print_r($_SESSION);
echo ' <br>ID sesji<br>';
    print_r (session_id());
//$listaNotatek = $_SESSION;

   //$listaNotatek = array();
   // $listaNotatek[] += $_POST['nowaNotatka'];

    $k = count($_SESSION);


    for ($p = 0 ; $p<=$k; $p++ ) {
      if ($_SESSION[$p]==''){
        $_SESSION[$p] = $_POST['nowaNotatka'];
      }
    }
    //$_SESSION += $listaNotatek;
    $y = count($_SESSION);
    //var_dump($y);

    echo '<br><br>zawartosc tabeli SESSION na wyjsciu<br>';
    print_r($_SESSION);

//echo '<br>listaNotatek';
//print_r($listaNotatek);
}
?>


<DOCTYPE html>

    <field>

    <h1>L I S T A   Z A D A Ñ</h1>

        <table border="1">
            <?php


            for ($i=0; $i<$y; $i++){
            echo
            '<tr>
            <td>'
            .$_SESSION[$i].'bla'.
            '</td>
            </tr>';
            }


            ?>
        </table>

    <form action="lista_zadan.php" method="POST"
        <field>

            <input type="text" name="nowaNotatka" value="" placeholder="dodaj notatkê. ..">

        </field>
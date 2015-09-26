<?php
/**
 * Created by PhpStorm.
 * User: Tomasz
 * Date: 26.09.2015
 * Time: 10:05
 */


session_start();


if($_SERVER['REQUEST_METHOD'] !== 'POST'){
    $tasks =array();
    $_SESSION['tasks'] = $tasks;
    echo "<h3>Dodaj swoje pierwsze zadanie !!!<h3>";

}

if($_SERVER['REQUEST_METHOD'] === 'POST' && $_POST['nowaNotatka']==''){

    echo "<h2>Nie dodales zadnego zadania, Leniu !!!<h2>";

}


if($_SERVER['REQUEST_METHOD'] === 'POST' && $_POST['nowaNotatka']!='') {
    $_SESSION['tasks'][] = $_POST['nowaNotatka'];
}
$y = count ($_SESSION['tasks']);
?>

<DOCTYPE html>

    <field>


        <h3>LISTA ZADAÑ</h3>

        <table border="1">
            <?php


            for ($i=0; $i<$y; $i++){
            $lp=$i+1;
            echo
            '  <field> <tr>
            <td > Task '.$lp.'</td>
            <td style="width:302px">'.$_SESSION['tasks'][$i].'</td>
            </field></tr>';
            }


            ?>
        </table>

    <form action="lista_zadan.php" method="POST"
        <field>

            <input style="width: 300px" type="text" name="nowaNotatka" value="" placeholder="dodaj zadanie. ..">

        </field>

        <input type="submit" style="margin-top:15px:">
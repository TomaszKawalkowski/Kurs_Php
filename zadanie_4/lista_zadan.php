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
    $g = count($_SESSION['tasks']);
         for ($q=0; $q<$g; $q++){


             if($_SERVER['REQUEST_METHOD'] === 'POST' && $_POST['nowaNotatka']==''&& $_POST[$q]){

                $_SESSION['tasks'][$q]='';

             }
             if($_SERVER['REQUEST_METHOD'] === 'POST' && $_POST['cancelAll']) {
                 $_SESSION['tasks'][$q] = '';
             }
         }

    if($_SERVER['REQUEST_METHOD'] === 'POST' && $_POST['nowaNotatka']!='') {
        $_SESSION['tasks'][] = $_POST['nowaNotatka'];

    }


    $y = count ($_SESSION['tasks']);

?>

<!DOCTYPE html>

    <fieldset>

        <form action="lista_zadan.php" method="POST">
        <h3>LISTA ZADAÑ</h3>

        <table border="1">
            <?php

            $r=0;
            for ($i=0; $i<$y; $i++){


                    if ($_SESSION['tasks'][$i]!=''){

                        $r++;
                        echo
                    '  <field> <tr>
                    <td > Task '.$r.'</td>
                    <td style="width:400px">'.$_SESSION['tasks'][$i].'</td>
                    <td><input style="width: 70px" type="submit" name='.'"'.$i.'" value="cancel"</td>
                    </field></tr>';
                    }
            }

            ?>
        </table>
    </fieldset>

        <fieldset>

            <input style="width: 454px" type="text" name="nowaNotatka" value="" placeholder="dodaj zadanie. ..">



        <input type="submit" style="width: 70px"">
        <br>
        <input type="submit" style="width: 530px" name="cancelAll" value="Cancel All">
        </fieldset>
        </form>
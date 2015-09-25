<?php


if($_SERVER['REQUEST_METHOD'] === 'POST'){
    if (count($_POST)==6){
        $postTablica = array();

          for ($i = 1; $i <=49; $i+=1){
          if (array_key_exists($i, $_POST)){

          $postTablica[] = $i;
          }

        }
        $tablicaLiczb = array();
        $k = 49;
        for ($n = 1; $n <= $k; $n++){
            $tablicaLiczb[] = $n;
        }
        shuffle($tablicaLiczb);
        $nowatablica = (array_slice($tablicaLiczb,0,6));
        $post = $postTablica;
        $trafioneLiczby = array();
        for ($n=0; $n<=5; $n+=1) {
            for ($u=0; $u<=5; $u+=1)
            if ($nowatablica[$n] == $post[$u]) {
            $trafioneLiczby [] = $post[$u];
            }
        }
        echo '<br>';

        if    (count($trafioneLiczby)>0){

            $f = count($trafioneLiczby);
            if ($f!=0) {
                echo 'Trafi³eœ nastêpuj¹ce liczby:<br>';
                for ($i = 0; $i < 5; $i++){
                    echo $trafioneLiczby [$i];
                    if ($trafioneLiczby [$i]){
                        echo ';';
                    }

                    }
                echo "<br>Iloœæ trafieñ: ".count($trafioneLiczby);
            }

        }
            else {
            echo 'MASZ PECHA TYM RAZEM';
             }


            echo '<h4> Wylosowane liczby to:<h4>';
            $f = count($nowatablica);
            for ($d = 0; $d < $f; $d++) {
                echo "$nowatablica[$d]";
                echo ',';
            }
            echo '<h4><br> Poda³eœ nastêpuj¹ce liczby:</h4>';

            for ($e = 0; $e < 6; $e++) {
                echo "$post[$e]";
                echo ',';
            }
    }
    else {

        echo 'PODA£EŒ NIEPOPRAWN¥ ILOŒÆ LICZB';
    }
}



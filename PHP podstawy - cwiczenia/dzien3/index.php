
<?php


$liczba=29;


    function doskonala($liczba){
        $s=0;
        for ($n=1; $n<$liczba; $n=$n+1 ){
            $x=$liczba/$n;
            if ($x/floor($x)==1){
                $s +=$n;
            }
        }
        if ($s==$liczba){
            echo "true";
            return true;
        }
        else{
            echo "false";
           return false;
        }
    }
doskonala($liczba);


//tablica zwyk³a - komórki s¹ nazwane przez liczby ca³kowite - 1,2,3,4,5,6
//tablica asocjacyjna imie => tomasz, nazwisko => nazwisko
//

echo "<br><h1>Nowe zadanie </h1><br><br>";
$iloscliczb=1500;

$tablica1 = array();
for ($n=0; $n<=$iloscliczb; $n=$n+1){
$tablica = array($n);

$tablica1 = array_merge($tablica1,$tablica);

}


function calkowitamax($tablica1){
return max ($tablica1);
}
echo calkowitamax($tablica1);

echo "<br><h1>Nowe zadanie </h1><br><br>";

$tablica5 = array (5,9,28,21,23,1);

function srednia($tablica5){
    $e=0;
    $srednia=0;
    $r = count($tablica5);

    for ($c=0; $c<=$r-1; $c=$c+1){
        $d=$tablica5[$c];
        $e=$e+$d;

    }
    $srednia=$e/$r;


    for ($f=0; $f<=$r; $f=$f+1){
        if ($tablica5[$f] < $srednia){
            echo "$tablica5[$f]<br>";

        }
    }

}

echo "<h1>liczby mniejsze od sredniej tablicy = <br></h1>";
srednia($tablica5);



foreach($tablica5 as $element){
    $suma3 = $suma3 + $element;

}

echo $suma3;

echo "<br><h1>Nowe zadanie </h1><br><br>";

$liczban=9;
$tablicax = array(25,36,25,9,8);
$szukana=0;
function sprawdza($liczban,$tablicax,&$szukana ){

    $ona=0;
    foreach($tablicax as $element){
        if ($element == $liczban){

            $ona=$liczban;
            echo $ona;
        }
    }
    $k = count($tablicax);

    for ($a=0; $a<$k; $a=$a+1){

        if ($tablicax[$a]==$ona){

            $szukana = $a;
            return true;
        }
        return false;
    }

}

sprawdza($liczban,$tablicax,$szukana );
echo "<br>";
echo "szukana liczba ma indeks w tabeli = ".$szukana;

// foreach($tablicax as $element => $inne); dw indeksy na az



echo "<br><h1>Nowe zadanie </h1><br><br>";
/*
$tablicar = array(28,6,26864,9,8,36,18,20);

function parzyste($tablicar){
    foreach($tablicar as $elementr) {
        while ($elementr > 0)
            if ($elementr % 2 == 0) {
                $elementr = (int)($elementr / 10);
            } else {
                return false;
            }
    }
return true;}


function cyfryParzyste($tablicar){
    $q=0;
    $suma=0;
    foreach($tablicar as $elementr)
     {
         if parzysta
        $s = $elementr;
        settype($s, 'string');
        $suma=0;
        echo "<br>";
        for ($h = 1; $h <= strlen($s); $h = $h + 1) {
            //echo "rtts".strlen($s)."olka";


            $q = $elementr % 10;

            $elementr = floor($elementr / 10);
            $suma = $suma + $q;

        }
                if( $suma%2==0){

                    if ($q % 2 == 0) {

                        echo $q;
                    }
                    else{
                        echo "cyfranieparzysta<br>";
                    }
                }
                    else{
                    echo "cyfranieparzysta<br>";
            }

        }


}

cyfryParzyste($tablicar);

*/
/*
echo "<br><h1>Nowe zadanie </h1><br><br>";

$tablica1 = array (0,2,3,4);
$tablica2 = array (5,0,7,8);
$tablica3 = array (5,6,0,8);
$tablica4 = array (5,6,7,1);
$tablicaW = array ($tablica1, $tablica2, $tablica3, $tablica4);

echo '<pre>';
echo print_r($tablicaW, true);
echo '</pre>';

function sladMacierzy($tablicaW){
    $suma=0;
    foreach($tablicaW as $numerindeksuW => $identyfikatorT) {
        foreach ($identyfikatorT as $numerkolumnaT => $wartoscT){
        if ($numerindeksuW == $numerkolumnaT);{
                $suma = $wartoscT+$suma;
        }


        }
    }
    echo $suma;
}

sladMacierzy($tablicaW);
*/
//posortuj tablice od najmniej liczby


$tablicaP = array (0,2,3,1,5,6);



<?php

if($_SERVER['REQUEST_METHOD'] === 'POST'){


   if ($_POST['delete_cookie'] == 'TRUE'){
    setcookie('ostatnie_odwiedziny',$dzisiaj, time()-3600);

    Echo "<h3>ciasteczka zosta³y wy³¹czone<h3>";

    }
}

    if(!isset($_COOKIE['ostatnie_odwiedziny']) && ($_SERVER['REQUEST_METHOD'] !== 'TRUE')) {
        $dzisiaj = date('l jS F Y h:i:s A');
        setcookie('ostatnie_odwiedziny',$dzisiaj, time()+3600);
        Echo "<h1> Witamy pierwszy raz na naszej stronie<h1>";

        Echo "<h3>uzywamy ciasteczek, jesli chcesz je wylaczyc, kliknij przycisk<BR><h3>";
        }

?>

<?php


if(isset($_COOKIE['ostatnie_odwiedziny']) && ($_SERVER['REQUEST_METHOD'] !== 'TRUE') &&($_POST['delete_cookie'] !== 'TRUE')) {

    echo '<h1>Ostatni raz tu by³eœ:'.$_COOKIE['ostatnie_odwiedziny'].'</h1><br>';
    $dzisiaj = date('l jS F Y h:i:s A');
    setcookie('ostatnie_odwiedziny',$dzisiaj, time()+3600);


    Echo "uzywamy ciasteczek, jesli chcesz je wylaczyc, kliknij przycisk<BR>";
}

?>

<form action="ostatnie_odwiedziny.php" method="POST">
    <input type="hidden" name="delete_cookie" value="TRUE">
    <input type="submit" name="cancelcookie" value="CANCEL THE COOKIES !!!">
</form>

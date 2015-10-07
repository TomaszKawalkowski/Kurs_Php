
<?php

session_start();

define("loginT", 'Tomasz');
define('hasloT', 'Kawalkowski');

$login = trim($_POST['login']);
$haslo = trim($_POST['haslo']);

if ($login == constant('loginT') && $haslo == constant('hasloT')){
$_SESSION['login']=$login;
    header('Location: index.php');
}
   else{
    echo '';

   }
?>


<!DOCTYPE html>


<head>

    <title> strona 1</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" >


    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

</head>

<body>
<div class = container>


    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="jumbotron">

                <form action="login.php" method="POST">



                    <fieldset> <!--zbiór pól objêty ramk¹ -->
                        <legend>PANEL LOGOWANIA</legend>


                        <p>
                            <label>
                                PODAJ LOGIN

                                <input type="text" name="login" placeholder="Podaj login" value="">

                            </label>
                            <br>

                            <label>
                                PODAJ HAS£O

                                <input type="text" name="haslo" placeholder="Podaj has³o" value="">

                            </label>

                            <br>
                            <br>

                        </p>

                        <button type="submit" class="btn btn-primary btn-block" style="background-color: dimgray;"> ZALOGUJ</button></div>

            </fieldset>

            </form>
            <label>




            </label>
        </div>
        <div class="col-md-3"></div>
    </div>
</div>
</div>
</body>

</html>


<?php
/*



$imie = "";
if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $imie = trim($_POST['imie']);


    if ($imie) {

        header('Location: powitanie.php');
    } else {

        echo "<h2>Nie poda³eœ imienia, podaj imiê !!!!</h2>";
    }
}*/
?>

<!Doctype html>



<head>

    <title>podaj imiê</title>
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

                <form action="powitanie.php" method="POST">



                    <fieldset> <!--zbiór pól objêty ramk¹ -->




                            <label>
                                PODAJ IMIÊ

                                <input type="text" name="imie" placeholder=""  >

                            </label>
                            <br>



                        <button type="submit" class="btn btn-primary btn-block" style="background-color: dimgray;"> WYŒLIJ</button></div>

        <div class="col-md-3"></div>
        </div>
    </div>
</div>
                     </fieldset>

                 </form>
</body>


</html>


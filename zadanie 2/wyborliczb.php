
<html>

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

                     <form action="wynik_losowania.php" method="POST">

                        <fieldset> <!--zbiór pól objêty ramk¹ -->
                            <legend>LOTTO</legend>
                                <p>
                                     <label>
                                      Wybierz 6 liczb;<br>

    <?php
          for ($n=1; $n <=49; $n+=1){
              echo  '<input type="checkbox" name='.$n.' value="'.$n.'"/>';
              echo $n."|";
          }
    ?>
                                     </label>
                                    <br><br>
                             <button type="submit" class="btn btn-primary btn-block" style="background-color: dimgray;"> WYŒLIJ</button></div>
                         </fieldset>
                    </form>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>

</body>

</html>
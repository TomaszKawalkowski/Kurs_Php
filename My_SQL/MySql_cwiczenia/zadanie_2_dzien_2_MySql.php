<?php
/**
 * Created by PhpStorm.
 * User: Dorota
 * Date: 2015-10-01
 * Time: 12:12
 */
include_once('connection_Kino.php');
$quantity = 0;
$price = 0;

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    echo "post dziala<br>";

    if(isset($_POST['quantity'])){
        $quantity = $_POST['quantity'];
    }

    if(isset($_POST['price'])){
        $price = $_POST['price'];
    }
    $typ = 0;

    $sql = "INSERT INTO Tickets(quantity, price) VALUES($quantity, $price)";

    $result = $conn->query($sql);
    $lastID = $conn->insert_id;

    echo " ID Ticketa:".$lastID."<br>";
    if ($result > 0) {
        echo "Added" . $quantity . "Tickets";
        echo "with price:" . $price . "<br>";
    }

SWITCH ($_POST['Payment']){
    case '"Credit_Card"':

        $typ = $_POST['Payment'];
        $sql = "INSERT INTO Payments(Tickets_id, typ, data) VALUES($lastID, $typ, CURDATE())";
        $result = $conn->query($sql);
        echo "You choosed Payment Method $typ, Thank you";
        break;
    case '"Cash - prefered"':
        $typ = $_POST['Payment'];
        $sql = "INSERT INTO Payments(Tickets_id, typ, data) VALUES($lastID,$typ, CURDATE())";
        echo "You choosed Payment $typ, Thank you";
        $result = $conn->query($sql);
        break;
    case '"Wire"':
        $typ = $_POST['Payment'];
        $sql = "INSERT INTO Payments(Tickets_id, typ, data) VALUES($lastID,$typ, CURDATE())";
        echo "You choosed Payment Method $typ, Thank you";
        $result = $conn->query($sql);
        break;
    case '"Unpaid"':
        $typ = $_POST['Payment'];

        echo "You choosed not to pay, Not thank you thief";
        echo "<H1>PLEASE PAY IF YOU WANNA WATCH</H1>";
        break;
    default:
        echo "<BR>nie podales platnosci<BR>";
}



}




?>

<!DOCTYPE html>


<form action="zadanie_2_dzien_2_MySql.php" method="POST">

<fieldset>
  <pre>
    <legend>BUY TICKET</legend>
    <label>
        Set quantity of tickets
    <input type="number" name="quantity" style= "width:300px" placeholder="quantity... more means better">

    </label>

    <label>
        Set price you wanna pay
        <input type="text" name="price" style= "width:300px" >

    </label>
   </pre>



</fieldset>

    <fieldset>

    <legend>CHOOSE PAYMENT METHOD</legend>
    <label>
        Set quantity of tickets
 <select name="Payment">

     <option value= '"Credit_Card"' >Credit_Card</option>
     <option value= '"Cash - prefered"'>Cash - prefered</option>
     <option value= '"Wire"' >Wire</option>
     <option value= '"Unpaid"' >Unpaid</option>
 </select>

    </label>





</fieldset>
    <input type="submit" value="Send order ">

</form>

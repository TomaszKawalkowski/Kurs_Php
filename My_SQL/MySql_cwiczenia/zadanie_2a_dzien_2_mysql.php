<?php
/**
 * Created by PhpStorm.
 * User: Dorota
 * Date: 2015-10-01
 * Time: 14:12
 */

include_once('connection_Kino.php');



$result = $conn->query($sql);
SWITCH ($_POST['Payment']){
    case '"Credit_Card"':

        $typ = $_POST['Payment'];
        $sql = "SELECT * FROM Tickets JOIN Payments WHERE Payments.typ=$typ AND Tickets.id=Payments.Tickets_id";
        $result = $conn->query($sql);

        echo "<h2> Bilety oplacone karta:</h2>";
        if ($result != FALSE){
            if ($result->num_rows > 0)
                while($row = $result->fetch_assoc()){
                    echo "
                <table border='2px'>
                 <tr>
                <th> Id biletu</th>
                <th> Ilosc biletow</th>
                <th> Cena biletu</th>
                </tr>
                <tr>
                <td> ".$row['id']."</td>
                <td> ".$row['quantity']."</td>
                <td>".$row['price']."</td>
                </tr>
                ";
                //   echo "<h5> Id biletu:".$row['id']." ilosc biletow: ".$row['quantity']." Cena biletow ".$row['price']."</h4>";
                }
        }

        break;
    case '"Cash - prefered"':
        $typ = $_POST['Payment'];
        $sql = "SELECT * FROM Tickets JOIN Payments WHERE Payments.typ=$typ AND Tickets.id=Payments.Tickets_id";
        $result = $conn->query($sql);

        echo "<h2> Bilety oplacone CASH:</h2>";
        if ($result != FALSE){
            if ($result->num_rows > 0)
                while($row = $result->fetch_assoc()){
                    echo "<h4> Id biletu:".$row['id']." ilosc biletow: ".$row['quantity']." Cena biletow ".$row['price']."</h4>";
                }

        }
        break;
    case '"Wire"':
        $typ = $_POST['Payment'];
        $sql = "SELECT * FROM Tickets JOIN Payments WHERE Payments.typ=$typ AND Tickets.id=Payments.Tickets_id";
        $result = $conn->query($sql);
        echo "<h2> Bilety oplacone przelewem:</h2>";
        if ($result != FALSE){
            if ($result->num_rows > 0)
                while($row = $result->fetch_assoc()){
                    echo "<h4> Id biletu:".$row['id']." ilosc biletow: ".$row['quantity']." Cena biletow ".$row['price']."</h4>";
                }

        }
        break;

    default:
        echo "<BR>nie podales sposobu platnosci<BR>";
}
?>
<form action="zadanie_2a_dzien_2_MySql.php" method="POST">
<fieldset>

    <legend>TICKET REVIEW</legend>
    <label>
Set PAYMENT METHOD OF TICKET
<select name="Payment">

     <option value= '"Credit_Card"' >Credit_Card</option>
     <option value= '"Cash - prefered"'>Cash - prefered</option>
     <option value= '"Wire"' >Wire</option>

 </select>

    </label>

    <br>



</fieldset>
    <input type="submit" value="Send order ">

</form>
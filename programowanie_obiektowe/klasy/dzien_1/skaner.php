<?php
session_start();



require_once ("produkt.php");
/**
 * Created by PhpStorm.
 * User: Dorota
 * Date: 2015-09-28
 * Time: 15:23
 */
class Skaner
{
    public function __construct()
    {
    }

    public function addProduct($p)
    {


        $bazaProduct = array();
        $i = count($bazaProduct);

        $bazaProduct[$i + 1] = $p->getProductID();
        $bazaProduct[$i + 2] = $p->getproductQuantity();
        $bazaProduct[$i + 3] = $p->getproductDescription();
        $bazaProduct[$i + 4] = $p->getproductPrice();

        return $bazaProduct;
    }


    public function Addbaza($p)
    {
        $i = count($_SESSION['baza']);
        var_dump($i);
        $_SESSION['baza'][$i + 1] = $this->addProduct($p);
        echo "do bazy zosta³ dodany produkt o ID $p->$this->productID, opisie: $p->$this->productDescription,
        iloœci:  $p->$this->productQuantity, cenie:$p->$this->productPrice ";
        var_dump($_SESSION['baza']);
    }}


    /*public function DeleteBaza($p)
    {
    foreach ($_SESSION['baza'] as $key => $a){
        foreach ($baza as $klucz => $b)


        $q = count ($_SESSION)['baza'];
        for($n=0; $n <= $q; $n++){
        if ($_SESSION['baza'][$q][0]  ==($p))

            unset ($_SESSION['baza']);
        }
    }
    }


}

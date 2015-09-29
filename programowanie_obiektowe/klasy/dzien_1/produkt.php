<?php

/**
 * Created by PhpStorm.
 * User: Dorota
 * Date: 2015-09-28
 * Time: 15:20
 */
class Produkt{
    private $productID;
    private $productQuantity;
    private $productDescription;
    private $productPrice;

    public function __construct ($productID,$productDescription, $productQuantity, $productPrice ){

        $this->productID = $productID;
        $this->productDescription = $productDescription;
        $this->productQuantity = $productQuantity;
        $this->productPrice = $productPrice;
        echo "utworzono obiekt o ID $this->productID, opisie: $this->productDescription,
        iloœci:  $this->productQuantity, cenie:$this->productPrice ";
    }


    public function getProductID(){
        return $this->productID;
    }
    public function getproductQuantity(){
        return $this->productQuantity;
    }
    public function getproductDescription(){
        return $this->productDescription;
    }
    public function getproductPrice(){
        return $this->productPrice;
    }
}
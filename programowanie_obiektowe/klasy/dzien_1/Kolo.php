<?php
require_once ("ksztalt.php");
/**
 * Created by PhpStorm.
 * User: Dorota
 * Date: 2015-09-28
 * Time: 16:22
 */
class Kolo extends Ksztalt{
    private $r;

    public function __construct($newY, $newX, $newColor, $r){
        parent::__construct($newY, $newX, $newColor);
        $this->checkR($r);
        echo "Tworz� okr�g o parametrach x = $this->x, y = $this->y, kolor = $this->color, promie� = $this->r<br>";

    }

    public function __destruct(){
        echo "niszcze okr�g o parametrach x = $this->x, y = $this->y, kolor = $this->color, promie� = $this->r <br>";
        parent::__destruct();
    }

    public function checkR($r){
        if (is_numeric($r)) {
            $this->r = $r;
        }
    }

    public function getR(){
        return $this->r;
    }

    public function setR($newR){
        if (is_numeric($newR)){
            $this->r = $newR;
        }
    }

    public function pointDistance ($w){

        $d = parent::pointDistance($w)-$this->r;
        echo  "odleg�o�� mi�dzy �rodkami punkt�w = $d <br>";
    }


    public function pole($w){

        $pole = 3.14*pow($this->r, 2);
        echo  "Powierzchnia pola ko�a = $pole <br>";
        return $pole;
}
    public function obwod($w){

        $obwod = 2*3.14*$this->r;
        echo  "Obwod ko�a = $obwod <br>";
        return $obwod;
    }
}
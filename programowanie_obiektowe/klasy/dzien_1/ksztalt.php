<?php

/**
 * Created by PhpStorm.
 * User: Dorota
 * Date: 2015-09-28
 * Time: 14:44
 */
class ksztalt {
    protected $y;
    protected $x;
    protected $color;

    public function __construct($newY, $newX, $newColor){
        $this->changeValue($newY, $newX, $newColor);
    }

    public function __destruct (){

        echo "Zniszczy�em kszta�t: x = $this->x, y = $this->y, kolor = $this->color <br> <br>";
    }

    public function changeValue($newY, $newX, $newColor)
    {
        if (is_numeric($newY) && (is_numeric($newX) && (is_string($newColor)))) {
            echo "Stworzy�em kszta�t y = $newY x = $newX color = $newColor<br>";
            $this->x = $newX;
            $this->y = $newY;
            $this->color = $newColor;
        } else {
            $this->x = 0;
            $this->y = 0;
            $this->color = $newColor;
            echo " Jeden za parametrow jest z�y ->>>> Stworzylem x = 0;y = 0; color = napis <br>";
        }
    }

    public function pointDistance ($w){

        $d = sqrt(pow(($w->x - $this->x),2)+pow(($w->y - $this->y),2));
        echo  "odleg�o�� mi�dzy �rodkami punkt�w = $d <br>";
    }


    public function pointInfo($w){
        echo "Info o kszta�cie: x = $this->x, y = $this->y, kolor = $this->color <br>";

    }
}

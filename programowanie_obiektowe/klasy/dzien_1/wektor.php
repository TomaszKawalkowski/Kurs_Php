<?php

/**
 * Created by PhpStorm.
 * User: Dorota
 * Date: 2015-09-28
 * Time: 13:06
 */
class WektorClass{
    private $y;
    private $x;

    public function __construct($y, $x){
        $this->changeValue($y, $x);
    }
    public function __destruct(){
        echo "niszê wektor y = .$this->y. x = .$this->x.";
    }

    public function changeValue($y, $x){
        if (is_numeric($y) && (is_numeric($x))){
            echo "Stworzy³em wektor y = .$y. x = .$x.";
            $this->x = $x;
            $this->y = $y;
        }
        else {
            $this->x = 0;
            $this->y = 0;
            echo "x=0;y=0";
        }
    }

    public function Length(){
        $length = sqrt(pow($this->y,2)+pow($this->x,2));
        var_dump($length);
        echo "<br>d³ugoœæ wektora y = $this->y ; x = $this->x wynosi $length.<br>";
    }

    public function AddWektor($w){

        $this->x = ($this->x)+$w->x;
        $this->y = ($this->y)+$w->y;
        echo "<br>Wektor po zsumowaniu: y = $this->y ; x = $this->x <br>";
        return $this;
    }
}



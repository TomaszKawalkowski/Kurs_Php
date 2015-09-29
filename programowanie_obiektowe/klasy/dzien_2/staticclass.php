<?php

/**
 * Created by PhpStorm.
 * User: Dorota
 * Date: 2015-09-29
 * Time: 09:52
 */
class StaticClass
{
    static private $numofInstances = 0;//iloœæ obiektów, któe zosta³y stworzone, static zawsze w private

    static public function getnumofInstances(){
        return self::$numofInstances;

    }


    public function __construct(){
        self::$numofInstances++; //self odpowiednik nazwy klasy, wskazuje na klasê, w której siê znajduje
    }

    public function __destruct(){
            self::$numofInstances--; //self odpowiednik nazwy klasy, wskazuje na klasê, w której siê znajduje
        }

}
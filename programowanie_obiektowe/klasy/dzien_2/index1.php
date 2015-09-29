<?php
/**
 * Created by PhpStorm.
 * User: Dorota
 * Date: 2015-09-29
 * Time: 10:03
 */
include_once ('staticclass.php');
$objNum = StaticClass::$numofInstances;
echo "Iloœæ obiektów klasy StaticClass to $objNum<br>";

$newObj = new StaticClass();
$newObj2 = new StaticClass();

$objNum = StaticClass::$numofInstances;
echo "Iloœæ obiektów klasy StaticClass to $objNum<br>";

$newObj = null;
$objNum = StaticClass::$numofInstances;

echo "Iloœæ obiektów klasy StaticClass to $objNum<br>";



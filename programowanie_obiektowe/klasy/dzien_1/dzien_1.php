<?php

session_start();
session_unset();
require_once('skaner.php');
require_once('produkt.php');


$skaner = new Skaner();
//$skaner->DeleteBaza(1);

$product2 = new Produkt(1,'dry',2, 4);
$skaner->addBaza($product2);







//var_dump ($_SESSION);
/*require_once ('ksztalt.php');
require_once ('Kolo.php');

$kolo1 = new Kolo (5,10, 'czarny', 5);
$kolo2 = new Kolo (4,4, 'bia³y', 2);
var_dump($kolo1);

$kolo1->pointDistance($kolo2);

$kolo1->obwod($kolo1);

$kolo1->pole($kolo1);



/*require_once ("produkt.php");
require_once ("skaner.php");


$product1 = new Produkt(1,'marchewka',5, 25.5);
var_dump($product1);
$skaner = new Skaner();
$skaner->addProduct($product1);




/*$myFirstKsztalt = new ksztalt(4,5,'zielony');
$mySecondKsztalt = new ksztalt(8,12,'czerwony');

$myFirstKsztalt->pointInfo($myFirstKsztalt);
$myFirstKsztalt->pointDistance($mySecondKsztalt);




/*$myFirstObject = new MyFirstClass('tomasz', 'haslo');
var_dump($myFirstObject);

$mySecondObject = new MyFirstClass('darek', 'haslo2');
var_dump($mySecondObject);

$myFirstObject->name = "First object";
var_dump($myFirstObject);

$mySecondObject->name ="Moja nazwa 2";
var_dump($mySecondObject);

$mySecondObject->printInfo();

$myFirstObject->setPassword('wrong');
$myFirstObject->printinfo();


$myFirstObject->setPassword('goodpassword');
$myFirstObject->printinfo();*/

/*$wektor1 = new WektorClass(8,5);
$wektor2 = new WektorClass(2,3);
var_dump($wektor1);
var_dump($wektor2);
$wektor1->AddWektor($wektor2 );
var_dump($wektor1);
var_dump($wektor2);

$wektor1->Length();*/


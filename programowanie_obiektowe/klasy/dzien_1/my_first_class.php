<?php


class MyFirstClass{

    // porzadek- atrybuty, funkcje magiczne-konstruktor, funkcje prywatne, funkcje set i get, inne funkcje puliczne
    public $name;
    private $password;
    public function __construct($newName, $newPass )/* zmienne te m�na poda� przy tworzeniu klasy new*/
    {
        echo "Tworze nowy obiekt klasy MyFirstClass";
        $this->name = $newName;
        $this->setPassword($newPass);
    }/*uzywamy settera, �eby sprawdza� ilo�� liczb ju� przy Default*/
    public function __destructor(){
            echo "u�ywam destructora przed zniszczeniem obiektu, wywo�ywany automatycznie";
        }



    //bez okre�lenia public i tak jest domy�lnie public
    function printInfo(){
        echo ("<br>Info o mojej klasie");
        var_dump($this);
        //$this - ID obiektu - do u�ycia wewn�trz metody �eby odwo�a� si� do atrybuty,
        echo "<br>My name {$this->name}<br>";
        echo "<br>My name {$this->password}<br>";
    }
    //tzw funkcje settery
    public function setPassword($newPass){
        if (strlen($newPass)>6)
        $this->password = $newPass;
    }
    public function getPassword(){
    return $this->password;
    }

    private function saveToDatabase(){
        echo "zapisuje do bazy";
    }

}
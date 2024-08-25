<?php

// Class creation

class Fruits{

    //Properties

    public $name;
    public $weight;
    public $colour;

    //Methods

    function setData($name,$weight,$colour){
        $this->name=$name;
        $this->weight=$weight;
        $this->colour=$colour;
    }

    function getData(){ 
        echo "Your Fruit Name is ".$this->name."<br>";
        echo "Your Fruit weight is ".$this->weight."<br>";
        echo "Your Fruit colour is ".$this->colour."<br>";
    }
}


// Object creation

$obj1 =new Fruits();
$obj2 =new Fruits();

$obj1->setData("Apple","15kg","red");
$obj1->getData();

$obj1->setData("Grapes","10kg","black");
$obj1->getData();

?>
<?php

// class

class Phone{
    // properties
    public $name;
    public $colour;
    public $model;

    // constructor  (Automatically call when create a object)
    
    // function __construct(){
    //      echo "Constructor is called";
    // } 

    function __construct($name,$colour,$model){
        $this->name=$name;
        $this->colour=$colour;
        $this->model=$model;
    }


    // Destructor 

    // function __destruct()
    // {
    //     echo "<br>Destructor is called";
    // }

    function __destruct()
    {
        echo "Your Phone is =".$this->name;
        echo "<br>Your phone colour is =".$this->colour;
        echo "<br>Your phone model is =".$this->model;
    }

}

// creating object

// $ph1 =new Phone();
$ph1=new Phone("redme","blue","7A");


?>
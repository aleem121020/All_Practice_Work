

<?php

class Student{

public $stuID;
public $name;
public $class;
public $section;

function __construct($stuID="0"){
    $this->stuID=$stuID;
}


public function setDetail($name,$class,$section){
    $this->name=$name;
    $this->class=$class;
    $this->section=$section;
}

public function getDetail(){
    echo "Student ID is ".$this->stuID;
    echo "<br> Your name is ".$this->name;
    echo "<br> Your Class is ".$this->class;
    echo "<br> Your Section is ".$this->section;
}


function __destruct()
{
    echo "<br>Destructor is called";
}

}


$Stu1 = new Student(101);

$Stu1->setDetail("Abdul","12th","A");

$Stu1->getDetail();

?>
<?php 

class  Person{
    public $name ;
    public $age;

    public function personname($a,$b){
        echo "The person name is :" .$this->name =$a;
        echo "<br>";
        echo "The person  age is:" .$this->age =$b;

    }
    function personage(){

    }

}

$personobject=new Person;
echo $personobject->name= "jewel"." <br>";
echo $personobject->age= "28";
echo "<br>";
$personobject ->personname("haidar", 24);
?>
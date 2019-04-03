<?php 

class Calculator {

    function add($a,$b){
        echo "The summation is :".($a+$b);
        echo "<br>";
    }
    function sub($a,$b){
      
       echo "The subtraction is :".($a-$b);
           echo "<br>";
    }
    function mul($a,$b){
      
       echo "The multiplication is :".($a*$b) ;
        echo "<br>";
    }
    function div($a,$b){
      
       echo "The division is :".($a/$b) ;
        echo "<br>";
    }
    function rem($a,$b){
      
       echo "The  reminder is :".($a%$b) ;
        echo "<br>";
      }
}


?>
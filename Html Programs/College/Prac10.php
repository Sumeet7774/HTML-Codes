<?php 

// Arithmetic Operators

 $a=10;
 $b=20;
 
 $c=$a+$b;
 echo $c."<br>";
 
 $c=$a-$b;
 echo $c."<br>";
 
 $c=$a*$b;
 echo $c."<br>";
 
 $c=$a/$b;
 echo $c."<br>";
 
 $c=$a%$b;
 echo $c."<br>";


 //Comparison Operators
 
 if($a==$b)
 {
  echo "Both are equal"."<br>";
 }
 
 if($a===$b)
 {
  echo "Both are equal with same type"."<br>";
 }
 
 if($a!=$b)
 {
  echo "Both are Different"."<br>";
 }
 
 if($a<>$b)
 {
  echo "Both are Different"."<br>";
 }
 
 if($a!==$b)
 {
  echo "Both are Different but have same data type"."<br>";
 }
 
 if($a>$b)
 {
  echo "a is greater than b"."<br>";
 }
 
 if($a<$b)
 {
  echo "b is greater than a"."<br>";
 }
 
 if($a>=$b)
 {
  echo "a is greater or equal to b"."<br>";
 }
 
 if($a<=$b)
 {
  echo "a is less than b"."<br>";
 }


 //Logical operators
 
 if($a<$b && $b>$a)
 {
  echo "a is less than b and b is grater than a"."<br>";
 }
 
 if($a>$b || $b>$a)
 {
  echo "a is greater than b or b is grater than a"."<br>";
 }
?> 
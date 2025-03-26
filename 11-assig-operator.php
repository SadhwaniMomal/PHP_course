<?php
// Assigment  , same as    , Description
// x =  y     , x = y      , The left operator gets set to the value of the expression on the right.
// x += y     , x = x + y  , Addition
// x -= y     , x = x - y  , Subtraction
// x *= y     , x = x * y  , Multiplication
// x /= y     , x = x / y  , Division
// x %= y     , x = x % y  , Modulus

echo "<h2> Assigement operator <h2/>";
$a = 10;
$b = 30;
$br = "<br/>";
echo "<hr/>"; 

echo "a = " , $a  , " , " , "b = " , " " , $b; 
echo $br;
echo "<hr/>"; 

echo "x += y =>" , " " , $a += $b;
echo $br;
echo "<hr/>"; 

echo "x -= y =>" , " " , $a -= $b;
echo $br;
echo "<hr/>";

echo "x *= y =>" , " " , $a *= $b;
echo $br;
echo "<hr/>"; 

echo "x /= y =>" , " " , $a /= $b;
echo $br;
echo "<hr/>"; 

echo "x %= y =>" , " " , $a %= $b;
echo $br;
echo "<hr/>"; 



?>
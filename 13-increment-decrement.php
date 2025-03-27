<?php
// Example  , Name            , Effect
// ++$a     , Pre-Increment   , Increments $a by one, then return $a.
// $a++     , Post-Increment  , Increments $a  then increments $a  by one.
// --$a     , Pre-Decrements  , Decrements $a by one, then return $a.
// $a--     , Post-Decrements , Decrements $a  then Decrements $a  by one.

echo "<h3>Increment and Decrement Operator<h3/>";
echo "<hr/>";

$a = 10;
echo "a" , " = " , $a;
echo "<hr/>";


// ++$a Pre-Increment
// echo "++a" , "  " , "----" , "  " , ++$a;
echo "<hr/>";
// $a-- Post-Increment
// echo "a++" , "  " , "----" , "  " , $a++;
echo "<hr/>";
// --$a Pre-Decrements
// echo "--a" , "  " , "----" , "  " , --$a;
echo "<hr/>";
// $a-- Post-Decrements
echo "a--" , "  " , "----" , "  " , $a--;
echo "<hr/>";

?>
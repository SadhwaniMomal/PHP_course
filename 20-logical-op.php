<?php
// Display a heading for logical operators
echo "<h3>LOGICAL OPERATORS IN PHP</h3>";

// Declaring three integer variables
$x = 10;
$y = 20;
$z = 30;

// Displaying variable values
echo "<h3> X => {$x} , Y => {$y} , Z => {$z} </h3>";
echo "<hr/>";

// 1. AND Operator (and, &&) - Returns true if both conditions are true
echo "<h3>Example: AND Operator (and, &&)</h3>";
if($x == 10 and $y == 20){
    echo "Both x and y conditions are true.<br>";
}
if($x == 10 && $y == 20){
    echo "Both x and y conditions are true using &&.<br>";
}
echo "<hr/>";

// 2. OR Operator (or, ||) - Returns true if at least one condition is true
echo "<h3>Example: OR Operator (or, ||)</h3>";
if($x == 10 or $y == 30){
    echo "At least one condition is true using 'or'.<br>";
}
if($x == 10 || $y == 30){
    echo "At least one condition is true using '||'.<br>";
}
echo "<hr/>";

// 3. XOR Operator (xor) - Returns true if one condition is true but not both
echo "<h3>Example: XOR Operator</h3>";
if($x == 10 xor $y == 30){
    echo "One condition is true but not both.<br>";
}
echo "<hr/>";

// 4. NOT Operator (!) - Reverses the boolean value
echo "<h3>Example: NOT Operator (!)</h3>";
if(!($x == 15)){
    echo "x is not equal to 15.<br>";
}
echo "<hr/>";

?>

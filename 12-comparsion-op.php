<?php
// operator     , Name            , Example    ,  Result
// ==           , Equal           , $X == $Y   ,  Return true if $x is equal to $Y
// ===          , Identical       , $X === $Y  ,  Return true if $x is equal to $Y;and they are of the same type
// !=           , Not Equal       , $X != $Y   ,  Return true if $x is not equal to $Y
// <>           , Not Equal       , $X <> $Y   ,  Return true if $x is not equal to $Y
// !==          , Not Identical   , $X !== $Y  ,  Return true if $x is not equal to $Y; 
//                                               or they are not of the same type
// >            , Greater Than    , $X > $Y    ,  Return true if $x is greater to $Y; 
// <            , Less Than       , $X < $Y    ,  Return true if $x is Less to $Y; 
// >=           , Greater 0r Equal, $X >= $Y   ,  Return true if $x is greater or equal to $Y; 
// <=           , Less Than       , $X <= $Y   ,  Return true if $x is Less or equal to $Y; 
// <=>          , Spaceship Than  , $X <=> $Y  ,  Return an integer less than, equal to , or greater than zero, 
//                                                depending on if $X is less than, equal to , or greater than $Y

echo "<h3>Comparsion Operators<h3/>";
echo "<hr/>";

$x = 10;
$y = 15;
$z = "10";

echo "X = " , $x , " " , " , " , " Y = " , $y  , " " , " , " , "Z = " , " " , "'10'";
echo "<hr/>";

// Equal
echo "X == Y " , " " ,  " ------- " , "  "  , var_dump($x == $y);
echo "<br/>";
echo "<hr/>";

// Identical
echo "X === Z " , " " ,  " ------- " , "  "  , var_dump($x === $z) , "Because there z value is str threeEqual check data type ";
echo "<br/>";
echo "<hr/>";

// Not Identical
echo "X !== Z " , " " ,  " ------- " , "  "  , var_dump($x !== $z) , "Because there z value is str threeEqual check data type ";
echo "<br/>";
echo "<hr/>";

// Not Equal
echo "X != Y " , " " ,  " ------- " , "  "  , var_dump($x != $y) ;
echo "<br/>";
echo "<hr/>";

// Not Equal
echo "X <> Y " , " " ,  " ------- " , "  "  , var_dump($x <> $y) ;
echo "<br/>";
echo "<hr/>";

// Greater Than
echo "X > Y " , " " ,  " ------- " , "  "  , var_dump($x > $y) ;
echo "<br/>";
echo "<hr/>";
// Less Than
echo "X < Y " , " " ,  " ------- " , "  "  , var_dump($x > $y) ;
echo "<br/>";
echo "<hr/>";

// Greater or Equal Than
echo "X >= Y " , " " ,  " ------- " , "  "  , var_dump($x >= $y) ;
echo "<br/>";
echo "<hr/>";

// Less or Equal Than
echo "X <= Y " , " " ,  " ------- " , "  "  , var_dump($x <= $y) ;
echo "<br/>";
echo "<hr/>";

// Spaceship
echo "X <=> Y " , " " ,  " ------- " , "  "  , var_dump($x <=> $y) , "SpaceShip operator introduce php 7 return int value";
echo "<br/>";
echo "<hr/>";

?>
<?php

// Strings and string Operator

echo "<h3>Strings and string Operator<h3/>";
echo "<hr/>";

// string
echo "PHP";
echo "<br/>";
echo "<hr/>";


$str1 = 'peter';
$str2 = "10";
$str3 = "my name is moomal sadhwani";


echo $str1;
echo "<br/>";
echo $str2;
echo "<br/>";
echo $str3;
echo "<br/>";

echo "<hr/>";


echo "My name is $str1";
echo "<br/>";
echo 'My name is ' .$str1;
echo "<br/>";

echo "<hr/>";


// concat operator
echo 'My name is ' .$str1. 'and my age is ' .$str2;

echo "<hr/>";
// another Example Concat
$question = "How are You ? ";
$ans = "I am Fine. ";
echo $question .$ans;
echo "<hr/>";

// concat assign operator
$question .= $ans;
echo $question;

?>
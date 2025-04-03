<?php
echo "<h3>Switch Condition</h3>";
echo "<hr/>";

$favColor = "blue";

switch($favColor){
  case "red": echo "red color is fav";
  break;
  case "blue": echo "blue color is sky color";
  break;
  case "yellow": echo "yellow color is light color";
  break;
  default: echo "This color is not maatch";
}

?>
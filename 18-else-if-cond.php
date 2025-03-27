<?php
echo "<h3>ELSE IF CONDITION</h3>";
echo "<hr/>";

$userName = "moomal";
$email = "moomal@gmail.com";

if($userName == "moomal"){
  echo "welcome Miss $userName";
}else if($email == "sadhwanimoomal@gmail.com"){
  echo "your Email not matched";
}else{
  echo "Try again";
}

?>
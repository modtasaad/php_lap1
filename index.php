<?php
// <----------------------task 1----------------------->
//  phpinfo();
 echo "test";
 echo "<br>";
// <----------------------task 2----------------------->
define("mosta", "lap1_php");
echo mosta;
echo "<br>";
// <----------------------task 3----------------------->
echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['REMOTE_PORT'];
echo "<br>";
echo $_SERVER['SERVER_PORT'];
echo "<br>";
// echo $_SERVER['REMOTE_HOST'];
echo "<br>";
echo $_SERVER['REMOTE_ADDR'];
echo "<br>";
echo $_SERVER['SERVER_ADDR'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
echo "<br>";
echo $_SERVER['SCRIPT_FILENAME'];
echo "<br>";
echo $_SERVER['SERVER_ADMIN'];
echo "<br>";
 
// <----------------------task 4----------------------->

$age = 13;

switch ($age) {
  case $age<5:
    echo "stay at home";
    break;
  case $age==5:
    echo "go to kindergarden";
    break;
    case $age>=6 && $age<=12:
    echo "go to gread : 4";
    break;
    default:
    echo "your age is".$age;
}

?>
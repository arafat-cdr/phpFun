<?php

$s  = file_get_contents('log_24.2.2018.txt');

echo $s;

echo "<br/><br/>++++++++++++++++++++++++++++++++++++++++++++++++++++++<br/><br/>";

$name  = "log_24.2.2018.txt";

foreach(file($name) as $v) {
   echo $v. "<br/>";
   //die();
}
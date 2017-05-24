<?php
$a=10;
$b=20;
echo $a; 
echo "<br>";
echo $b;
$a=$b;
echo "<br>";
echo $a; 
echo "<br>";
echo $b;
$a=30;
$b=&$a;
echo "<br>";
echo $a; 
echo "<br>";
echo $b;
$b=40;
$b=&$a;
echo "<br>";
echo $a; 
echo "<br>";
echo $b;
?>
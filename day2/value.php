<?php
$a=10;
$b=20;
echo $a;
echo $b;
swap($a,$b);
function swap($a,$b)
{
$c=$a;
$a=$b;
$b=$c;
echo $a;
echo $b;
}
?>
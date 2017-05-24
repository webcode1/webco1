<?php
$a=20;
if(empty($a))
echo "set";
else
	echo "unse";
$a=30;
echo "<br>";
if(isset($a))
	echo "set";
else
	echo "unse";
echo "<br>";
$a=40;
if(is_null($a))
	echo "yes";
else
	echo "not";
echo "<br>";
$a=60;
unset($a);
echo $a;
echo "<br>";
?>
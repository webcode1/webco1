<?php
echo"<br>";
echo "hello";
$a=10;
$b=0;
try
{
if($b==0)
throw new Exception();
$c=$a/$b;
}
catch(Exception $b)
{
echo"<br>";
echo "fool cannot be zero";
}
echo "<br>";
echo "hi";
?>
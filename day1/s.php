<?php
echo"hello";
$a=10;
$b=0;
try{
if($b==0)
throw new exception();
$c=$a/$b;
}
catch(Exception $b)
{
echo"FOol cannot be zero";
}
echo "hi";
?>
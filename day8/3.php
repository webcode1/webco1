<?php
$a=array(40,60,90,64,82);
$f=sizeof($a);
rsort($a);
for($i=0;$i<$f;$i++)
{
echo"<br>";
if($a[$i]>=90 && $a[$i]<100)
echo "O";
if($a[$i]>=80 && $a[$i]<90)
echo "A";
if($a[$i]>=70 && $a[$i]<80)
echo "B";
if($a[$i]>=50 && $a[$i]<70)
echo "C";
if($a[$i]<50)
echo "F";
}

?>
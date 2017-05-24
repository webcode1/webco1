<?php
$a=array("Maths"=>40,"Science"=>60,"English"=>90,"Language"=>64,"Moral Science"=>82);
$f=sizeof($a);
rsort($a);
var_dump($a);
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
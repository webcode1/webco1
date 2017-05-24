<?php
$a="sanyam is gereata";
$count=0;
$s=0;
$f=strlen($a);
for($i=0;$i<$f;$i++)
{
if($a[$i]=='e' || $a[$i]=='a' ||$a[$i]=='i'||$a[$i]=='o'||$a[$i]=='u')
$count++;
elseif($a[$i]==" ")
$s++;
}
echo "vowel:";
echo $count;
echo"<br>";
echo "whitespace:";
echo $s;
echo $f;           
?>
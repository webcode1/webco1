<?php
$x=0;
function myTest() {
 global $x;    
     echo $x;
     $x++;
}

myTest();
echo "<br>";
myTest();
echo "<br>";
myTest();
myTest();
?>  
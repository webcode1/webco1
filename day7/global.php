<?php

function myTest() {
 static $x;    
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
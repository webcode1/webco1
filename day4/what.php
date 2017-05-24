<?php
$con=mysql_connect("localhost","sanyam","*123*");
mysql_select_db("c",$con);
$sql=("insert into host values('sanyam',2,'jain')");
mysql_query($sql);
$s=("insert into host values('jayan',3,'j')");
mysql_query($s);
?>


<?php
session_start();
$abc=$_POST["s"];
$pass=$_POST["w"];
$email=$_POST["mail"];

//$ail=$_POST["wi"];
//$abc=$_POST["male"];
//$pass=$_POST["female"];
echo"<marquee>This is my first page</marquee>";
//unset($_SESSION["s"]);
if($abc==="sanyam" && $pass==="*123*" && $email=="winnerlionx@gmail.com")
{
	//if($_SESSION["s"]==" ")
	 $_SESSION["s"]=$name;
		header("location:welcome.php?name=$abc");
	
	
}
else
{
	include("true.html");
}
//echo $pass;
?>
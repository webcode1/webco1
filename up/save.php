<?php
include "db.php";

if(isset($_POST['register']))
{
	$uname=$_POST['unam'];
	$mobno=$_POST['tel'];

	if($_FILES['pic']!="")
	{   $md='mkdir '.$uname.'/';
		move_uploaded_file($_FILES['pic']['tmp_name'],"uploads/".$md.$uname.".jpg");
		$file = "uploads/".$uname."jpg";
	}
	else
	{
		echo "Upload file....";
	}
	$sql="INSERT INTO pbook (username, tel, img) VALUES ('".$uname."','".$mobno."','".$file."')";
	$res=mysql_query($sql) or die ("Query failed..".mysql_error());
	if($res)
	{
		echo "records inserted successsfully...";
	}else
	{
		echo "error";
	}
mysql_close($con);
}
?>
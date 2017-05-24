<?php
if(file_exists("one.txt"))
echo "yes";
else
echo "no";
$content=file_get_contents("one.txt");
echo $content."<br>";
echo "<br>file size:";
$r=filesize("one.txt");
echo $r;
echo "<br>file copy:";
$con=copy("one.txt","two.txt");
echo $con;
if(file_exists("three.txt"))
{
echo "yes";
unlink("three.txt");
}
else
echo "no";
echo "<br>file details:";
$detail=stat("one.txt");
print_r($detail);
if(file_exists("two.txt"))
{
$fp=fopen("two.txt","w");
$c=fwrite($fp,10);
echo $c."<br>";}

if(file_exists("one.txt"))
{
$fp=fopen("one.txt","r");
$c=fread($fp,10);
echo $c."<br>";
}
if(file_exists("one.txt"))
{
$fp=fopen("one.txt","a+");
$c=fwrite($fp,10);
echo $c."<br>";
}
if(file_exists("ram.txt"))
{
$ft=fopen("ram.txt","w");
$name="vivek";
$id=1;
fwrite($ft,$name);
fwrite($ft,$id);
}
$s=file_get_contents("one.txt");
echo $content."<br>";
fclose($fp);
fclose($ft);
?>
<?php
class student
{
public $id=0;
public $rollno=0;
public $year=0;
public $name=0;
public function addstudent($id,$name,$rollno,$year)
{
$this->id=$id;
$this->name=$name;
$this->year=$year;
$this->rollno=$rollno;
}
}
$sanyam=new student();
for($i=0;$i<5;$i++)
{
$sanyam->addstudent($i,"sanyam",2,1996);
echo"<br>";
echo $sanyam->id;
echo"<br>";
echo $sanyam->name;
echo"<br>";
echo $sanyam->rollno;
echo"<br>";
echo $sanyam->year;
echo"<br>";
}
?>
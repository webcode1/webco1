<?php
class student
{
public $id=0;
public $rollno=0;
public $year=0;
public $name=0;
public function __construct($id,$name,$rollno,$year)
{
$this->id=$id;
$this->name=$name;
$this->year=$year;
$this->rollno=$rollno;
}
public function add()
{

echo"<br>";
echo $this->id;
echo"<br>";
echo $this->name;
echo"<br>";
echo $this->rollno;
echo"<br>";
echo $this->year;
echo"<br>";
}
}
$sanyam=new student(1,"sanyam",2,1996);
$sanyam->add();
?>
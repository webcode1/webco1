 <?php
 $a=array('India'=>array('Male'=>50,'Female'=>35,'children'=>23),
 'Africa'=>array('Male'=>67,'Female'=>64.5,'children'=>60),
 'Australia'=>array('Male'=>20,'Female'=>15,'children'=>10),
 'China'=>array('Male'=>100,'Female'=>80,'children'=>85)
 );
 foreach($a as $c=>$v)
 {
 echo "<br>$c";
 foreach($v as $g=>$p)
 {
 echo "$p";
 }
 }
 ?>
 
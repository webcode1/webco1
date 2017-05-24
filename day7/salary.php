<?php

function tax($salary)
{
if($salary<180000)
$tax=0;
elseif($salary<400000)
$tax=$salary*0.1;
else
$tax=$sal*0.2;
	return $tax;
}
echo tax(180000);
?>
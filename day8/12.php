<?php
function odd($var)
{
    // returns whether the input integer is odd
    return($var & 1);
}

function even($var)
{
    // returns whether the input integer is even
    return(!($var & 1));
}
$a=array(1,3,2,5,8,2,7,4,9,6,11);
$d=array_filter($a,"odd");
$r=array_filter($a,"even");
sort($r);
sort($d);
print_r(array_merge($r,$d));

?>
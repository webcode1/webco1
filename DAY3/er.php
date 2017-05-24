<?php

function add($a,$b)
{

	
//throw new Exception();
        echo "this is error";
        echo "<br>";

	add(4,5);

		}
		try
		{throw new Exception();
			add(4,5);
		}
catch(Exception $b)
{
	echo "sorry working an infinite loop";
}
		//add(4,5);

?>
<?php

for($i=1;$i<=4;$i++)
{
	for($j=1;$j<=$i;$j++)
		echo $j;
	
	for($k=7-(2*$i);$k>0;$k--)
		echo "_";
	for($l=$i;$l>0;$l--)
	{   if($l!=4)
		{
		echo $l;
	    }
	}
	echo "<br>";

	

}
?>
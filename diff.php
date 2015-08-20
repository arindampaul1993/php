<?php
$a=array(10,20,50,60,90);
$b=array(10,20,30,70,80);//considering b as the greater array and a as the smaller array,otherwise sizeof could be used to calculate the greater array and accordingly calculations could be taken care of
foreach ($b as $v)
{
	foreach ($a as $e)
	{
		if($v==$e)
		{
			$d=0;
			break;
		}
		else
		{
			$d=1;
		}
	}
	if($d==1)
		echo $v."<br>";
}


?>
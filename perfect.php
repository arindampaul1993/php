<?php
$a=6;
$sum=0;

for($i=1;$i<6;$i++)
{
	if($a%$i==0)
		$sum=$sum+$i;
}
if($sum==6)
echo"perfect";
else
echo "not perfect";
?>
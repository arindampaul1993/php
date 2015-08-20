<?php
$a=153;
$d=0;
$sum=0;
while($a!=0)
{
	$d=$a%10;
	$a=$a/10;
	$sum=$sum+($d*$d*$d);
}
if($sum==153)
{
	echo "it is an armstrong number";
}
else
{
	echo "it is not an armstrong number";
}
?>
<?php
$a=123;
$d=$a%10;
$a=$a/10;
$sum=0;

while($a!=0)
{
	$g=$a%10;
	$a=$a/10;
	$sum=$sum+$g;

}
if($sum==3)
	echo "handsome";
else
	echo " not handsome";
?>

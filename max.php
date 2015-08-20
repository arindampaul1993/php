<?php
$a=array(10,20,30);
$max=$a[0];
foreach ($a as $k=>$v)
{
	if($v>$max)
		$max=$v;

}
echo $max;
?>


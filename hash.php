<?php
$a=array(20,30,20,30,40,40);
foreach($a as $k=>$v)
	$b[$v]=0;

$i=0;
foreach($b as $k=>$v)
	$c[$i++]=$k;

print_r($c);
?>
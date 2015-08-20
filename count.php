<?php
$count=0;
$a=array(20,30,40,20,30,30);
foreach($a as $k=>$v)
	$b[$v]=0;
foreach($a as $k=>$v)
	$b[$v]+=1;
print_r($b);


?>
<?php

$a=array(10,20,30,40);
echo "<b><i>Original array--->";
print_r($a);
echo "</i>";
echo "</b>";
echo "<br>";
for($j=0;$j<=3;$j++)
{
	$b=$a[0];
for ($i=0;$i<=3;$i++)
{
	if($i!=3)
	{
    $a[$i]=$a[$i+1];
    
    }
    else
    {
    	$a[3]=$b;
    }

}
print_r($a);
echo "<br>";
}


?>
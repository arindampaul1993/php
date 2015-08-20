<?php
$a="Bhanu";
$b=str_split($a);
echo "<marquee>";
for($i=0;$i<=4;$i++)
{
	for($j=0;$j<=$i;$j++)
	echo $b[$j];
    echo "<br>";
	
}
echo "</marquee>";
?>
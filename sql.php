<?php
$link=mysql_connect("localhost","root","");
mysql_select_db("arindam");
$q="select * from student";
$res=mysql_query(($q));
while($r=mysql_fetch_row($res))
{
	echo $r[0]." ".$r[1]."<br>";
}
?>
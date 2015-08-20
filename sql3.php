<form>
SELECT roll no<select name="ddl_roll">
<?php
$link=mysql_connect("localhost","root","");
mysql_select_db("arindam");
$q="select roll from emp";
$res=mysql_query($q);
while($r=mysql_fetch_row($res))
{
	echo "<option>".$r[0]."</option>";
}
?>
</select>
<br>
<input type="submit" value="show" name="btn_show"><br><br>
</form>
<?php
if(isset($_GET['btn_show']))
{
$link=mysql_connect("localhost","root","");
mysql_select_db("arindam");
$q="select * from emp where roll=".$_GET['ddl_roll'];
$res=mysql_query($q);
while($r=mysql_fetch_row($res))
{
	$c=strlen($r[4]);
	$a=str_split($r[4]);

	for($i=0;$i<$c;$i++)
{
	$a[$i]=chr(ord($a[$i])-1);
}
    $d=implode("",$a);
	echo $r[0]." ".$r[1]." ".$r[2]." ".$r[3]." ".$d." ".$r[5];
}
}
?>

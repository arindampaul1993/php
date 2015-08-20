
<form>
	enter password :<input type="password" name="txt"><br><br>
	<input type="submit" name="btn"><br><br>
	
</form>
<?php
if(isset($_GET['btn']))
{
$a=$_GET['txt'];
$c=strlen($a);
$b=str_split($a);

for($i=0;$i<$c;$i++)
{
	$b[$i]=chr(ord($b[$i])+1);
}

//echo $d;
echo "Encrypted password";
echo "<textarea>";
foreach ($b as $v)
{
	echo "$v";
}
echo "</textarea>";
for($i=0;$i<$c;$i++)
{
	$b[$i]=chr(ord($b[$i])-1);
}
echo "<br><br>";
echo "Decrypted password";
echo "<textarea>";
foreach ($b as $v)
{
	echo "$v";
}
echo "</textarea>";
}
?>
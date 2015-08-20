<center>
	<table>
		<form>
			<tr><td align="center" colspan=2>REGISTRATION</td></tr>
			<tr><td>NAME</td>
				<td><input type="text" name="txt_name"></td>
			</tr>
			<tr><td>ROLL</td>
				<td><input type="text" name="txt_roll"></td>
			</tr>
			<tr><td>ADDRESS</td>
				<td><input type="text" name="txt_add"></td>
			</tr>
			<tr><td>PASSWORD</td>
				<td><input type="password" name="txt_pwd"></td>
			</tr>
			<tr><td>GENDER</td>
				<td>male:<input type="radio" name="radio_gender" value="male">female:<input type="radio" name="radio_gender" value="female"></td>
			</tr>
			<tr><td>AGE</td>
				<td><select name="ddl_age">
					<option>select age</option>
					<?php
					for($x=20;$x<=50;$x++)
					{
						echo "<option>".$x."</option>";
					}
					?>
					</td>
			</tr>
			<tr><td align="center" colspan=2><input type="submit" name="btn_submit" value="submit"></td>
			</tr>
		</form>
	</table>
</center>
<?php
if(isset($_GET['btn_submit']))
{
	$a=$_GET['txt_pwd'];
	$c=strlen($a);
	$b=str_split($a);

	for($i=0;$i<$c;$i++)
	{
	$b[$i]=chr(ord($b[$i])+1);
	}
	$pwd=implode("",$b);
	$link=mysql_connect("localhost","root","");
	mysql_select_db("arindam");
	$q="insert into emp values(".$_GET['txt_roll'].",'".$_GET['txt_name']."','".$_GET['txt_add']."',".$_GET['ddl_age'].",'".$pwd."','".$_GET['radio_gender']."')";
	$rec=mysql_query($q);
	if(mysql_affected_rows($link)>0)
	{
		echo "<br>done";
	}
	else
	{
		echo "<br>error";
	}
}
?>			
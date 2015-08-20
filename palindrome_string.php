<form>
	<select name="list">
		<option>Select an option</option>
		<option>madam</option>
		<option>malayalam</option>
		<option>bhanu</option>
	</select>
	<br><br>
	<?php
	if(isset($_GET['submit']))
	{
		$a=$_GET['list'];
		$b=strrev($_GET['list']);
		if($a==$b)
			echo "IT IS A PALINDROME!!!!!";
		else
			echo "IT IS NOT A PALINDROME!!!!!";

	}
	?>
	<input type="submit" name="submit" value="CHECK"><br><br>
</form>
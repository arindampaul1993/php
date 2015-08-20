<form>
	enter your string:<input type="text" name="input"><br><br>
	enter your character to be replaced:<input type="text" name="replaced"><br><br>
	enter your character which will replace:<input type="text" name="replace"><br><br>
	<?php
	if(isset($_GET['submit']))
	{
		$a=str_replace($_GET['replaced'],$_GET['replace'],$_GET['input']);
		echo $a;
	}
	?>
	<input type="submit" name="submit" value="replace"><br><br>
</form>

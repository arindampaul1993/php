<form>
	enter your input:<input type="text" name="input"><br><br>
	<input type="submit" name="sentence" value="sentence case"><br><br>
	<input type="submit" name="title" value="title case"><br><br>
	<input type="submit" name="upper" value="upper case"><br><br>
	<input type="submit" name="lower" value="lower case"><br><br>
	<?php
	if(isset($_GET['sentence']))
		echo ucfirst($_GET['input'])."<br>";
	elseif(isset($_GET['title']))
		echo ucwords($_GET['input'])."<br>";
	elseif(isset($_GET['upper']))
		echo strtoupper($_GET['input'])."<br>";
	elseif(isset($_GET['lower']))
		echo strtolower($_GET['input'])."<br>";
	?>
</form>

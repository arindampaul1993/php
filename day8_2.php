<form>
	select foreground: <select name="fore">
		<option>select foreground</option>
		<option>red</option>
		<option>blue</option>
		<option>green</option>
		<option>white</option>
	</select><br><br>
	<select name="back">
		<option>select background</option>
		<option>red</option>
		<option>blue</option>
		<option>green</option>
		<option>white</option>
	</select><br><br>
	<input type="submit" value="change background" name="back_btn"><br><br>
	<input type="submit" value="change foreground" name="fore_btn"><br><br>
	<input type="submit" value="change both" name="both_btn"><br><br>
</form>
	<?php
	
	
	
	if(isset($_GET['back_btn']))
	{
		echo '<textarea style="background-color:';
		$a=$_GET['back'];
		echo $a;
		echo ';';
		echo '">';
		echo 'HPES';
		echo '</textarea>';
	}
	if(isset($_GET['fore_btn']))
	{
		echo '<textarea style="color:';
		$a=$_GET['fore'];
		echo $a;
		echo ';';
		echo '">';
		echo 'HPES';
		echo '</textarea>';
	}
	
	
	if(isset($_GET['both_btn']))
	{
		echo '<textarea style="background-color:';
		$a=$_GET['back'];
		$b=$_GET['fore'];
		echo $a;
		echo ';';
		echo 'color:';
		echo $b;
		echo ';';
		echo '">';
		echo 'HPES';
		echo '</textarea>';

	}
	?>




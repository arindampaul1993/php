<form>
	<select name="list">
		<option>C:</option>
		<option>D:</option>
		<option>E:</option>
	</select>
	<br><br>
	<input type="submit" value="submit" name="submit"><br><br>
	<?php
	if(isset($_GET['submit']))
	{
		
		
			$c=opendir($_GET['list']);
			
			while($b=readdir($c))
			{
				echo '<a href=';
				echo $b;
				echo '>';
				echo $b;
				
				echo '</a>';
				echo '</br>';
			}
			
			closedir($c);
		
	}
	?>
</form>

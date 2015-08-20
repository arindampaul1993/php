<form>
	enter your input<input type="textbox" name="input"><br><br>
	<select>
		<option>any default option</option>
		<?php
		if(isset($_GET['submit']));
		{
			echo "<option>".$_GET['input']."</option>";
			
		}
		?>
		
	</select><br><br>

	<input type="submit" name="submit" value="insert" ><br><br>
	
</form>
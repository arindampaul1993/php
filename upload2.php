<form method="post" enctype="multipart/form-data">
	<input type="file" name='myfile'/><br>
	<input type="submit" name="btn_info" value="get_file_info"><br>
	<input type="submit" name="btn_upload" value="upload"><br>
</form>
<?php
if(isset($_POST['btn_info']))
{
	echo $_FILES['myfile']['name']."<br>";
	echo $_FILES['myfile']['type']."<br>";
	echo $_FILES['myfile']['size']."<br>";
	echo $_FILES['myfile']['tmp_name']."<br>";
}
if(isset($_POST['btn_upload']))
{
	if($_FILES['myfile']['error']==0)
	{
		$temp_name=$_FILES['myfile']['tmp_name'];
		$path=$_SERVER['DOCUMENT_ROOT']."stp2014_85553/day10/".$_FILES['myfile']['name'];
		if(move_uploaded_file($temp_name,$path))
		{
			echo "file uploaded";
			echo '<img src="'.$_FILES['myfile']['name'].'" height="400" width="400">';
		}
		else
		{
			echo "error";
		}
	}
}


?>

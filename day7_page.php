<center><h3>FILE DATA</h3></center><br><br><br><br>
<form>
	comment:<textarea name="input"></textarea><br><br>
			<input type="submit" name="insert" value="insert">
			<input type="submit" name="show" value="show">
			<input type="submit" name="row_count" value="row_count">
			<input type="submit" name="char" value="char">
			<input type="submit" name="space" value="space">
			<input type="submit" name="vowel" value="vowel">
			<br><br>
</form>
<?php
if(isset($_GET['insert']))
{
	$a=fopen("data.txt","w");
	fwrite($a,$_GET['input']);
	fclose($a);
}
if(isset($_GET['show']))
{
	
	if(file_exists("data.txt"))
	{
		
			
		echo '<input type="text" value="';
		
		$a=fopen("data.txt","r");
		echo file_get_contents("data.txt");
		
		echo '">';
	    
		
	}
	else
	{
		echo "file not found!!!";
	}
	fclose($a);
}
if(isset($_GET['row_count']))
{
	$count=1;
	if(file_exists("data.txt"))
	{
		echo '<input type="text" value="no of rows=';

	$a=fopen("data.txt","r");
	while(!feof($a))
	{
		$b=fgetc($a);
		if($b=="\n")
		{
			++$count;
		}
	}
	echo $count;
	echo '">';;
    }
    else
    {
    	echo "file not found";
    }
    fclose($a);
}
if(isset($_GET['char']))
{
	$count=1;
	if(file_exists("data.txt"))
	{
		echo '<input type="text" value="no of chars=';
	    $a=fopen("data.txt","r");
	while(!feof($a))
	{
		$b=fgetc($a);
		if($b)
		{
			++$count;
		}
	}
		echo $count;
	    echo '">';;

    }
    else
    {
    	echo "file not found";
    }
    fclose($a);
}
if(isset($_GET['vowel']))
{
	$count=0;
	if(file_exists("data.txt"))
	{
	echo '<input type="text" value="no of vowels=';
	$a=fopen("data.txt","r");
	while(!feof($a))
	{
		$b=fgetc($a);
		if($b=='a'||$b=='e'||$b=='i'||$b=='o'||$b=='u')
		{
			++$count;
		}
	}
	    echo $count;
	    echo '">';;
    }
    else
    {
    	echo "file not found";
    }
    fclose($a);
}
if(isset($_GET['space']))
{
	$count=0;
	if(file_exists("data.txt"))
	{
	echo '<input type="text" value="no of spaces=';
	$a=fopen("data.txt","r");
	while(!feof($a))
	{
		$b=fgetc($a);
		if($b=="\t" ||$b==" ")
		{
			++$count;
		}
	}
	    echo $count;
	    echo '">';;
    }
    else
    {
    	echo "file not found";
    }
    fclose($a);
}
?>






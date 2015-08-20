<?php
class person
{
	public $name;
	public $age;
	public $gender;
	function __construct()
	{
		echo "person class's object created<br><br>";
	}
}
class employee extends person
{
	public $emp_code;
	function __construct()
	{
		echo "employee class's object created<br><br>";
	}
}
class specialist extends employee
{
	function __construct()
	{
		echo "specialist class's object created<br><br>";
	}
}
$p=new person();
$e=new employee();
$s=new specialist();

?>
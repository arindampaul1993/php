<?php
class A
{
	public function funA()
	{
		echo "function of class A has been called<br><br>"; 
	}
	public function __construct()
	{
		echo "constructor of class A invoked<br><br>";
	}


}
class B extends A
{
	public function funA()
	{
		echo "now parent's function will be called<br><br>";
		parent::funA();
	}
	function __construct()
	{
		echo "constructor of class B invoked<br><br>";
	}


}
//$a=new A();
$b=new B();
$b->funA();
?>
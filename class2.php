<?php
class animal
{
	public $name="";
	public $age=0;
	public function display()
	{
		echo "name ".$this->name."<br>";
		echo "age ".$this->age."<br>";
	}

}
class dog extends animal
{

}
class cat extends animal
{

}
$d=new dog();
$c=new cat();
$c->name="meow";
$c->age=67;
$d->name="bow";
$d->age=45;
$c->display();
$d->display();
?>

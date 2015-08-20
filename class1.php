<?php
abstract class Shapes
{
	abstract function area();
	
}
class rectangle extends Shapes
{
	public $l=0;
	public $b=0;
	function area()
	{
		return($this->l*$this->b);
	}
}
class triangle extends Shapes
{
	public $b;
	public $h;
	
	function area()
	{
		return(0.5*$this->b*$this->h);
	}
}
$rect=new rectangle();
$triang=new triangle();
$rect->l=10;
$rect->b=10;
$triang->b=10;
$triang->h=10;
echo "circle area ".$triang->area()."<br>";
echo "rectangle area ".$rect->area()."<br>";
?>

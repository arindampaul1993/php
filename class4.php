<?php
abstract class bank
{
	public $rate=0;
	abstract function interest();
	 function display()
	{
		return("rate= ".$this->rate);
	}
}
class ICICI extends bank
{
	function interest()
	{
		$this->rate = 3.7;
	}
}
class SBI extends bank
{
	function interest()
	{
		$this->rate = 4.5;
	}
}
class PNB extends bank
{
	function interest()
	{
		$this->rate = 2.4;
	}
}
class ABNAMRO extends bank
{
	function interest()
	{
		$this->rate = 5.3;
	}
}
$a=new ABNAMRO();
$s=new SBI();
$p=new PNB();
$i=new ICICI();

$a->interest();
echo "ABNAMRO ".$a->display()."<br>";
$i->interest();
echo "ICICI ".$i->display()."<br>";
$p->interest();
echo "PNB ".$p->display()."<br>";
$s->interest();
echo "SBI ".$s->display()."<br>";


?>

<htmL><script>
function my_name()
{
	//var a;
	//var b;
	//a=document.getELementById("pwd1").value;
	//b=document.getELementById("pwd2").value;
	if(document.getElementById("pwd1").value!=document.getElementById("pwd2").value)
	{
		alert("Passwords do not match");
	}
}
function clear1()
{
	document.getElementById("txt1").value="";

}
function clear2()
{
	document.getElementById("txt2").value="";

}
function clear3()
{
	document.getElementById("pwd1").value="";

}
function clear4()
{
	document.getElementById("pwd2").value="";

}

</script>

	<input type="text" id="txt1" value="enter name" onfocus="clear1()"/><br><br>
	<input type="text" id="txt2" value="enter address" onfocus="clear2()"/><br><br>
	<input type="password" id="pwd1" value="enter password" onfocus="clear3()"/><br><br>
	<input type="password" id="pwd2" value="confirm password" onfocus="clear4()"><br><br>
	<input type="text" onfocus="my_name()"/>
	

</html>
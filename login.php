<head><linkref="stylesheet" href="style1.css">
</head>
<center>
	<form action="bhanu.php" border= 5px dotted black>
	Name :<input type="text" name="name" ><br><br>
	Age :<select name="age" >
		 <option>Select Age</option>
		 <?php
		   for($i=1;$i<=30;$i++)
		   {
		   	echo "<option>".$i."</option>";
		   }
		   ?>
		 </select><br><br>
	City :<select name="city" >
		 <option>Select City</option>
		 <option>GHY</option>
		 <option>KOL</option>
		 <option>SIL</option>
		 <option>ABC</option>
		 <option>XYZ</option>
		</select><br><br>
	Password :<input type="password" name="pwd"><br><br>
	<input type="checkbox" name="chk_car" value="car"> Car<br><br>
	<input type="checkbox" name="chk_bike" value="bike"> Bike<br><br>
	<input type="checkbox" name="chk_computer" value="computer"> Computer<br><br>
	<input type="checkbox" name="chk_house" value="house"> House<br><br>
	<input type="submit" name="submit" value="submit"><br><br>
    </form>
</center>


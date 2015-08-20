<center>
<?php
 echo "welcome ".$_GET['name']."<br><br>";
 echo "ur age is ".$_GET['age']."<br><br>";
 echo "ur city is ".$_GET['city']."<br><br>";
 
 echo "<ul><br><br>";
 echo "u have<br><br>";
 	
 		if(isset($_GET['chk_car']))
 			echo "<li>".$_GET['chk_car']."</li>";
 		if(isset($_GET['chk_bike']))
 			echo "<li>".$_GET['chk_bike']."</li>";
 		if(isset($_GET['chk_house']))
 			echo "<li>".$_GET['chk_house']."</li>";
 		if(isset($_GET['chk_computer']))
 			echo "<li>".$_GET['chk_computer']."</li>";
 echo "</ul>";
 ?>	
</center>
 


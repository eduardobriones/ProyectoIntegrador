<?php
		
		$ser="localhost";
		$user="root";
		$pass="";
		$pub = $_POST['nombre'];
		$email = $_POST['email'];




		if(isset($pub) && !empty($pub) && !empty($email)){

		$db=mysql_connect($ser,$user,$pass);

		$db_selected = mysql_select_db("cal",$db);

		$sql = "INSERT INTO `calen`(`nom_cal`, `email`)
		VALUES('$pub','$email')";
		

		 mysql_query($sql,$db);
   			 header("location:calendar.php");
   			mysql_close($db);
		}
		else {
			echo "<script language='JavaScript'>alert('Error, no ha introducido todos los datos');</script>";			
		}

	?>

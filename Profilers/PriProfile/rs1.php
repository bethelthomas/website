<?php
	session_start();
	
	$USN1 = $_POST['USN'];
	$password = $_POST['PASSWORD'];
	$confirm = $_POST['repassword'];
	$mysqli = new mysqli('localhost','root','','details');
		if($mysqli->connect_error) { die('Error'.('.$mysqli->connect_errno.').'$mysqli->connect_error');}
		else
		{
			echo "Connected to database";
		}

	
	if($password == $confirm) {
		if($sql = mysqli_query($mysqli,"UPDATE `placement`.`prilogin` SET `PASSWORD` ='$password' WHERE `prilogin`.`Username` = '$USN1'"));
		echo "<center>Password Reset Complete</center>";
		echo "<center> <a href='index.php'>Go Back</a></center>";
		session_unset();
	} else
	echo "Update Failed";
?>
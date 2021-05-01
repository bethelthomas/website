<?php
	session_start();
	
	$USN1 = $_POST['USN'];
	$password = $_POST['PASSWORD'];
	$confirm = $_POST['repassword'];
	$USN2 = ($_SESSION['reset']);
	
	$connect = 
	$mysqli = new mysqli('localhost','root','','details');
	if($mysqli->connect_error) { die('Error'.('.$mysqli->connect_errno.').'$mysqli->connect_error');}
	else
	{
		echo "Connected to database";
	}
	
			if($USN1 && $password && $confirm ){
		
	
	if($password == $confirm) {
		
		if($USN2 == $USN1){
		if($sql = mysqli_query($mysqli,"UPDATE `placement`.`slogin` SET `PASSWORD` ='$password' WHERE `slogin`.`USN` = '$USN1'")){
		echo "<center>Password Reset Complete</center>";
		session_unset();
		}
		} else {
			session_unset();
			die("Enter Your USN only");		
			
			} 
	} else
	{
	echo "Update Failed";
	session_unset();
	}
	}
	else
	{
	echo "Field cannot be left blank";
	session_unset();
	}
?>
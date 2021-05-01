<?php
	session_start();
	$username = $_POST['username'];
	$password  = $_POST['password'];
	
	if ($username&&$password)
	{
		$mysqli = new mysqli('den1.mysql5.gear.host
		','xiecampus','Xie@campus','details4');
		if($mysqli->connect_error) { die('Error'.('.$mysqli->connect_errno.').'$mysqli->connect_error');}
		else
		{
			echo "Connected to database";
		}
	
		
		$query = mysqli_query($mysqli,"SELECT * FROM slogin WHERE USN='$username'");
		
		$numrows = mysqli_num_rows($query);
		
		if ($numrows!=0)
		{
			while($row = mysqli_fetch_assoc($query))
			{
				$dbusername = $row['USN'];
				$dbpassword = $row['PASSWORD'];
				
			}
			if ($username==$dbusername&& $password==$dbpassword)
			{
				  echo "<center>Login Successfull..!! <br/>Redirecting you to HomePage! </br>If not Goto <a href='index.php'> Here </a></center>";
			  echo "<meta http-equiv='refresh' content ='3; url=index.php'>";
				$_SESSION['username'] = $username;
				//$_SESSION['Name'] = mysql_query("SELECT Name FROM slogin WHERE USN='$username'");
			} else{
				$message = "Username and/or Password incorrect.";
  			echo "<script type='text/javascript'>alert('$message');</script>";
			  echo "<center>Redirecting you back to Login Page! If not Goto <a href='index.php'> Here </a></center>";
			  echo "<meta http-equiv='refresh' content ='1; url=index.php'>";
			}
		}else
			die("User not exist");
	}
	else
	die("Please enter USN and Password");
	?>
<?php
	session_start();
	$pusername = $_POST['username'];
	$password  = $_POST['password'];
?>

	
<?php 	
	if ($pusername&&$password)
	{
				$mysqli = new mysqli('den1.mysql5.gear.host','details4','Xie@campus');

		if($mysqli->connect_error) { die('Error'.('.$mysqli->connect_errno.').'$mysqli->connect_error');}
		else
		{
			echo "Connected to database";
		}
		
		$query = mysqli_query($mysqli,"SELECT * FROM plogin WHERE Username='$pusername'");
		
		$numrows = mysqli_num_rows($query);
		
		if ($numrows!=0)
		{
			while($row = mysqli_fetch_assoc($query))
			{
				$dbusername = $row['Username'];
				$dbpassword = $row['Password'];
				
			}
			if ($pusername==$dbusername&&$password==$dbpassword)
			{
			  echo "<center>Login Successfull..!! <br/>Redirecting you to HomePage! </br>If not Goto <a href='index.php'> Here </a></center>";
			  echo "<meta http-equiv='refresh' content ='3; url=index.php'>";
			 $_SESSION['pusername'] = $pusername;
			} else {
			$message = "Username and/or Password incorrect.";
  			echo "<script type='text/javascript'>alert('$message');</script>";
			  echo "<center>Redirecting you back to Login Page! If not Goto <a href='index.php'> Here </a></center>";
			  echo "<meta http-equiv='refresh' content ='1; url=index.php'>";
			}
		}else
			die("User not exist");
		
	}
	else
	header("location: index.php");
	?>

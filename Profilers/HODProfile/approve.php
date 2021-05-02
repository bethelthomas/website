<?php
  session_start();
 if ($_SESSION['husername']){
  }
   else {
	   header("location: index.php");
   }
?>
<!DOCTYPE html>
<html>
<head>
<!--favicon-->
        <link rel="shortcut icon" href="favicon.png" type="image/icon">
        <link rel="icon" href="favicon.png" type="image/icon">
        <meta http-equiv='refresh' content ='3; url=login.php'>
		</head>
		</html>
<?php
$id = $_POST["id"];
$dob = $_POST["DOB"];
$mysqli = new mysqli('remotemysql.com','NG73FMUEBv','AOMDJxJRXe','NG73FMUEBv');
		
		if($mysqli->connect_error) { die('Error'.('.$mysqli->connect_errno.').'$mysqli->connect_error');}
		else
		{
			echo "Connected to database";
		}

$sql = "UPDATE `basicdetails` SET Approve='1',ApprovalDate='$dob' where USN = '$id' ";
if(mysqli_query($mysqli,$sql))
{
echo "$id";
echo "\n";echo "\n";
echo "approved";
}
else 
{
echo "error:".mysqli_error($link);
}
 	
mysqli_close($link);
?>

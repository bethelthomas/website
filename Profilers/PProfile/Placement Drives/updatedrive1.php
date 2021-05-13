<?php
$mysqli = new mysqli('remotemysql.com','NG73FMUEBv','AOMDJxJRXe','NG73FMUEBv');
		
		if($mysqli->connect_error) { die('Error'.('.$mysqli->connect_errno.').'$mysqli->connect_error');}
		else
		{
			echo "";
		} // Selecting Database from Server
if(isset($_POST['submit']))
{ 
$usn = $_POST['usn'];
echo "$usn";
$name = $_POST['sname'];
$comname = $_POST['comname'];
$date = $_POST['Date'];
$attend = $_POST['Attendance'];
$wt = $_POST['WrittenTest'];
$gd = $_POST['GD'];
$tech = $_POST['Tech'];
$placed = $_POST['Placed'];
if($query = mysqli_query("INSERT INTO updatedrive(USN, Name, CompanyName, Date, Attendence, WT, GD, Techical, Placed)
		VALUES('$usn', '$name', '$comname', '$date', '$attend', '$wt', '$gd', '$tech', '$placed')"))
        {
                      echo "<center>Data Inserted successfully...!!</center>";
		}
		else
		{ 
	       echo "<center>FAILED</center>";
	    }
}
?>

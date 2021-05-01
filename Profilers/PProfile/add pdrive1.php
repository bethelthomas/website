<?php

$mysqli = new mysqli('localhost','root','','details');
if($mysqli->connect_error) { die('Error'.('.$mysqli->connect_errno.').'$mysqli->connect_error');}
else
{
	echo "Connected to database";
}
if(isset($_POST['submit']))
{ 
$cname = $_POST['compny'];
$date = $_POST['date'];
$campool = $_POST['campool'];
$poolven = $_POST['pcv'];
$per = $_POST['sslc'];
$puagg = $_POST['puagg'];
$beaggregate = $_POST['beagg'];
$back = $_POST['curback'];
$hisofbk = $_POST['hob'];
$breakstud = $_POST['break'];
$otherdet = $_POST['odetails'];
if($cname !=''||$date !='')
{
    if($query = mysqli_query("INSERT INTO addpdrive(CompanyName, Date, campusPool, poolcampusVenue, SSLCAgg, PUDIPLOMAgg, BEAgg, CurrentBacklogs, HistoryBacklogs, BreakStudies, otherDetails)
		VALUES ('$cname', '$date', '$campool', '$poolven', '$per', '$puagg', '$beaggregate', '$back', '$hisofbk', '$breakstud', '$otherdet')")){
                      echo "<center>Drive Inserted successfully</center>";
		}
		else die("FAILED");
}
}
?>
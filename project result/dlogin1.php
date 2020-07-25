<?php
$directorid=$_POST['directorid'];
$dpassword=$_POST['dpassword'];

$conn= new mysqli('localhost','root','','result');
if($conn->connect_error)
{
die('connection failed :' .$conn->connect_error);
}

$fi="SELECT * FROM director WHERE directorid='$directorid' AND dpassword='$dpassword'";
$rf=$conn->query($fi);
//$sid="SELECT directorid FROM director WHERE directorid='$directorid'";
//$rsid=$conn->query($sid);

if($rf->num_rows==1)  // if num_rows  is 1 then one student found from database.
	{
	echo"<form><marquee><h1>welcome<b><i> $directorid</i></b></h1></marquee></form>";
	include "ddash.html";
	}
else
       {

	echo"you are not director........";
	include "dlogin.html";
       } 
?>
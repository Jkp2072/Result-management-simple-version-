<?php
$studentid=$_POST['studentid'];
$spassword=$_POST['spassword'];

$conn= new mysqli('localhost','root','','result');
if($conn->connect_error)
{
die('connection failed :' .$conn->connect_error);
}

$fi="SELECT * FROM student WHERE studentid='$studentid' AND spassword='$spassword'";
$rf=$conn->query($fi);
//$sid="SELECT studentid FROM student WHERE studentid='$studentid'";
//$rsid=$conn->query($sid);

if($rf->num_rows==1)  // if num_rows  is 1 then one student found from database.
	{
	echo"<form><marquee><h1>welcome<b><i> $studentid</i></b></h1></marquee></form>";
	include "sdash.html";
	}
else
       {

	echo"you are not student........";
	include "slogin.html";
       } 
?>
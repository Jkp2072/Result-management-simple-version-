<?php
$facultyid=$_POST['facultyid'];
$password=$_POST['password'];
$conn= new mysqli('localhost','root','','result');
if($conn->connect_error)
{
die('connection failed :' .$conn->connect_error);
}
$fi="SELECT * FROM faculty WHERE facultyid='$facultyid' AND password='$password'";
$rf=$conn->query($fi);

if($rf->num_rows==1)  // if num_rows  is 1 then one faculty found from database.
	{
	echo"WELCOME $facultyid";
	include "fdash.html";
	}
else
       {

	echo"you are not faculty........";
       } 
?>
<?php
$studentid=$_POST['studentid'];
$spassword1=$_POST['spassword1'];
$spassword2=$_POST['spassword2'];
$conn=new mysqli('localhost','root','','result');
if($conn->connect_error)
{
die('connection failed : '.$conn->connect_error);
}

	
$sql = "UPDATE student SET spassword='$spassword2' WHERE studentid='$studentid' AND spassword='$spassword1'";

if($conn->query($sql)===true)
{      
echo"Password changed succesfully....";
include "sdash.html";
}
else
{
echo"error....";
}
?>
<html>
<body>
<?php
$studentid=$_POST['studentid'];
$spassword=$_POST['spassword'];
$conn=new mysqli('localhost','root','','result');
if($conn->connect_error)
{
die('connection failed : '.$conn->connect_error);
}
else
{
$sid="SELECT studentid FROM student WHERE studentid='$studentid'";
$rsid=$conn->query($sid);
if($rsid->num_rows==1)
{
echo"ALREADY EXISTS.....";

} 
else
{
$ins=$conn->prepare("INSERT INTO student(studentid,spassword)VALUES(?,?)");
$ins->bind_param("ss",$studentid,$spassword);
$ins->execute();
echo "Student is now registered....";
$ins->close();
$conn->close();
}}
?>
</br>
</br>
ENTER MORE STUDENTS : <form action="studentsi.html" align="center"><button type="submit" values="submit">Register</button></form>
</br>
</br>

<form action="sdisp.php" align="center"><button type="submit" value="submit">STUDENTS DATA</button></form>
</br></br>
<form action="login.html" align="right"><button type="submit" value="submit">Logout</button></form></br></br>
</body>
</html>
<html>
<body>
<?php
$facultyid=$_POST['facultyid'];
$password=$_POST['password'];
$conn=new mysqli('localhost','root','','result');
if($conn->connect_error)
{
die('connection failed : '.$conn->connect_error);
}
else
{
$fid="SELECT facultyid FROM faculty WHERE facultyid='$facultyid'";
$rfid=$conn->query($fid);
if($rfid->num_rows==1)
{
echo"ALREADY EXISTS.....";

} 
else
{
$ins=$conn->prepare("INSERT INTO faculty(facultyid,password)VALUES(?,?)");
$ins->bind_param("ss",$facultyid,$password);
$ins->execute();
echo "Faculty is now registered....";
$ins->close();
$conn->close();
}}
?>
</br>
</br>
ENTER MORE Faculty : <form action="facultysi.html" align="center"><button type="submit" values="submit">Register</button></form>
</br>
</br>

<form action="fdisp.php" align="center"><button type="submit" value="submit">Faculty DATA</button></form>
</br></br>
<form action="ddash.html" align="center"><button type="submit" value="submit">dashboard</button></form></br></br>
<form action="dlogin.html" align="right"><button type="submit" value="submit">Logout director</button></form></br></br>
</body>
</html>
<html>
<body>
<?php
$studentid=$_POST['studentid'];
$name=$_POST['name'];
$oot=$_POST['oot'];
$ss=$_POST['ss'];
$cn=$_POST['cn'];
$dbms=$_POST['dbms'];
$daa=$_POST['daa'];
$os=$_POST['os'];
$tc=$oot+$ss+$cn+$dbms+$daa+$os;
$a=6;
$cgpa=$tc/$a;

$con=new mysqli('localhost','root','','result');
if($con->connect_error)
	{
	die('connection failed : '.$con->connect_error);
	}
else
{

	$sid="SELECT studentid FROM student WHERE studentid='$studentid'";
	$rsid=$con->query($sid);
	if($rsid->num_rows==1)
		{
		echo"ALREADY EXISTS.....";
		} 
	else
	{
	$stmt=$con->prepare("INSERT INTO rdata(studentid,name,oot,ss,cn,dbms,daa,os,tc,cgpa)VALUES(?,?,?,?,?,?,?,?,?,?)");
	$stmt->bind_param("ssiiiiiiis",$studentid,$name,$oot,$ss,$cn,$dbms,$daa,$os,$tc,$cgpa);
	$stmt->execute();
	echo "Registration is done succesfully";

	$stmt->close();
	$con->close();
	}
}



?>
</br></br>
<form action="form.html" align="center">ENTER RESULT :<button type="submit" value="submit">Insert</button></form></br></br>
<form action="resdisp.php" align="center">RESULT :<button type="submit" value="submit">See Result</button></form></br></br>
<form action="login.html" align="right"><button type="submit" value="submit">Logout faculty</button></form></br></br>
</body>
</html>
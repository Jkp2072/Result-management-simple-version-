<html>
<head>
<title>result</title>
</head>
<body>
<h1 align="center">RESULT</h1>
<table align="center" border="2">
<tr>
<td>ID</td>
<td>Student Id</td>
<td>Name</td>
<td>Object Oriented Technology</td>
<td>System Software</td>
<td>Computer Network</td>
<td>Database Management System</td>
<td>Design And Analysis of Algorithm</td>
<td>Operating System</td>
<td>Total Credit</td>
<td>CGPA or average</td>
</tr>

<?php
$conn=new mysqli('localhost','root','','result');
if($conn->connect_error)
{
die('connection failed : '.$conn->connect_error);
}
$con="SELECT * from rdata";
$res=$conn->query($con);
if($res->num_rows>0)				// here num rows is used to check no of rows of output query.
	{
	while($row=$res->fetch_assoc())
	{
		echo "<tr>
			<td>".$row["id"]."</td>		
			<td>".$row["studentid"]."</td>
			<td>".$row["name"]."</td>
			<td>".$row["oot"]."</td>
			<td>".$row["ss"]."</td>
			<td>".$row["cn"]."</td>
			<td>".$row["dbms"]."</td>
			<td>".$row["daa"]."</td>
			<td>".$row["os"]."</td>
			<td>".$row["tc"]."</td>
			<td>".$row["cgpa"]."</td>
										
			</tr>";
		}	
	echo"</table>";
	}
		
?></br></br>
<form><table align="center" border="0"><tr><td>*NOTE :</td></tr>
					<tr>
					<td>1.</td><td>If Your Cgpa is Less <b>3.000</b> .pls consider <b><u>repeating the subject</u></b>.</td></tr>
					<tr><td>2.</td><td>If you attendace is <b>less than 60%</b> in respective subject,then your <b><u>credit will decrease by one(1.00)in the respective subject.</u></b></td>	
				</tr></table></form></br></br>
<form action="sdash.html" align="center"><button type="submit" value="submit">dashboard</button></form></br></br>
<form align="center"><button onClick="window.print()">Print</button></form></br></br>
<form action="slogin.html" align="right"><button type="submit" value="submit">Logout</button></form>

</body>
</html>
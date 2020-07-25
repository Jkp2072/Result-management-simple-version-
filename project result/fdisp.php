<html>
<head>
<title>faculty</title>
</head>
<body>
<h1>Faculties</h1>
<table align="center" border="2">
<tr>
<td>ID</td>
<td>Faculty Id</td>
<td>Password</td>
</tr>
<?php
$conn=new mysqli('localhost','root','','result');
if($conn->connect_error)
{
die('connection failed : '.$conn->connect_error);
}
$con="SELECT * from faculty";
$res=$conn->query($con);
if($res->num_rows>0)				// here num rows is used to check no of rows of output query.
	{
	while($row=$res->fetch_assoc())
	{
		echo "<tr>
			<td>".$row["id"]."</td>		
			<td>".$row["facultyid"]."</td>
			<td>".$row["password"]."</td>					
			</tr>";
		}	
	echo"</table>";
	}
		
?></br></br>

<form action="facultysi.html" align="center"><button type="submit" value="submit">REGISTER Faculty</button></form></br></br>
<form action="ddash.html" align="center"><button type="submit" value="submit">dashboard</button></form></br></br>
<form align="center"><button onClick="window.print()">Print</button></form></br></br>
<form action="dlogin.html" align="right"><button type="submit" value="submit">Logout director</button></form></br></br>

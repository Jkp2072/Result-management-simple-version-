<html>
<head>
<title>students</title>
</head>
<body>
<h1>Students</h1>
<table align="center" border="2">
<tr>
<td>ID</td>
<td>Student Id</td>
</tr>
<?php
$conn=new mysqli('localhost','root','','result');
if($conn->connect_error)
{
die('connection failed : '.$conn->connect_error);
}
$con="SELECT * from student";
$res=$conn->query($con);
if($res->num_rows>0)				// here num rows is used to check no of rows of output query.
	{
	while($row=$res->fetch_assoc())
	{
		echo "<tr>
			<td>".$row["id"]."</td>		
			<td>".$row["studentid"]."</td>
								
			</tr>";
		}	
	echo"</table>";
	}
		
?></br></br>
<form align="center"><button onClick="window.print()">Print</button></form></br></br>
<form action="ddash.html" align="center"><button type="submit" value="submit">dashboard</button></form></br></br>
<form action="dlogin.html" align="right"><button type="submit" value="submit">Logout Director</button></form></br></br>

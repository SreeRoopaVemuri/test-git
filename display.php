<html>
<head>
<title>Display Records</title>
</head>
<body>
<table border ="2" cellspacing="7">
<tr>
<th> First Name</th>
<th>Last Name</th>
<th>Roll No</th>
<th>Email Adress</th>
<th colspan="2" align="center" >Operations</th>
</tr>

<?php
include("connection.php");
error_reporting(0);
$query = "select * from employee" ;
$data = mysqli_query($conn,$query);
$total = mysqli_num_rows($data);

echo $result['firstname']. " " .$result['lastname']." ". $result['rollno'];

if($total !=0)
{
	$result = mysqli_fetch_assoc($data);
	
	While($result=mysqli_fetch_assoc($data))
	{
		echo "
		<tr>
		<td>".$result['firstname']."</td>
		<td>".$result['lastname']."</td>
		<td>".$result['rollno']."</td>
		<td>".$result['email']."</td>
		<td><a href='update.php?fn=$result[firstname]&ln=$result[lastname]&rn=$result[rollno]&em=$result[email]'>Update</td>
		<td><a href='delete.php?rn= $result[rollno]' onclick='return checkdelete()' >Delete</td>
		</tr>
		";
	}
	
	//echo "table has records";

}
else{
	echo"no records found";
}

?>
</table>
<script>
function checkdelete()
{
	return confirm('Are you sure you want to delete this record?');
}
</script>
</body>
</html>
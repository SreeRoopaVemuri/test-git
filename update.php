<?php
include("connection.php");
error_reporting(0);
$fn=$_GET['fn'];
$ln=$_GET['ln'];
$rn=$_GET['rn'];
$em=$_GET['em'];

?>

<html>
<head>
<title> Update Form</title> 
<style>
table
{
color:white;
background-color:black;
border-radius:30px;
}
#button
{
background-color: green;
color:white;
height:25px;
border-radius:25px;
}
</style>
</head>
<form action="" method="GET">
<body background="bg.jpg"> 
<br><br><br><br><br><br><br>
<table align="center" border="0" cellspacing="15" >
<tr><td>First Name<td><input type="text" value="<?php echo "$fn" ?>" name="firstname" required></td></tr>
<tr><td>Last Name<td> <input type="text"value="<?php echo "$ln" ?>"name="lastname" required></td> </tr>
<tr><td>Roll Number<td> <input type="text" value="<?php echo "$rn" ?>" name="rollno" required></td> </tr>
<tr><td>Email Adress<td> <input type="text" value="<?php echo "$em" ?>" name="email" required></td></tr>
<tr><td align="center" colspan="2">
<input type="submit" id="button name="submit" value= "Update Details"></td>
</tr>
</form>

</table>
</body>
</html>

<?php

if($_GET['submit'])
{
	$first = $_GET['firstname'];
	$last = $_GET['lastname'];
	$roll = $_GET['rollno'];
	$ema = $_GET['email'];
	$query= "UPDATE EMPLOYEE SET firstname='$first',lastname='$last',rollno='$roll',email='$ema' WHERE rollno='$roll'";
	
	$data= mysqli_query($conn,$query);
	
if($data)
	{
	echo "<script>alert('Record Updated')</script>";

	
	}
else 
{
    echo" failed to update";	
}
	}
	
?>
	

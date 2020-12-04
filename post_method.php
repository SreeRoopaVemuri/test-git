<?php
include("connection.php");
error_reporting(0);
?>
<html>
<head>
<title> Signup Form</title> 
<style>
table
{
color:white;
background-color:black;
border-radius:30px;
}
#btn
{
background-color: green;
color:white;
height:25px;
border-radius:25px;
}
</style>
</head>
<form action="" method="POST">
<body background="bg.jpg"> 
<br><br><br><br><br><br><br>
<table align="center" border="0" cellspacing="15" >
<tr><td>First Name<td><input type="text"  placeholder="First Name" name="firstname"></td></tr>
<tr><td>Last Name<td> <input type="text"placeholder="Last Name" name="lastname"></td> </tr>
<tr><td>Roll Number<td> <input type="text"placeholder="Roll Number"name="rollno"></td> </tr>
<tr><td>Email Adress<td> <input type="text" placeholder="Email Adress" name="email"></td></tr>
<tr><td>Password<td> <input type="text" placeholder="Password"name="password"></td></tr>
<tr><td>Confirm Password<td> <input type="text" placeholder="Confirm Password" name="conpass"></td></tr>
<tr><td align="center" colspan="2">
<input type="submit" value="Submit" id="btn" name="button"></td>
</tr>
</form>
</table>
</body>
</html>
<?php

$fn=$_POST['firstname'];
$ln=$_POST['lastname'];
$rn=$_POST['rollno'];
$em=$_POST['email'];
$ps=$_POST['password'];
$cp=$_POST['conpass'];
/*echo "$fn";
echo "$ln";
echo "$rn";
echo "$em";
echo "$ps";
echo "$cp";*/
if($fn!=""&$ln !=""&$rn!=""&$em!=""&$ps!=""&$cp!="")
{
$query= "INSERT INTO EMPLOYEE VALUES('$fn', '$ln', '$rn','$em','$ps','$cp')";
$data=mysqli_query($conn,$query);


if($data)
{
	echo"data inserted";
}
}
else
{
	echo"failed to insert";

}


?>
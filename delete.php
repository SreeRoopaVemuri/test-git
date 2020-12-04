

<?php
include("connection.php");
error_reporting(0);
$rollno=$_GET['rn'];
$query = "DELETE FROM EMPLOYEE WHERE ROLLNO= '$rollno'";
$data=mysqli_query($conn,$query);
if($data)
{
	echo "<script>alert('Record Deleted from Database')</script>";
}
?>
<META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost:8080/project1/display.php ">



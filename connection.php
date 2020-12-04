<?php
$servername ="localhost";
$username ="root";
$password ="";
$dbname ="mrcet";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if($conn)
{
	//echo "Connection Established";
}
else
{
	echo "Connection Failed".mysqli_connect_error();
}
?>
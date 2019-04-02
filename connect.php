<?php 
function input_data($data)
{
	# code...
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

$server = "localhost";
$username = "root";
$password = "";
$database = "emc";


$conn = mysqli_connect($server, $username, $password, $database);
if (!$conn) {
	# code...\
	echo "not Connected!";
}



 ?>
<?php
// Include config file
require_once 'config.php';

// Define variables and initialize with empty values
$desc =   input_data($_POST["about"]);



$sql = "UPDATE `about_info` SET `description`='$desc' WHERE `id`=1";
// var_dump($sql);
$retval = mysqli_query( $conn, $sql  );

   if(!$retval ) {

   }
  header("location: about.php");
   mysqli_close($conn);


?>

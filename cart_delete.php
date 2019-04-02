<?php
// Include config file
include('connect.php');
$id =  input_data($_GET["id"]);

$sql = "DELETE FROM `order_info` WHERE order_id = $id";
// var_dump($sql);
$result = mysqli_query( $conn, $sql  );

   if(! $retval ) {

   }
   header("location:cart.php");
   mysqli_close($sql);

?>

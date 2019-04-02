<?php
// Include config file
include('config.php');
$id =  input_data($_GET["id"]);

$sql = "DELETE FROM `product_info` WHERE id = $id";
// var_dump($sql);
$result = mysqli_query( $conn, $sql  );

   if(! $retval ) {

   }
   header("location:products.php");
   mysqli_close($sql);

?>

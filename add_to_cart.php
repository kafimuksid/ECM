<?php
session_start();
if(empty($_SESSION["username"])){
   
    echo "You need to be logged in for this action <br>";
    echo "<a href='index.php'>Go home</a>";
  }

else{
	include("connect.php");
	$id = $_GET['id'];

	$sql= "SELECT * FROM `product_info` WHERE `id` = '$id'";

     $result = mysqli_query($conn,$sql);
     $row=$result->fetch_assoc();


     $member_email = $_SESSION['username'];
     $product_names = $row['title'];
     $product_price = $row['price'];

     $sql1="INSERT INTO `order_info`(`member_email`, `product_names`, `product_price`,`status`) VALUES ('$member_email','$product_names','$product_price',0)";
     

     $result1 = mysqli_query($conn,$sql1);

     header("location:index.php");
     

 }




 
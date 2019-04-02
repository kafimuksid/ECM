<?php 

require_once("config.php"); 

$title = input_data($_POST['title']);

$about = input_data($_POST['about']);

$price = input_data($_POST['price']);


$quantity = input_data($_POST['quantity']);

$info = pathinfo($_FILES['img']['name']);
$ext = $info['extension']; // get the extension of the file


$target = 'images/'.basename($_FILES["img"]["name"]);
move_uploaded_file( $_FILES['img']['tmp_name'], $target);


$sql = "INSERT INTO `product_info`(`title`, `image`, `about`, `price`, `quantity`) VALUES ('$title','$target','$about','$price','$quantity')";

$result= mysqli_query($conn,$sql);

header('location:products.php');











 ?>
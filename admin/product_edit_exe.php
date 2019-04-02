<?php
require_once 'config.php';
$id =   input_data($_GET["id"]);

$title = input_data($_POST['title']);

$about = input_data($_POST['about']);

$price = input_data($_POST['price']);


$quantity = input_data($_POST['quantity']);
    $check = getimagesize($_FILES["img"]["tmp_name"]);
    if($check !== false) {
      		$info = pathinfo($_FILES['img']['name']);
			$ext = $info['extension']; // get the extension of the file


			$target = 'images/'.basename($_FILES["img"]["name"]);
			move_uploaded_file( $_FILES['img']['tmp_name'], $target);


			$sql="UPDATE `product_info` SET `title`='$title',`image`='$target',`about`='$about',`price`='$price',`quantity`='$quantity' WHERE `id`='$id' ";

			$result= mysqli_query($conn,$sql);

			header('location:products.php');  
    } else {
        $sql="UPDATE `product_info` SET `title`='$title', `about`='$about',`price`='$price',`quantity`='$quantity' WHERE `id`='$id' ";

		$result= mysqli_query($conn,$sql);

		header('location:products.php');
    }






?>
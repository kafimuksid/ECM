<?php 
include('connect.php');  
$spanx = "";
session_start();
if(empty($_SESSION["username"])){
   
    $spanx = "<a href='login.php'>Login</a>|<a href='register.php'>Register</a> ";
  }

else{
  
  
   $email =  $_SESSION["username"];
   $pass = $_SESSION["password"] ;
   $spanx = "<a href='logout.php'>Logout</a> ";
  
  

}


   


?>



<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Heroic Features - Start Bootstrap Template</title>


    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">

    

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg bg-light fixed-top" id="navbar">
      <div class="container">
        <img src="image/1.jpg" alt="logo" class="logo_123">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.php">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="products.php">Products</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php">Contact</a>
            </li>
            <li class="nav-item">
             <a class="nav-link" href="cart.php"><img src="image/cart.png" alt="cart.png" class="logo_123"></a>
            </li>
             <li class="nav-item">
             <span><?php echo $spanx;?></span>
            </li>
          </ul>
        </div>
      </div>
    </nav>
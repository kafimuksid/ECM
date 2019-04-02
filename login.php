<?php
if(isset($_POST["submit"])){
include('connect.php');
$email = input_data($_POST['email']);
$pass = input_data($_POST['pass']);	
$sql="SELECT * FROM `utable` WHERE `email`= '$email' and `pass`='$pass'";
$result=mysqli_query($conn, $sql);
$count=mysqli_num_rows($result);
if ($count == 1) {


  if($email=='saminsharar2@gmail.com'  && $pass='root'){
  
  $_SESSION["username"] = $email;
  $_SESSION["password"] = $pass;
  header("location:admin/index.php");
  session_start();	
  }
  else{
  session_start();
  $_SESSION["username"] = $email;
  $_SESSION["password"] = $pass;
  header("location:index.php");
}

} else {
  echo "Wrong Username or Password";
}

}

?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<link rel="stylesheet" href="http://bootswatch.com/yeti/bootstrap.min.css">
	<link rel="stylesheet" href="style.css">
	<link href="favicon.ico" rel="shortcut icon" type="image/x-icon"/>
  </head>
  <body>
	<center>
		<div class="login">
			<h1 class="loginheading">Login</h1>
			<form method="POST">
					<div>
						<label>Email</label>
						<input type="email" class="form-control" name="email" id="email" >
					</div>
					<div>
						<label>Password</label>
						<input type="password" class="form-control" name="pass" id="pass">
					</div>
					<br>
				<button type="submit" name="submit" class="btn btn-default">Submit</button>
				<p class="loginbottomtext">Still don't have an account? <a href="register.php">Register</a></p>
				<p class="loginbottomtext">Wanna go back? <a href="index.php">Home</a></p>
			</form>
			<!-- ©©© COPYRIGHT ©©©--><p class="text-muted loginbottomtext">© SSN</p> 
		</div>
	</center>
  </body>
</html>
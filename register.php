<?php

require_once("connect.php");

$error = '';
function input_data($data)
{
	# code...
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

if(isset($_POST['submit']))
{


$name   = input_data($_POST['name']);
$email  = input_data($_POST['email']);
$pass   = input_data($_POST['password']);
$rpass  = input_data($_POST['password_confirmation']);
$phone  = input_data($_POST['phone']);
$address = input_data($_POST['add']);
$city = input_data($_POST['city']);

if ($pass != $rpass) {
	# code...
	$error = "Password doesn't match";
	
}

else if (empty($name) || empty($email) || empty($pass) || empty($rpass) ) {
	# code...
	$error = "Fill all the credential";
	
}

else{

	$sql = "INSERT INTO `utable`( `name`, `email`, `pass`, `address`, `phone`, `city`, `status`) VALUES ('$name','$email','$pass','$phone','$address','$city',TRUE)";
	if(mysqli_query($conn, $sql)){
    echo "Records inserted successfully.";
    header("location:index.php");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

}




}



?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
<link href="register.css" rel="stylesheet">
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
</head>
<body>
<span><strong><?php echo $error; ?></strong></span>
<div class="container">
        <div class="row centered-form">
        <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
        	<div class="panel panel-default">
        		<div class="panel-heading">
			    		<h3 class="panel-title">Please sign up here <small>It's free!</small></h3>
			 			</div>
			 			<div class="panel-body">

			    		<form method="POST">
			    			
			    				
			    			<div class="form-group">
			                <input type="text" name="name" id="name" class="form-control input-sm" placeholder="Full Name">
			    			</div>
			    				
			    			
			    				
			    				
			    			

			    			<div class="form-group">
			    				<input type="email" name="email" id="email" class="form-control input-sm" placeholder="Email Address">
			    			</div>

			    			<div class="row">
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="password" name="password" id="password" class="form-control input-sm" placeholder="Password">
			    					</div>
			    				</div>
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-sm" placeholder="Confirm Password">
			    					</div>
			    				</div>
			    			</div>

			    			<div class="form-group">
			                <input type="text" name="phone" id="phone" class="form-control input-sm" placeholder="Phone Number">
			    			</div>

			    			<div class="form-group">
			                <input type="textarea" name="add" id="add" class="form-control input-sm" placeholder="Address">
			    			</div>

			    			<div class="form-group">
			                <input type="text" name="city" id="city" class="form-control input-sm" placeholder="city">
			    			</div>
			    			
			    			<button type="submit" name="submit" class="btn btn-info btn-block">Register</button>
			    			<!-- <input type="submit" value="Register" class="btn btn-info btn-block">-->
			    				

								

			    				 
						</form>
						<p class="loginbottomtext">Wanna go Back to Login| <a href="index.php">Login</a></p>
			    		</div>
			    		
			    	</div>
	    		</div>
    		</div>
    	</div>
</body>
</html>



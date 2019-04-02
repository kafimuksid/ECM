<?php

require_once('config.php');

$description = input_data($_POST['about']);


$sql = "UPDATE `contact_info` SET `description`='$description'   WHERE   `id`=1";

$result = mysqli_query($conn,$sql);

header("location:contacts.php");

?>
<?php

session_start();
///header('location:login.php');

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con, 'empleo');

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$password = $_POST['password'];

$s = " select * from user where email = '$email'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
  echo file_get_contents("../templates/error.php");
}
else
{
  $reg = " insert into user(first_name, last_name, email , password) values('$first_name', '$last_name','$email','$password')";
  mysqli_query($con, $reg);
  echo file_get_contents("../templates/registered.php");
}

 ?>

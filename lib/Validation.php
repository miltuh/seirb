<?php

session_start();

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con, 'empleo');

$email = $_POST['email'];
$password = $_POST['password'];

$s = " select * from user where email = '$email' && password = '$password'";

$result = mysqli_query($con, $s);
$user = mysqli_fetch_assoc($result);
$num = mysqli_num_rows($result);

if($num == 1){
$_SESSION['user_id'] = $user['id'];
    header('location:../index.php');
}
else
{
  header('location:../templates/login-error.php');
}

 ?>

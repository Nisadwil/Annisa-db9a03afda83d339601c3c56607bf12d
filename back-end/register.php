<?php

session_start();
header('location:register.html');

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con, 'test');

$name = $_POST['username'];
$pass = $_POST['password'];
$re_pass = $_POST['re_password'];

$s = "SELECT * from register where name = '$name'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1 || $pass != $re_pass){
  header('location:register.html');
}
else{
  $reg = "INSERT INTO `register` (`name`, `password`) VALUES ('$name', '$pass')";
  mysqli_query($con, $reg);
  header('location:login.html');
}
    ?>
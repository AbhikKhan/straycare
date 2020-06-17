<?php

session_start();

$con = mysqli_connect('localhost', 'root', '');
mysqli_select_db($con, 'register');

$fname = $_POST['fname'];
$lname = $_POST['lname'];

$email = $_POST['email'];
$pass = $_POST['password'];
$cnfpass = $_POST['cnfpassword'];

$s = "select * from usertable where email = '$email'";

$res = mysqli_query($con, $s);
$num = mysqli_num_rows($res);

if($num==1){
  echo"Email is already registered";
}
else if(empty($email)){
  echo"Email Field is Required";
}
else if($pass!=$cnfpass){
  echo"Enter the password correctly";
}
else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  echo"Invalid email format";
}
else{
  $reg = "insert into usertable values('$fname', '$lname', '$email', '$pass')";
  mysqli_query($con, $reg);
  header('location:login.php');
}
//session_destroy();
?>

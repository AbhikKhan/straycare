<?php

  session_start();

  $con = mysqli_connect('localhost', 'root', '');
  mysqli_select_db($con, 'register');

  $email = $_POST['email'];
  $pass = $_POST['password'];

  $s = "select * from usertable where email = '$email' && pass = '$pass'";

  $res = mysqli_query($con, $s);
  $num = mysqli_num_rows($res);

  if($num==1){
    $row = $res->fetch_assoc();
    $_SESSION['username'] = $row['fname'];
    $_SESSION['last'] = $row['lname'];
    $_SESSION['email'] = $row['email'];
    $_SESSION['password'] = $row['pass'];
    header('location:/Home/index.php');
  }
  else {
    header('location:login.php');
    //echo"<script>alert('Enter the credentials correctly')</script>";

  }

?>

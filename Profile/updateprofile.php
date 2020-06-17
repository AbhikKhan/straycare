<?php
  session_start();

  $con = mysqli_connect('localhost', 'root', '');
  mysqli_select_db($con, 'register');

  $fname = $_POST['fname'];
  $lname = $_POST['lname'];

  $email = $_SESSION['email'];
  $pass = $_POST['password'];

  $querry = "select * from usertable where email = '$email' && pass = '$pass'";
  $res = mysqli_query($con, $querry);
  $num = mysqli_num_rows($res);

  if($num==1){
    if($_SESSION['username']!=$fname || $_SESSION['lname']!=$lname){
      $s = "UPDATE usertable SET fname='$fname', lname='$lname' WHERE email='$email'";
      $result = mysqli_query($con, $s);
      if(isset($result)){
        //echo $fname . $lname . $email;
        echo " Profile Updated";
      }

      $querry = "select * from usertable where email = '$email' && pass = '$pass'";
      $res = mysqli_query($con, $querry);

      $row2 = $res->fetch_assoc();
      $_SESSION['username'] = $row2['fname'];
      $_SESSION['last'] = $row2['lname'];

    }
    header('location:/Home/Profile/profile.php');

    // $num = mysqli_num_rows($res);
  }
  else{
    echo "Password Mismatch.";
  }

 ?>

<?php

session_start();
if(isset($_SESSION['username'])){
  echo"You are already registered.";
  header('location:/Home/index.php');
}
 ?>



<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Register</title>
  <!-- <link rel="stylesheet" type="trxt/css" href="/Home/main.css"> -->
<link rel="stylesheet" href="style.css?v=<?php echo time();?>" type="text/css">
</head>

<body>

  <header>
    <nav>
      <ul class="show-desktop hide-mobile" id="nav">
        <li><a href="/Home/index.php">Home</a></li>
        <li><a href="/Home/Upload/upload.php">Add Stray</a></li>
        <li><a href="/Home/Login/login.php">Log in</a></li>
      </ul>
    </nav>
  </header>

  <div class="registerbox">
    <h1>Register</h1>
    <form class="" action="registration.php" method="post">

      <div class="name">
        <label for="fname">First Name : </label>
        <input type="text" placeholder="First Name" name="fname">
        <label for="lname">Lirst Name : </label>
        <input type="text" placeholder="Last Name" name="lname">
      </div>

      <label for="email">Email address :</label>
      <input type="text" placeholder="email address" name="email">

      <label for="password">Password : </label>
      <input type="password" placeholder="Password" name="password">

      <label for="cnfpassword">Confirm Password : </label>
      <input type="password" placeholder="Confirm Password" name="cnfpassword">

      <!--
      <nav>
        <p>Are you connected with any N.G.O ?</p>
        Yes: <input type="radio" name="ngo" value="yes">
        No: <input type="radio" name="ngo" value="no">
      </nav>
      -->

      <p>By clicking register button you agree to our <a href="#">Terms & Condition</a> .</p>
      <input type="submit" value="Register" name="">

    </form>

  </div>
</body>

</html>

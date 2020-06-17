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
  <title>User Login</title>
  <!-- <link rel="stylesheet" type="trxt/css" href="/Home/main.css"> -->
<link rel="stylesheet" href="style.css?v=<?php echo time();?>" type="text/css">
</head>

<body>

  <header>
    <nav>
      <ul class="show-desktop hide-mobile" id="nav">
        <li><a href="/Home/index.php">Home</a></li>
        <li><a href="/Home/Upload/upload.php">Add Stray</a></li>
        <li><a href="/Home/Login/register.php">Register</a></li>
        <!-- <li ><a href="/Home/Login/logout.php"> Log out</a></li> -->
      </ul>
    </nav>
  </header>

  <div class="loginbox">
    <form class="" action="validation.php" method="post">
      <h1>Login</h1>
      <input type="text" class="inputuser" placeholder="Username" name="email">
      <input type="password" class="inputuser" placeholder="Password" name="password">
      <input type="submit" value="Login" name="">
      <br>
      <a class="forgot" href="#">Forgot Password?</a>
      <p>Not an user?<a href="register.php">Register.</a></p>
    </form>
  </div>
</body>

</html>

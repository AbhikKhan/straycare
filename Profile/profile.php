<?php

  session_start();
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Profile</title>
    <link rel="stylesheet" href="/Home/Profile/profile.css?v=<?php echo time();?>" type="text/css">
  </head>

  <body>
    <header>
      <nav>
        <ul class="show-desktop hide-mobile" id="nav">
          <li><a href="/Home/index.php">Home</a></li>
          <li><a href="/Home/Upload/upload.php">Add Stray</a></li>
          <li><a href="/Home/Upload/yourupload.php">Your Upload</a></li>
          <li ><a href="/Home/Login/logout.php"> Log out</a></li>
        </ul>
      </nav>
    </header>

    <div class="box">
      <h2>Personal Details</h2>
      <form class="details" action="updateprofile.php" method="post">
        <div class="detail name">
          <label for="fname">First Name :</label>
          <input type="text" name="fname" value=" <?php
            echo $_SESSION['username'];
           ?> ">
        </div>

        <div class="detail name">
          <label for="lname">Last Name :</label>
          <input type="text" name="lname" value=" <?php
            echo  $_SESSION['last'];
           ?> ">
        </div>

        <div class="detail email">
          <label for="email">Email :</label>
          <p name="email"><?php echo $_SESSION['email']; ?></p>
        </div>

        <p class="paragraph">Input password and click Update to update information.</p>
        <input type="password" name="password" value="" placeholder="Password"><br>
        <input type="submit" name="update" value="Update">

      </form>
  </div>

  </body>
</html>

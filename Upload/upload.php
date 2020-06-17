<?php

  session_start();
  if(!isset($_SESSION['username'])){
   header('location:/Home/Login/login.php');
  }

 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" type="trxt/css" href="/Home/main.css">
<link rel="stylesheet" href="uploadstyle.css?v=<?php echo time();?>" type="text/css">
  <title></title>
</head>

<body>

<!-- header -->
  <header>
    <nav>
      <ul class="show-desktop hide-mobile" id="nav">
        <li><a href="/Home/index.php">Home</a></li>
        <li><a href="/Home/Upload/yourupload.php">Your Upload</a></li>
        <li><a href="/Home/Profile/profile.php">Profile</a></li>
        <li ><a href="/Home/Login/logout.php"> Log out</a></li>
      </ul>
    </nav>
  </header>

<!-- header -->

  <nav class="uploadbox">
    <h1>Stray Data</h1>

    <form class="" action="dbconfig.php" method="post" enctype="multipart/form-data">

      <div class="stray stray_under">
        <label class="condition">Stray under observation of : </label>
        <input type="radio" class='radio' name="status1" value="Yes">
        <label for="ngo">NGO</label>
        <input type="radio" class='radio' name="status1" value="No">
        <label for="none">None</label>
      </div>

      <div class="stray stray_catagory">
        <label class="condition">Species: </label>
        <input type="radio" class='radio' name="status2" value="Dog">
        <label for="catagory1">Dog</label>
        <input type="radio" class='radio' name="status2" value="Cat">
        <label for="catagory2">Cat</label>
        <!-- <input type="radio" class='radio' id="catagory3" name="status2">
        <label for="catagory3">Others</label> -->
      </div>

      <div class="stray stray_name">
        <label class="condition">Name : </label>
        <input type="text" name="name" placeholder="Name">
      </div>

      <div class="stray stray_age">
        <label class="condition">Age : </label>
        <input type="number" name="old" value="" placeholder="Age">
        <input type="radio" class='radio' name="status3" value="Day">
        <label for="days">Day</label>
        <input type="radio" class='radio' name="status3" value="Month">
        <label for="months">Month</label>
        <input type="radio" class='radio' name="status3" value="Year">
        <label for="years">Year</label>
      </div>

      <div class="stray stray_species">
        <label class="condition">Breed(if known) : </label>
        <input type="text" name="species" value="" placeholder="Species">
      </div>

      <div class="stray stray_area">
        <label for="area">Locality : </label>
        <input type="text" name="area" value="" placeholder="Locality">
      </div>
      <div class="stray stray_city">
        <label for="city">City : </label>
        <input type="text" name="city" value="" placeholder="City">
      </div>
      <div class="stray stray_dist">
        <label for="dist">District : </label>
        <input type="text" name="dist" value="" placeholder="District">
      </div>

      <div class="stray stray_pin">
        <label for="pin">Postal Code : </label>
        <input type="text" name="pin" value="" placeholder="PIN">
      </div>

      <div class="stray stray_vaxin">
        <label class="vaccin">Vaccinated: </label>
        <input type="radio" class='radio' name="status5" value="Yes">
        <label for="yes">Yes</label>
        <input type="radio" class='radio' name="status5" value="No">
        <label for="no">No</label>
      </div>

      <div class="stray stray_train">
        <label class="vaccin">Trained: </label>
        <input type="radio" class='radio' name="status4" value="Yes">
        <label for="yes">Yes</label>
        <input type="radio" class='radio' name="status4" value="No">
        <label for="no">No</label>
      </div>

      <!-- <div class="stray stray_condition">
        <label class="condition">Condition: </label>
        <input
         type="radio" class='radio' id="good" name="status4">
        <label for="good">Good</label>
        <input type="radio" class='radio' id="inj" name="status4">
        <label for="inj">Injured</label>
        <input type="radio" class='radio' id="sick" name="status4">
        <label for="sick">Sick</label>
      </div> -->

      <div class="stray stray_image">
        <label class="condition">Image: </label>
        <input type="file" name="image">
      </div>

      <div class="stray stray_des">
        <label class="condition">Description: </label>
        <input type="text" name="des" placeholder="Appearence">
      </div>

      <input type="submit" name="submit" value="Upload">
    </nav>
  </form>

</body>

</html>

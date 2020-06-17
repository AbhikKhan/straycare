<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>home</title>
  <link rel="stylesheet" href="main.css" type="text/css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
  <div class="container">
    <header>

      <img src="images/icon2.png" class="icon">
      <h2>StrayCare</h2>

      <nav>
        <a href="#" class="hide-desktop">
          <img src="images/ham.svg" alt="" class="menu" id="menu"></a>
        <ul class="show-desktop hide-mobile" id="nav">
          <li id="exit" class="hide-desktop exit-btn"><img src="images/exit.svg" alt=""></li>
          <li><a href="/Home/index.php">Home</a></li>
          <li><a href="#">About</a></li>
          <li><a href="Upload/upload.php">Add Stray</a></li>
          <?php
            session_start();
            if(!isset($_SESSION['username'])){
              echo "<li ><a href=\"Login/login.php\">Log in</a></li>";
            }
            else{
              echo "<li ><a href=\"Profile/profile.php\"> Profile</a></li>";
              echo "<li ><a href=\"Login/logout.php\"> Log out</a></li>";
            }
           ?>
        </ul>
      </nav>

    </header>

    <section>
      <div class="slidershow middle">
        <div class="slides">
          <input type="radio" name="r" id="r1" checked>
          <input type="radio" name="r" id="r2">
          <input type="radio" name="r" id="r3">
          <div class="slide s1">
            <img src="images/img1.jpg" alt="">
          </div>
          <div class="slide">
            <img src="images/img2.jpeg" alt="">
          </div>
          <div class="slide">
            <img src="images/img3.jpg" alt="">
          </div>
        </div>
        <div class="navigation">
          <label for="r1" class="bar"></label>
          <label for="r2" class="bar"></label>
          <label for="r3" class="bar"></label>
        </div>
      </div>
  </div>
  <div class="animation_text">
    <span class="text1">Do<br>You Care?</span>
    <span class="text2">We do.</span>
  </div>
  </section>

  </div>

  <div class="information">
    <div class="container">
      <ul>
        <li>
          <h1>Adopt</h1>
          <img src="images/cat.jpg" alt="Adopt">
          <p>Visit with our pets ready for adoption. Come meet your perfect match today!</p>
          <input type="submit" value="Learn More" name="" class="button">
        </li>
        <li>
          <h1>Foster</h1>
          <img src="images/dog1.jpeg" alt="Foster">
          <p>Without fostering, there can be no rescue.</p>
          <input type="submit" value="Learn More" name="" class="button">
        </li>
        <li>
          <h1>Donate</h1>
          <img src="images/donate.jpg" alt="Donate">
          <p>Every little bit counts! Your genereous donation helps animals most in need.</p>
          <input type="submit" value="Learn More" name="" class="button">
        </li>
      </ul>
    </div>
  </div>
  <div class="cards">
    <h2>Some of Our Adorable Stray</h2>

    <?php

        $dbc = mysqli_connect('localhost','root','','register')or die("BAD CONNECT".mysqli_connect_error());

        $sql="SELECT * FROM petdata ";
        $result=mysqli_query($dbc,$sql) or die ("BAD QUERY");
        while($row =mysqli_fetch_assoc($result)){
          echo"<div class=\"card\">
            <div class=\"image\">
              <img src=\"/Home/Upload/Picture/" . $row['image'] . "\">
            </div>
            <div class=\"details\">
              <h4 class='card-title'>" . $row['name'] . "</h4>
              <p class=\"card-age\">Age:" .$row['age'] . "</p>
              <p class=\"card-breed\">Breed:". $row['species'] . "</p>
              <br>
              <a href=\"details.php?ID=". $row['id'] ."\">
                <input type=\"button\" value=\"Details\">
              </a>
              <a href=\"/Home/contract/contract.php?ID=". $row['id']."\">
                <input type=\"button\" value=\"Adopt\">
              </a>
            </div>
          </div>";
         }

        ?>
    <!-- <div class="card">
      <div class="image">
        <img src="images/card1.jpg" alt="">
      </div>
      <div class="details">
        <h4 class='card-title'>Yoda</h4>
        <p class="card-age">Age: 5 Years</p>
        <p class="card-breed">Breed: Stray</p>
        <br>
        <a href="details.php?ID=1">
          <input type="button" name="" value="Details">
        </a>
        <a href="/Home/Contract Form/contract.php">
          <input type="button" name="" value="Adopt">
        </a>
      </div>
    </div>

    <div class="card">
      <div class="image">
        <img src="https://res.cloudinary.com/petfinder/image/upload/v1568260402/ju4itqaejpjlojqrjz59.jpg" id="cardImg" class="card-img" alt="...">
      </div>
      <div class="details">
        <h4 class='card-title'>Rocky</h4>
        <p class="card-age">Age: 3 Years</p>
        <p class="card-breed">Breed: Unknown</p>
        <br>
        <a href="details.php?ID=2">
          <input type="button" name="" value="Details">
        </a>
        <a href="/Home/Contract Form/contract.php">
          <input type="button" name="" value="Adopt">
        </a>
      </div>
    </div>

    <div class="card">
      <div class="image">
        <img src="https://res.cloudinary.com/petfinder/image/upload/v1568125594/tjcsjcjl36qrkulpnw4g.jpg" id="cardImg" class="card-img" alt="...">
      </div>
      <div class="details">
        <h4 class='card-title'>Liana</h4>
        <p class="card-age">Age: 3 Years</p>
        <p class="card-breed">Breed: Pug</p>
        <br>
        <a href="details.php?ID=3">
          <input type="button" name="" value="Details">
        </a>
        <a href="/Home/Contract Form/contract.php">
          <input type="button" name="" value="Adopt">
        </a>
      </div>
    </div>

    <div class="card">
      <div class="image">
        <img src="https://res.cloudinary.com/petfinder/image/upload/v1568257391/ntik0m53f7ssupsccveu.jpg" id="cardImg" class="card-img" alt="...">
      </div>
      <div class="details">
        <h4 class='card-title'>Jack</h4>
        <p class="card-age">Age: 2 Years</p>
        <p class="card-breed">Breed: Unknown</p>
        <br>
        <a href="details.php?ID=4">
          <input type="button" name="" value="Details">
        </a>
        <a href="/Home/Contract Form/contract.php">
          <input type="button" name="" value="Adopt">
        </a>
      </div>
    </div>

    <div class="card">
      <div class="image">
        <img src="https://res.cloudinary.com/petfinder/image/upload/v1567306475/evbgbs74pwo77qonk7ol.jpg" id="cardImg" class="card-img" alt="...">
      </div>
      <div class="details">
        <h4 class='card-title'>Ricky</h4>
        <p class="card-age">Age: 1 Years</p>
        <p class="card-breed">Breed: Unknown</p>
        <br>
        <a href="details.php?ID=5">
          <input type="button" name="" value="Details">
        </a>
        <a href="/Home/Contract Form/contract.php">
          <input type="button" name="" value="Adopt">
        </a>
      </div>
    </div> -->

  </div>

  <div class="container">
    <h2>Are you looking for a new companion?</h2>
    <p>Get Started by Registering in our Website. <a href="Login/register.php" class="reg">Register</a></p>
  </div>

  <footer>
    <div class="footer-container">
      <div class="container">
        <img src="images/icon2.png" class="icon">
        <div class="about">
          <h3>Contact Us</h3>
          <p><i class="fa fa-envelope"></i> xyz@gmail.com</p>
          <p><i class="fa fa-phone"></i> 000-111-222</p>
        </div>
        <div class="links">
          <h3>Policy</h3>
          <ul class="footer-links">
            <li><a href="#">Terms of Service</a></li>
            <li><a href="#">Privacy Policy</a></li>
          </ul>
        </div>

        <!-- <p>&copy;C6- Dev1 & Dev2</p> -->
      </div>

  </div>

  </footer>

  <script type="text/javascript">
    var menu = document.getElementById('menu');
    var nav = document.getElementById('nav');
    var exit = document.getElementById('exit');

    menu.addEventListener('click', function(e) {
      nav.classList.toggle('hide-mobile');
      e.preventDefault();
    });

    exit.addEventListener('click', function(e) {
      nav.classList.add('hide-mobile');
      e.preventDefault();
    });
  </script>

</body>

</html>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>Your Upload</title>
    <link rel="stylesheet" href="/Home/Upload/yourupload.css?v=<?php echo time();?>">
  </head>
  <body>
    <header>
			<nav>
				<ul class="show-desktop hide-mobile" id="nav">
					<li><a href="/Home/index.php">Home</a></li>
					<li><a href="/Home/Upload/upload.php">Add Stray</a></li>
					<li ><a href="Profile/profile.php"> Profile</a></li>
					<li ><a href="/Home/Login/logout.php"> Log out</a></li>
				</ul>
			</nav>
	</header>

    <div class="cards">
      <?php
          session_start();
          $dbc = mysqli_connect('localhost','root','','register')or die("BAD CONNECT".mysqli_connect_error());
          $email = $_SESSION['email'];
          $sql="SELECT * FROM petdata where email='$email'";
          $result=mysqli_query($dbc,$sql) or die ("BAD QUERY");
          if(mysqli_num_rows($result)!=0){
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
                  <a href=\"/Home/details.php?ID=". $row['id'] ."\">
                    <input type=\"button\" value=\"Details\">
                  </a>
                  <a href=\"/Home/contract/contract.php\">
                    <input type=\"button\" value=\"Adopt\">
                  </a>
                </div>
              </div>";
             }
           }
           else{
             echo"<h2>You have not uploaded anything yet</h2>";
           }
          ?>
    </div>
  </body>
</html>

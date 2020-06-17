<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta http-equiv="refresh" content="60 result.php"/>
    <title>Result</title>
    <script type="text/javascript">
      if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
      }
    </script>
    <style type="text/css">
      body {
        margin: 0;
        padding: 0;
        font-family: century,sans-serif, monospace;
        background:brown;
      }

      p{
        font-size: 0.9em;
        line-height: 1.6em;
      }

      ul{
        list-style-type: none;
        margin: 0;
        padding: 0;
        margin-top: 10px;
        margin-right: 10px;
        display: flex;
        justify-content: space-between;
      }

      ul li a{
        color: white;
        text-decoration: none;
        display: block;
        height:80%;
        padding: 1em 2em;

      }

      header{
        margin-left: 44em;
      }
      /* header end */

      /* cards */
      .card{
          width: 15%;
          margin: 30px 1.7em;
          background: #dcdfe3;
          border: 1px solid grey;
          border-radius: 10px;
          text-align: center;
          font-family: century ;
          display: inline-block;
      }

      .cards{
        background: #7d1616;
        margin-top: 1em;
      }

      .card:hover{
        box-shadow: 2px 2px 10px black;
        transition: 0.3s ease-in-out;
      }

      .image img{
        width: 100%;
        height: 120px;
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
      }

      .card p{
        text-align: left;
        font-weight: 10px;
        margin-left: 5px;
        margin-bottom: 0;
      }

      .details{
        margin: 10px;
      }

      .details input[type="button"]{
        border-radius: 5px;
        border: none;
        background: #576ae6;
        padding: 10px;
        margin: 5px;
        margin-top: 5px;
      }

      .details input[type="button"]:hover{
        box-shadow: 2px 2px 10px black;
        transition: 0.3s ease-in-out;
      }

      .details input[type="text"]{
        border: none;
        background: none;
        width: 70px;
      }

      .cards h2{
          text-align: center;
          color: white;
          letter-spacing: 0.1em;
          text-transform: uppercase;
          font-family: century;
          padding: 1em 2em 0.2em;
      }
      /* cards */

      h3{
        color: white;
        margin: 5px;
        padding: 5px;
      }

    </style>
  </head>
  <body>

    <header>
      <nav>
        <ul class="show-desktop hide-mobile" id="nav">
          <li><a href="/Home/index.php">Home</a></li>
          <li><a href="/Home/Upload/upload.php">Add Stray</a></li>
          <li><a href="/Home/Profile/profile.php">Profile</a></li>
          <li ><a href="/Home/Login/logout.php"> Log out</a></li>
        </ul>
      </nav>
    </header>

    <div class="cards">
      <?php
        session_start();
        $dbc = mysqli_connect('localhost','root','','register')or die("BAD CONNECT".mysqli_connect_error());
        $email = $_SESSION['email'];
        if(isset($_POST['submit'])){
          $_SESSION['search'] = $_POST['search'];
          $_SESSION['select'] = $_POST['selectbox'];
        }
        $search = $_SESSION['search'];
        $select = $_SESSION['select'];

        if($select=='cat'){
          $sql="SELECT * FROM petdata where catagory='$search'";
          echo "<h3>Showing results for "."\"$search\""."</h3>";
        }
        else if($select=='city'){
          $sql="SELECT * FROM petdata where city='$search'";
          echo "<h3>Showing results for "."\"$search\""."</h3>";
        }
        else{
          $sql="SELECT * FROM petdata where district='$search'";
          echo "<h3>Showing results for "."\"$search\""."</h3>";
        }
        $result=mysqli_query($dbc,$sql) or die ("BAD QUERY");
        if(mysqli_num_rows($result)!=0){
          while($row =mysqli_fetch_assoc($result)){
              echo"   <div class=\"card\">
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
             echo"<h3>No Results Found</h3>";
        }
      ?>
    </div>
  </body>
</html>

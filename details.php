<?php
	if(isset($_GET['ID'])){
		$dbc = mysqli_connect('localhost','root','','register')or die("BAD CONNECT".mysqli_connect_error());
		$PID=$_GET['ID'];
		$sql="SELECT * FROM petdata WHERE id='$PID' ";
		$result=mysqli_query($dbc,$sql) or die ("BAD QUERY");
		$row =mysqli_fetch_array($result);

	}
?>

<html>

	<head>
		<title><?php echo $row['name'] ?></title>
		<style type="text/css">
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
					margin-top: 0;
					margin-left: 40em;
					margin-bottom: -7em;
				}
				.img {
			  display: block;
			  margin-left: auto;
			  margin-right: auto;
				margin-top: 10%;
			  width: 40%;
				border-radius: 5px;
				}
				.img:hover {
				  transform: scale(1.1);
					transition: 0.3s ease-in-out;
					box-shadow: 2px 2px 10px black;
				}
				.body {
			  margin: 0;
			  padding: 0;
			  font-family: century,sans-serif, monospace;
			  background:brown;
        }
        .texts{
           margin: 4px auto;
					 width: 40%;
					 background-color: #191919;
					 padding: 10px;
					 border: none;
					 border-radius: 20px;
        }

        .center {
						color: white;
            margin: 5px auto;
						border: none;
				  	padding: 10px;
						text-align: left;
				}

		}
		</style>
	</head>
	<body class="body">
		<header>
			<nav>
				<ul class="show-desktop hide-mobile" id="nav">
					<li><a href="/Home/index.php">Home</a></li>
					<!-- <li><a href="#">About</a></li> -->
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
		<img class="img" src="/Home/Upload/Picture/<?php echo$row['image'];?>" width="500px" height="400px">
		<div class="texts">
			<table class="center">
				<tr>
					<td class="center">Name : <?php echo$row['name'];?></td>
				</tr>
				<tr>
					<td class="center">Animal Species : <?php echo$row['catagory'];?></td>
				</tr>
				<tr>
					<td class="center">Animal Breed : <?php echo$row['species'];?></td>
				</tr>
				<tr>
					<td class="center">Appearance : <?php echo$row['description'];?></td>
				</tr>
				<tr>
					<td class="center">Location : <?php echo$row['locality'].','.$row['city'].', '.$row['district'].','.$row['pin'];?></td>
				</tr>
				<tr>
					<td class="center">Vaccinated : <?php echo$row['vaccinated'];?></td>
				</tr>
				<tr>
					<td class="center">Trained : <?php echo$row['trained'];?></td>
				</tr>
			</table>
		</div>

	</body>

</html>

<?php

  session_start();
  $con = mysqli_connect('localhost', 'root', '');
  mysqli_select_db($con, 'register');

  if(isset($_POST['submit'])){
    $ngo = $_POST['status1'];
    $cat = $_POST['status2'];
    $name = $_POST['name'];
    $age = $_POST['old'];
    $age .= ' ';
    $age.= $_POST['status3'];

    $species = $_POST['species'];
    $loc = $_POST['area'];
    $city = $_POST['city'];
    $dist = $_POST['dist'];
    $pin = $_POST['pin'];
    $vaccin = $_POST['status5'];
    $email = $_SESSION['email'];
    $img = $_FILES['image']['name'];
    $available = 'yes';
    $trained = $_POST['status4'];
    $des = $_POST['des'];
    $s = "insert into petdata values ('NULL','$ngo','$cat','$name','$age','$loc','$city','$dist','$pin','$vaccin','$img','$email','$species','$des','$trained','$available')";
    if(mysqli_query($con,$s)){
     move_uploaded_file($_FILES['image']['tmp_name'],"Picture/$img");
     echo "<script>alert('Details have been Uploaded.')</script>";
     header('location:/Home/Upload/upload.php');
    }
    else{
      echo 'failed to upload';
    }
  }

 ?>

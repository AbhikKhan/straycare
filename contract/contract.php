<?php

session_start();
if(!isset($_SESSION['username'])){
  header('location:/Home/Login/login.php');
}

 ?>


<!DOCTYPE html>
<html>
<head>
    <title>AGREEMENT FORM</title>
    <style type="text/css">
      *{
        margin: 0;
        padding: 0;
        font-family: century;
      }
      .table{
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%,-50%);
        margin: 5px 10px 5px;
      }
      tr B{
        margin: 10px ;
      }
      ol{
        margin: -5px 20px 10px;
        padding: 3px;
      }
    </style>
</head>
<body>
<table border="1" cellspacing="0" class='table'>
    <tr class="th">
        <TH>AGREEMENT FORM</TH>
    </tr>
    <tr class='tb'>
        <td><br><B>Name: <?php echo$_SESSION['username'].' '.$_SESSION['last']; ?> </B>
        </br><br>
          <B>Animal ID: <?php echo$_GET['ID']; ?> </B>
          </br><br>
          <B>Email ID: <?php
            echo $_SESSION['email'];?> </B>
           </br><br>
           <B>Aadhar ID:</B>
            </br><br>
            <B>Contact No:</B>
            </br><br>
            <B>Date:</B>
          </br>
        </td>

    </tr>
    <tr>
        <TD><center><B>INSTRUCTIONS</B></center><br>
            <ol>
                <li>PLSEASE BRING THE AGREEMENT FORM AT THE TIME OF ADOPTING THE ANIMAL.</li>
                <li>PLEASE BRING YOUR AADHAR CARD,PHOTO.</li>
            </ol>

        </TD>

    </tr>


</table>
</body>
</html>

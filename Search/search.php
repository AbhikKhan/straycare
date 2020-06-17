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
    <title>Search</title>
    <style type="text/css">
      *{
        margin: 0;
        padding: 0;
        font-family: century, sans-serif;
        background: brown;
        text-align: center;
        color: white;

      }

      /* header start */
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
        position:absolute;
      }
      /* header end */

      .boxes{
        position: absolute;
        width: 300px;
        height: 135px;
        top: 22%;
        left: 50%;
        transform: translate(-50%,-50%);
        margin: 5px;
        padding: 10px;
        border-radius: 5px;
        background: #191919;
      }

      .disp{
        background: none;
        display: flex;
      }
      .box{
        margin: 5px;
        padding: 10px;
        background: none;
      }

      .box input[type='text']{
        width: 100px;
      }
      .box input[type='text'], select, input[type='submit']{
        background: none;
        border-radius: 8px;
        border: 2px solid #3498db;
        outline: none;
        margin: 4px;
        padding: 3px;
      }

      .box input[type='text']:hover{
        width:150px;
        border-color: #01DFA5;
        position: relative;
        transition: 0.3s ease-in-out;
      }

      input[type='submit']{
        background: #191919;
        border: 2px solid #3498db;
        border-radius: 20px;
        padding: 5px 10px;
        font-weight: 50;
        color: white;
        cursor: pointer;
        outline: none;
      }

      input[type = "submit"]:hover{
        background:#4000FF;
        box-shadow: 2px 2px 10px #1dc27a;
      }

    </style>
  </head>
  <body>
    <!-- header -->
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

    <!-- header -->

      <form class="" action="result.php" method="post">
        <div class="boxes">
          <div class="search_input box">
            Search : <input type="text" name="search" value="">
          </div>
          <div class="disp">
            <div class="box">
              <select class="" name="selectbox">
                <option value="cat" >Search by Category</option>
                <option value="city">Search by City</option>
                <option value="dist">Search by District</option>
              </select>
            </div>
            <div class="box">
              <input type="submit" name="submit" value="Search">
            </div>
          </div>
        </div>
      </form>

  </body>
</html>

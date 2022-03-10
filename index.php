<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="NAVIGATIO.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Karlo Mattila</title>
</head>
<body>
    <div class="navbar">
        <a href="????">Etusivu</a>
        <div class="subnav">
          <button class="subnavbtn">Oma profiili<i class="fa fa-caret-down"></i></button>
          <div class="subnav-content">
            <a href="Oma Profiili">Muokkaa</a>
          </div>
        </div>
        <div class="subnav">
          <button class="subnavbtn">Kirjaudu <i class="fa fa-caret-down"></i></button>
          <div class="subnav-content">
            <a href="login.php">Kirjaudu</a>
            <a href="signup.php">Luo käyttäjä</a>
            <a href="logout.php">Kirjaudu ulos</a>
            
          </div>
        </div>
        <div class="subnav">
          <button class="subnavbtn">Uudet pelit <i class="fa fa-caret-down"></i></button>
          <div class="subnav-content">
            <a href="#Linkki">Alennus</a>
            <a href="#Linkki">Kauppa</a>
          </div>
        </div>
        <a href="#Oma kirjasto">Oma Kirjasto</a>
      </div>


</body>
</html>


</body>
</html>
</body>
</html>
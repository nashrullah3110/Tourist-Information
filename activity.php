<?php 
  session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Website</title>
    <link href="https://fonts.googleapis.com/css?family=Slabo+27px&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="css/bin.css" rel="stylesheet">
    <link rel="stylesheet" href="css/animate.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="js/vvimp.js"></script>
    <style media="screen">
      #more {display: none;}
      #moree {display: none;}
      #moreee {display: none;}
      body{
        overflow-x: hidden;
      }
      nav
      {
        background-color: skyblue;
      }

    </style>
  </head>
  <body id="home">
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script src="js/wow.min.js"></script>
              <script>
              new WOW().init();
              </script>
<!-- navbar-->
  <nav class="navbar navbar-expand-lg navbar-dark navbar-inverse fixed-top navcolor">
    <div class="container-fluid container">
  <a class="navbar-brand fonts" href="#"><font color="black">TouristInformation</font></a>
  <button class="navbar-toggler collapsed " type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto navbar-right">
      <li class="nav-item active">
        <a class="nav-link fonts" href="#home"><font color="black">Home </font></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link fonts" href="#aboutuss"><font color="black">About Us</font></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link fonts" href="#story"><font color="black">Story</font></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link fonts" href="#team"><font color="black">Team</font></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link fonts" href="#contact"><font color="black">Contact Us</font></a>
      </li>
      <li class="nav-item active">
      <div class="dropdown ">
        <a class="dropdown-toggle  nav-link fonts" type="button" style="color: black;" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <font color="black"><?php echo $_SESSION['name']; ?></font>
    </a>
        <div class="dropdown-menu" aria-labelledby="alert alert-dark">
          <a class="dropdown-item" href="dashboard.php">Dashboard</a>
          <a class="dropdown-item" href="logout.php">Logout</a>
        </div>
      </div>
      </li>
    </ul>

  </div>
  </div>
</nav>

<!--banner-->
<div id="carouselExampleSlidesOnly" class="carousel slide ftco-animate" data-ride="carousel">
  <div class="carousel-inner ftco-animate">
    <div class="carousel-item active">
        <img src="asset/travel.jpg" class="d-block w-100" height="475px" alt="...">
        <div class="carousel-caption d-none d-md-block">
        <h1>Your Journey starts here</h1>
          
</form>
</div>

      </div>
    </div>

  </div>
</div>
  </body>
</html>
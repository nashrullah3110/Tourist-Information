<?php 
  session_start();
      if(!$_SESSION['name'])
      {
        echo "<script>alert('You are not logged in!.'); window.location.href='index.php'</script>";
      }
  
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Home</title>
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
        <a class="nav-link fonts" href="activity.php"><font color="black">Activity</font></a>
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
        <h1>Pay Less Travel More</h1>
</div>

      </div>
    </div>

  </div>
</div>
<!--MOdal-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="">
        <h5 class="modal-title fonts" id="exampleModalLabel" style="padding-top: 10px; padding-left:220px;">Login</h5>


        </button>
      </div>
      <div class="modal-body" style="margin-top: -30px;">
        <form>
        <label for="nameInput"></label>
        <input type="email" class="form-control" id="name" name="name" placeholder="Username" required>
        <label for="lastInput"></label>
        <input type="password" class="form-control" id="last" name="last" placeholder="Password" required>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Login</button>
      </form>
      </div>
    </div>
  </div>
</div>



<!--AboutUs-->
<div class="container" align="center" id="aboutuss">
  <div class="fonts aboutus"><h1>About Us</h1></div>
  <div class="row">
    <div class="col para">
      <p>We are here to make your travel smooth. With comfort Travels, all you have to worry about is packing and leave the rest of your trip details for us to manage. With a team of highly enthusiastic people. Whether you are looking for a curated tour package for two or you want to travel with your college, we plan everything for you. Going solo? We will help you in making the best itinerary. And not just this, we design exclusive packages for corporates and inbound tours, providing just the right trip experience to everyone. We plan, we arrange and we manage tip to toe of your trip ensuring that all you are left to do is ‘Enjoy’.</p>

    </div>
    <div class="col">
      <img src="asset/demo.jpg" width="590px" height="421px" alt="">

    </div>
  </div>
</div>

<!--Story-->
<div class="jumbotron" id="story">
<div class="container fonts" align="center">
  <div class="ftco-animate"><h1><strong>Our Activity</strong></h1></div>
</div>
<br>
<br>
<div class="conatiner" align="center">
  <div class="row">
    <div class="col-lg-4 col-sm-6">
      <div class="card wow fadeInUp" style="width: 18rem;">
  <img src="asset/bungee jumping.jpg" class="card-img-top" height="200px"  alt="...">
  <div class="card-body">
    <h5 class="card-title">Bungee Jumping</h5>
    <p class="card-text">    <p class="card-text">Bungee jumping is an adventurous sport in which people jump from higher ground such as a bridge with an elastic rope tied to their ankles to stop them from hitting the ground. The rope is designed to stretch, not break. When the rope has stretched all the way, the jumper bounces back up. When people jump they wear safety equipment like helmets and a harness.</span> </p>
  </span> </p>
  </div>
</div>
</div>
  <div class="col-lg-4 col-sm-6">
<div class="card wow fadeInUp" style="width: 18rem;">
  <img src="asset/paragliding.jpeg" class="card-img-top" height="200px" alt="...">
  <div class="card-body">
    <h5 class="card-title">Paragliding</h5>
    <p class="card-text">    <p class="card-text">Paragliding is the recreational adventure sport of flying paragliders: lightweight,foot-launched glider aircraft with no rigid primary structure.The pilot sits in a harness or lies supine in a coccoon-like 'speed bag' suspended below a fabric wing. Wing shape is maintained by the suspension lines,the pressure of air entering vents in the front of the wing.</span> </p>
  </span> </p>
  </div>
</div>
    </div>
    <div class="col-lg-4 col-sm-6">
  <div class="card wow fadeInUp" style="width: 18rem;">
    <img src="asset/scuba diving.jpg" class="card-img-top" height="200px"  alt="...">
    <div class="card-body">
      <h5 class="card-title">Scuba Diving</h5>
      <p class="card-text">    <p class="card-text">    <p class="card-text">Scuba diving is a mode of underwater diving where the diver uses a self-contained underwater breathing apparatus,which is completely independent of surface supply, to breathe underwater.Scuba divers carry their own source of breathing gas, usually compressed air,allowing them greater independence and freedom of movement than surface-supplied divers.</span> </p>
    </span> </p>
    </span></p>
    </div>
  </div>
      </div>
  </div>
  </div>
</div>


<!--wrapper-->
<div>
  <div class="">
    <div class="getStartedWrapper">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 storyHeading fonts">Get Your Activity Booked!!</div>
          <div class="col-md-6 startedWraper">
            <div id="home">
            <a data-testid="get_started" href="activity.php" class="getStartedBtn fonts">Book Now</a></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--team-->
<div align="center" id="team">
  <div class="ftco-animate fonts"><h1><strong>Meet The Team</strong></h1></div>
  <div class="row wow zoomIn" style="padding-top: 40px;">
    <div class="col-lg-4 col-sm-6">
      <div class="flip-box">
  <div class="flip-box-inner">
    <div class="flip-box-front">
      <img src="img/finance.jpg" alt="Paris" style="border-radius: 50%;
      width: 330px;
      height: 330px;">
    </div>
    <div class="flip-box-back">
      <h2 style="font-family: 'Dancing Script', cursive;">Mr.Joe</h2>
      <p style="font-family: 'Shadows Into Light', cursive;">Finance</p>
      <div>
      <a href="#"><i class="fa fa-instagram" style="font-size:24px; color: black;"></i></a>
      <a href="#"><i class="fa fa-facebook-square" style="font-size:24px; color: black;"></i></a>
      <a href="#"><i class="fa fa-linkedin-square" style="font-size:24px; color: black;"></i></a>
      <a href="#"><i class="fa fa-google-plus-square" style="font-size:24px; color: black;"></i></a>
    </div>
    </div>
  </div>
</div>
    </div>
    <div class="col-lg-4 col-sm-6">
      <div class="flip-box">
  <div class="flip-box-inner">
    <div class="flip-box-front">
      <img src="img/coder.jfif" alt="Paris" style="border-radius: 50%;
      width: 330px;
      height: 330px;">
    </div>
    <div class="flip-box-back">
      <h2 style="font-family: 'Dancing Script', cursive;">Mrs.Mary</h2>
      <p style="font-family: 'Shadows Into Light', cursive;">Developer</p>
      <div>
      <a href="#"><i class="fa fa-instagram" style="font-size:24px; color: black;"></i></a>
      <a href="#"><i class="fa fa-facebook-square" style="font-size:24px; color: black;"></i></a>
      <a href="#"><i class="fa fa-linkedin-square" style="font-size:24px; color: black;"></i></a>
      <a href="#"><i class="fa fa-google-plus-square" style="font-size:24px; color: black;"></i></a>
    </div>
    </div>
  </div>
</div>
    </div>
    <div class="col-lg-4 col-sm-6">
      <div class="flip-box">
  <div class="flip-box-inner">
    <div class="flip-box-front">
      <img src="img/developer.jfif" alt="Paris" style="border-radius: 50%;
      width: 330px;
      height: 330px;">
    </div>
    <div class="flip-box-back">
      <h2 style="font-family: 'Dancing Script', cursive;">Mr. Joseph</h2>
      <p style="font-family: 'Shadows Into Light', cursive;">Marketing</p>
      <div>
      <a href="#"><i class="fa fa-instagram" style="font-size:24px; color: black;"></i></a>
      <a href="#"><i class="fa fa-facebook-square" style="font-size:24px; color: black;"></i></a>
      <a href="#"><i class="fa fa-linkedin-square" style="font-size:24px; color: black;"></i></a>
      <a href="#"><i class="fa fa-google-plus-square" style="font-size:24px; color: black;"></i></a>
    </div>
    </div>
  </div>
</div>
    </div>
    </div>
  </div>

<!-- Team -->

<!-- contact-->
<section id="contact">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
      <h1 class=" fonts" id="contact"><strong>Contact Us</strong></h1>
      </div>
    </div>
    <br>
    <div class="row justify-content-center">
      <div class="col-lg-4 col-md-6">
        <div class="info wow fadeInLeft">
          <div>
            <i class="fa fa-envelope"></i>
            <p>info@example.com</p>
          </div>

          <div>
            <i class="fa fa-phone"></i>
            <p>+91 123456
            </p>
          </div>

        </div>
      </div>

      <div class="col-lg-5 col-md-8">
        <div class="form wow fadeInRight">
          <div id="sendmessage">Your message has been sent. Thank you!</div>
          <div id="errormessage"></div>
          <form action="#" id="contact-form" method="post" role="form" class="contactForm">
            <div class="form-group">
              <label for="inputName"></label>
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required />

            </div>
            <div class="form-group">
              <label for="inputEmail"></label>
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email"  required/>

            </div>

            <div class="form-group">
              <label for="inputMessage"></label>
              <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message" required></textarea>

            </div>
            <div class="text-center"><button type="submit">Send Message</button></div>
          </form>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- footer-->
<p align="center" class="footer-style" style="background: #eee !important; padding: 10px !important; text-align: center !important; margin-bottom: 0 !important;"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
</div>
</div>
</div>
  </body>
</html>

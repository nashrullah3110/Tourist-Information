<?php 
  session_start();
      if(!$_SESSION['name'])
      {
        echo "<script>alert('You are not logged in!.'); window.location.href='index.php'</script>";
      }
      $conn=mysqli_connect('localhost','root','','tourist');
      if(!$conn)
      {
        die("connection failed");
      }
      

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Dashboard</title>
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
      .profile_image{
          margin-top: 120px;
          width: 100%;
          height: 70vh;
          /* background-color: blue; */
      }
      .profile_image img{
          float: left;
          margin-top: 30px;
          margin-left: 130px;
      }
      .profile_image h1{
          float: left;
          margin-top: 70px;
          margin-left: 20px;
      }
      .profile_image #line{
        position: relative;
        top: 40%; 
        margin-left: 130px;
        margin-right: 130px;
        background-color: black;

      }
      .my_profile_button{
          margin-top: 220px;
          margin-left: 130px;
          cursor: pointer;
      }
      .booked_histroy{
          margin-left: 130px;
          cursor: pointer;
      }
      .my_profile_button i{
          float: left;
          padding-right: 10px;
      }
      .my_profile_button h4{
          float: left;
      }
      .booked_histroy i{
          float: left;
          padding-right: 10px;
      }
      .booked_histroy h4{
          float: left;
      }
      div.vertical-line{
        margin-top: -85px;
        margin-left: 50px;
        width: 1px;
        background-color: black;
        height: 100%; 
        float: left; 
      
    }
    .textareas{
        /* background-color: blue; */
        width: 100%;
        height: 10vh;
        margin-left: 430px;
        margin-top: -50px;
    }
    .booked_history_info{
      margin-top: 10px;
      width: 60%;
      overflow-x: hidden;
      overflow-y: auto;
      margin-right:120px ;
      height: 220px;
    }
    .booked
    {
      width: 100%;
    }
    .trcontainer
    {
      border-top: solid;
      border-bottom: solid;
      border-width: 1px;
      border-color: grey;
    }
    #collapseExample::-webkit-scrollbar-track
{
	-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
	border-radius: 10px;
	background-color: #F5F5F5;
}

#collapseExample::-webkit-scrollbar
{
	width: 12px;
	background-color: #F5F5F5;
}

#collapseExample::-webkit-scrollbar-thumb
{
	border-radius: 10px;
	-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,.3);
	background-color: grey;
}
.error
{

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
  <nav style="background-color:  #85f2ec;" class="navbar navbar-expand-lg navbar-dark navbar-inverse fixed-top navcolor">
    <div class="container-fluid container">
  <a class="navbar-brand fonts" href="home.php"><font color="black">TouristInformation</font></a>
  <button class="navbar-toggler collapsed " type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto navbar-right">
      
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

<!--Dashboard-->
<div class="profile_image">
    <img src="<?php echo $_SESSION['imgurl']; ?>" width="120" height="120"  />
    <h1>Hi <?php echo $_SESSION['name']; ?></h1>
    <hr id="line">
    <div class="my_profile_button">
        <i class="fa fa-user fa-2x" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <h4>My Profile</h4>
        
    </div><br>
    <div class="booked_histroy">
        <i class="fa fa-tasks fa-2x" aria-hidden="true"></i>
        
        <a data-toggle="collapse" data-target="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
          <h4>Booked History</h4>
        </a>
    </div>
    <div class="vertical-line" style="height: 400px;"></div>
    <div class="textareas">
        <div class="my_profile">
            <h3>My Profile</h3>
            <table style="width: 40%">
                <tr>
                    <td>Name</td>
                    <td><?php echo $_SESSION['name']; ?></td>
                </tr>
                <tr>
                    <td>E-mail</td>
                    <td><?php echo $_SESSION['email']; ?></td>
                </tr>
                <tr>
                    <td>Phone-no</td>
                    <td><?php echo $_SESSION['phone']; ?></td>
                </tr>
                
            </table>
        </div>
        <div class="booked_history_info collapse" id="collapseExample">
            <div class="row">
              <table class="booked">
                <tbody>
              <?php
                $custid=$_SESSION['id'];
                $sql="select * from booked_activities where Cust_Id='".$custid."';";
                $result=mysqli_query($conn,$sql);
                if(mysqli_num_rows($result)>0)
                {
                  while($row=mysqli_fetch_assoc($result))
                  {
                    $date=$row['Date'];
                    $actid=$row['Act_Id'];
                    $sql="select * from activities where Act_Id='".$actid."';";
                    $result1=mysqli_query($conn,$sql);
                    if (mysqli_num_rows($result1)>0)
                    {
                      while($row2=mysqli_fetch_assoc($result1))
                      {
                        ?>
                          <tr class="trcontainer">
                <td class="imgcontainer">
                  <img src="<?php echo $row2['Img_url']; ?>" alt="Refresh" style="margin-top: 10px; margin-bottom:10px;" height="120px" width="120px">
                </td>
                <td class="details" style="margin-left: -10px;">
                  <h5><?php echo ucwords($row2['Act_Name']); ?></h5>
                  <h6>Price: <?php echo $row2['Price']; ?></h6>
                  <h6>Date: <?php echo $row['Date']; ?></h6>
                </td>
                </form>
              </tr>
                        <?php
                      }
                    }
                  }
                }
                else
                {
                  ?>

                  <h3 class="error">No Booking here!</h3>
                  <?php
                }
              ?>
                </tbody>
              </table>
            </div>
        </div>
    </div>   
</div>


</div>
<script src="https://use.fontawesome.com/64da2a7621.js"></script>
  </body>
</html>
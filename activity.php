<?php 
  session_start();
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
    <title>Activity</title>
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
      .example
      {
        margin-top: 120px;
        margin-left: 300px;;
      }
      form.example input[type=text] {
  padding: 10px;
  font-size: 17px;
  border: 1px solid grey;
  float: left;
  width: 50%;
  background: #f1f1f1;
}

/* Style the submit button */
form.example button {
  float: left;
  width: 10%;
  padding: 10px;
  background: #2196F3;
  color: white;
  font-size: 17px;
  border: 1px solid grey;
  border-left: none; /* Prevent double borders */
  cursor: pointer;
}

form.example button:hover {
  background: #0b7dda;
}

/* Clear floats */
form.example::after {
  content: "";
  clear: both;
  display: table;
} .image,.info,.form
{
  float: left;
  margin-left: 30px;
}
.activity
{
  margin-top: 80px;
  overflow-y: scroll;
  margin-left: 80px;
}
table
{
  width: 100%;
  margin-top: 5%;
}
.book
{
  text-transform: uppercase;
	background: transparent;
	border: none;
	outline: none;
	color: white;
	background: #0cb083;
	padding: 10px 20px;
	cursor: pointer;
}
.date
{
  width: 100%;
	padding: 10px 0;
	font-size: 16px;
	border: none;
	letter-spacing: 1px;
	margin-bottom: 30px;
	outline: none;
	background: transparent;
	border-bottom: 1px solid black;
	color: black;
}
tr
{
  border-top: solid;
  border-bottom: solid;
  border-width: 2px;
  border-color: grey;
}
td
{
  padding-top: 10px;
  padding-bottom: 10px;
}
.row
{
  width: 80%;
  margin-left: 10%;
  margin-top: 50px;
  height: 400px;
  overflow-y: auto;
  border-width: 3px;
}
#scrollbar::-webkit-scrollbar-track
{
	-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
	border-radius: 10px;
	background-color: #F5F5F5;
}

#scrollbar::-webkit-scrollbar
{
	width: 12px;
	background-color: #F5F5F5;
}

#scrollbar::-webkit-scrollbar-thumb
{
	border-radius: 10px;
	-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,.3);
	background-color: grey;
}
.error
{
  margin-left: 320px;
  margin-top: 180px;;
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
  <nav style="background-color: #85f2ec;" class="navbar navbar-expand-lg navbar-dark navbar-inverse fixed-top navcolor">
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
      <form class="example" action="" method="post">
  <input type="text" placeholder="Search.." name="search">
  <button type="submit" name="submit1" value="search"><i class="fa fa-search"></i></button>
</form>
<div class="row" id="scrollbar">
  <table>
    <tbody>
  <?php 
      if (isset($_POST['submit1'])) 
      {
         $search=strtolower($_POST['search']);
         $sql="select * from activities where Act_Name='".$search."'";
         $result=mysqli_query($conn,$sql);
	
			if(mysqli_num_rows($result)>0)
				{
					while($row=mysqli_fetch_assoc($result))
						{
              ?>
              <div class="table_row">
              <tr>
                <td>
                  <img src="<?php echo $row['Img_url']; ?>" alt="Refresh" height="200px" width="200px">
                </td>
                <td>
                  <h5><?php echo ucwords($row['Act_Name']); ?></h5><br>
                  <h6>Price: <?php echo $row['Price']; ?></h6>
                  <h6>Location: <?php echo $row['Location']; ?></h6>
                </td>
                <form action="<?php echo ($_SERVER['PHP_SELF']); ?>" method="post">
                  <td>
                      <input type="date" class="date" name="date">
                      <input type="hidden" name="Act_id" value="<?php echo $row['Act_Id'] ?>">
                  </td>
                  <td>
                    <button type="submit" class="book">Book</button>
                  </td>
                </form>
              </tr>
              </div>
            <?php
            }
      }
      else
      {
        ?>
        <h3 class="error">Didn't find any activity.</h3>
     <?php 
     }
    }
    else
    {
      $sql="select * from activities";
      $result=mysqli_query($conn,$sql);
      if (mysqli_num_rows($result)>0)
      {
        while ($row=mysqli_fetch_assoc($result))
        {
          ?>
          <div class="table_row">
              <tr>
                <td>
                  <img src="<?php echo $row['Img_url']; ?>" alt="Refresh" height="200px" width="200px">
                </td>
                <td>
                  <h5><?php echo ucwords($row['Act_Name']); ?></h5><br>
                  <h6>Price: <?php echo $row['Price']; ?></h6>
                  <h6>Location: <?php echo $row['Location']; ?></h6>
                </td>
                <form action="" method="post">
                  <td>
                      <input type="date" class="date" name="date">
                      <input type="hidden" name="Act_id" value="<?php echo $row['Act_Id'] ?>">
                  </td>
                  <td>
                    <button type="submit" name="submit2" value="submit2" class="book">Book</button>
                  </td>
                </form>
              </tr>
          </div>
            <?php
        }
      }
    }
  ?>
  <?php
      if (isset($_POST['submit2'])) 
       {
         $actid=$_POST['Act_id'];
         $custid=$_SESSION['id'];
         $date1=date("Y-m-d");
         $date2=$_POST['date'];
         if (strtotime($date1)<=strtotime($date2))
         {
         $sql="INSERT INTO booked_activities(Act_Id,Cust_Id,Date) VALUES ('$actid','$custid','$date2');";
         $result=mysqli_query($conn,$sql);
         if ($result)
         {
            echo "<script>alert('Booked Successfully! For Details Check Your Dashboard!')</script>";
         }
         else
         {
            echo "<script>alert('Booking Failed! Please Try Again!')</script>";
         }
       }
       else
       {
        echo "<script>alert('Seleceted Date is less than current date!')</script>";
       }
      }
      mysqli_close($conn);
  ?>
    </tbody>
  </table>
</div>
</body>
</html>
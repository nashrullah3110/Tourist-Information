<?php
session_start();
 $conn=mysqli_connect('localhost','root','','tourist');
 if(!$conn)
 {
     die("connection failed");
 }
 else
 {
        if ($_SERVER["REQUEST_METHOD"] == "POST") 
            { 
                $email=$_SESSION['email'];
                $password=$_POST['password'];
                $confirmpassword=$_POST['confirmpassword'];
                if($password===$confirmpassword)
                {
                    $password=md5($password);
                    $sql="UPDATE customers SET Password='".$password."' WHERE Email='".$email."'";
                    if (mysqli_query($conn,$sql))
                    {
                        echo "<script>alert('Password Reset Successfully!'); window.location.href='index.php'</script>";
                    }
                }
            }
 }
 mysqli_close($conn);
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
      body
 		{
 			background-image: url(cosmos.jpg);
 		}
 		.container
		{
			max-width: 120rem;
			width: 90%;
			
		}

 		

 		.flex-container{
 			animation-duration: 2s;
 			animation-delay: .2s;
	width: 1000px;
	margin-top: 70px;
	min-height: 500px;
	margin-left: 200px;
	display: -webkit-flex; /* Safari */		
	display: flex; /* Standard syntax */

}
.flex-container .column{
	
	padding: 10px;
	background: linear-gradient(to bottom right, #0cb083,#19ef83);
	-webkit-flex: 1; /* Safari */
	-ms-flex: 1; /* IE 10 */
	flex: 1; /* Standard syntax */
}
.flex-container .column.bg-alt{
	background: rgba(0,0,0,0.6);;
}


.pet{
	color: white;
	font-size: 25px;
	font-family: 'Abel', sans-serif;
	margin-top: 160px;
	margin-left: 110px;
}
.test
{
	color: white;
 			font-size: 16px;
 			margin-left: 130px;	
 			font-family: 'Abel', sans-serif;
}
.box
{
	position: absolute;
	margin-left: 50px;
	margin-top: 100px;
	width: 380px;
	height: 40px;
}
.heading
{
	animation-duration: 1s;
	
	margin: 0;
	padding: 0;
	text-align: center;
	color: white;
	font-family: 'Abel', sans-serif;
}
.box .inputBox
{
	position: relative;
}
.box .inputBox input

{
	animation-duration: 2s;
	animation-delay: 3s;
	font-family: 'Abel', sans-serif;
	width: 100%;
	padding: 10px 0;
	font-size: 16px;
	border: none;
	letter-spacing: 1px;
	margin-bottom: 30px;
	outline: none;
	background: transparent;
	border-bottom: 1px solid #fff;
	color: white;
}
.box .inputBox label
{
	position: absolute;
	top: 0;
	left: 0;
	padding: 10px 0;
	font-size: 16px;
	color: #fff;
	letter-spacing: 1px;
	pointer-events: none;
	transition: .5s;
	font-family: 'Abel', sans-serif;

}

.box .inputBox input:focus ~ label,
.box .inputBox input:valid ~ label
{
	top: -18px;
	left: 0;
	color: #0cb083;
	font-size: 12px;
	font-family: 'Abel', sans-serif;
}
.new
{
	animation-delay: 1s;
	text-transform: uppercase;
	background: transparent;
	border: none;
	outline: none;
	color: white;
	background: #0cb083;
	padding: 10px 20px;
	cursor: pointer;

}
.new:hover
{
	color: #0cb083;
	background: #fff;
	transition: .6s;

}
 
.new2
{	
	animation-delay: 1s;
	
	margin-left: 200px;
	text-transform: uppercase;
	background: transparent;
	border: none;
	outline: none;
	color: white;
	background: crimson;
	padding: 10px 20px;
	cursor: pointer;


}
.new2:hover
{
	background: white;
	color: crimson;
	transition: .6s;

}
 	
 	.err
{
	color: red;
}
p
{
	color: #fff;
}
a
{
	text-decoration: none;
	color: lightblue;
}
::placeholder
{
	color: #fff;
	opacity: 1;
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
 <div class="flex-container animated zoomIn">
        <div class="column">
        	<h1 class="pet animated slideInLeft">Enter New Password</h1><br>

        </div>


        <div class="column bg-alt">
        	<div class="box">
        		<h2 class="heading animated slideInRight">Log In</h2>
        			<form action="<?php echo ($_SERVER['PHP_SELF']); ?>" id="form" method="post">
        				<div class="inputBox animated slideInRight">
        					<input type="password" name="password" placeholder="Password" required="">

        				</div>
						<div class="inputBox animated slideInRight">
        					<input type="password" name="confirmpassword" placeholder="Re-enter password" required="">

						</div>

        				<input type="submit" name="" value="Reset" class="new animated flipInX">
						
        			</form>
        	</div>
        </div>
    </div>
  </body>
</html>
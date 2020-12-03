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
	$email=$_POST['email'];
 	$password=md5($_POST['pass']);
	$sql="select * from customers where Email='".$email."'";
		
		$result=mysqli_query($conn,$sql);
	
			if(mysqli_num_rows($result)>0)
				{
					if($row=mysqli_fetch_assoc($result))
						{
							$hash=$row['Password'];
							if ($password===$hash)
							{
								$_SESSION['name']=$row['Name'];
								$_SESSION['email']=$row['Email'];
								$_SESSION['phone']=$row['Phone'];
								$_SESSION['id']=$row['Id'];
								$_SESSION['imgurl']=$row['Img_url'];
								header('Location:home.php');	
							}
							else
							{
								echo "<script>alert('Incorrect Password')</script>";
							}
				}
			else
				{
					echo"<script>alert('Please input correct Email')</script>";
				}
	}			
}
}
mysqli_close($conn);
?>
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>Login</title>
 	<link href="https://fonts.googleapis.com/css?family=Abel" rel="stylesheet">
 		<link rel="stylesheet" href="animate.css">
 		<style type="text/css">
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
	font-size: 40px;
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
 <body>

 <div class="flex-container animated zoomIn">
        <div class="column">
        	<h1 class="pet animated slideInLeft">Welcome Back!</h1><br>
	<p class="test animated slideInLeft">To stay connected with us please <br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsplogin with your personal id</p>

        </div>


        <div class="column bg-alt">
        	<div class="box">
        		<h2 class="heading animated slideInRight">Log In</h2>
        			<form action="<?php echo ($_SERVER['PHP_SELF']); ?>" id="form" method="post">
        				<div class="inputBox animated slideInRight">
        					<input type="email" name="email" placeholder="Email" required="">

        				</div>	

        				<div class="inputBox animated slideInRight">
        					<input type="Password" placeholder="Password" name="pass" required="">

        				</div>

        				<input type="submit" name="" value="LOG IN" class="new animated flipInX">
						<p>Don't have an account <a href="register.php">Signup</a></p>
						<p><a href="forgotpassword.php">Forgot Password</a></p>
						
        			</form>
        	</div>
        </div>
    </div>
 </body>
 </html>
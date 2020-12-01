<?php
$error="";
$conn=mysqli_connect('localhost','root','','tourist');
if(!$conn)
{
	die("connection failed");
}
else
{
	if($_SERVER["REQUEST_METHOD"]=="POST")
	{
		$name=$_POST['name'];
		$email=$_POST['email'];
		$password=md5($_POST['pass']);
		$gender=$_POST['gender'];
		$phone=$_POST['phone'];
		$sql="select * from customers where Email='".$email."'";
		$result= mysqli_query($conn,$sql);
		if (mysqli_num_rows($result)>0)
		{
			echo "<script>alert('This email already exist.')</script>";
		}
		else
		{
		$sql="INSERT INTO customers(Name,Email,Gender,Password,Phone) VALUES ('$name','$email','$gender','$password','$phone');";
		if (mysqli_query($conn,$sql)){
			echo "<script>alert('Successfully Registered.'); window.location.href='login.php'</script>";
		}
	}
	}
}
?>
<!DOCTYPE html>
 <html>
 <head>
 	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>Registrations</title>
 	<link href="https://fonts.googleapis.com/css?family=Abel" rel="stylesheet">
 		<link rel="stylesheet" href="css/animate.css">
 		<style type="text/css">
 		.container
		{
			max-width: 120rem;
			width: 90%;
			
		}

 		
		.slideInLeft {
  		animation-duration: 3s;
  		animation-delay: .1s;
 		}

 		.flex-container{
	animation-duration: 2s;
 	animation-delay: .2s;
	width: 1000px;
	margin-top: 70px;
	min-height: 600px;
	margin-left: 200px;
	display: -webkit-flex; /* Safari */		
	display: flex; /* Standard syntax */

}
.flex-container .column
{

	padding: 10px;
	background: linear-gradient(to bottom right, #0cb083,#19ef83);
	-webkit-flex: 1; /* Safari */
	-ms-flex: 1; /* IE 10 */
	flex: 1; /* Standard syntax */
}
.flex-container .column.bg-alt
{
	background: rgba(0,0,0,0.6);;
}


.pet{
	color: white;
	font-size: 40px;
	font-family: 'Abel', sans-serif;
	margin-top: 160px;
	margin-left: 40px;
}
.test
{
			color: white;
 			font-size: 16px;
 			margin-left: 130px;	
 			font-family: 'Abel', sans-serif;
}
.heading
{
	margin-left: 50px;
	color: white;
	font-family: 'Abel', sans-serif;
}
.box
{
	position: absolute;
}
.box.inputBox
{
	position: relative;
}
.box .inputBox input
{
	padding-right: 100px;
	padding: 6px 30px;
	margin-bottom: 30px;
	font-size: 16px;
	margin-left: 50px;
	color: white;
	font-family: 'Abel',sans-serif;
	border: none;
	letter-spacing: 1px;
	outline: none;
	background: transparent;
	border-bottom: 1px solid #fff;
	
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

	right: 10px;
	top: 2px;
	
	color: #0cb083;
	font-size: 12px;
	font-family: 'Abel', sans-serif;
}
.new
{
	margin-left: 50px;
	margin-top: 20px;
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
	transition: .8s;

}
 
.new2
{	
	animation-delay: 1s;
	
	margin-left: 40px;
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
	transition: .8s;

}
.new3
{	
	animation-delay: 1s;
	
	margin-left: 40px;
	text-transform: uppercase;
	background: transparent;
	border: none;
	outline: none;
	color: white;
	background: crimson;
	padding: 10px 20px;
	cursor: pointer;


}
.new3:hover
{
	background: white;
	color: crimson;
	transition: .8s;

}
.err
{
	margin-top: 80px;
	color: black;
	font-size: 18px;
	font-weight: bold;
}
.err1
{
	color: red;
	font-weight: bold;
	font-size: 18px;
	font-family: 'Abel',sans-serif;
}
span
{
	color: #fff;
}
::placeholder
{
	color: #fff;
	opacity: 1;
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
label
{
	margin-left: 45px;
}
</style>



 </head>
 <body>

 <div class="flex-container animated zoomIn">
        <div class="column">
        	<h1 class="pet animated slideInLeft">Welcome</h1>
        	
	<p class="test animated slideInLeft">To stay connected with us please <br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp register with your details <br><br><br> <br><br><br><br>
	</p> <br><br>

        </div>
        <div class="column bg-alt">
        	<div class="box">
        		<h2 class="heading animated slideInRight">Register With Your Details</h2>
        			<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        				<div class="inputBox animated slideInRight">
        					<input type="text" name="name" placeholder="Full Name" required="" >

        				</div>	

        				<div class="inputBox animated slideInRight">
        					<input type="email" name="email" placeholder="Email" required="" >
        					

        				</div>

        				<div class="inputBox animated slideInRight">
        					<input type="password" name="pass" placeholder="Password" required="" >

        				</div>

        				<div class="inputBox animated slideInRight">
						<label>Gender</label>
							<br><br>
							<input type="radio" name="gender" value="male" required=""><span>Male</span>
							<input type="radio" name="gender" value="Female" required=""><span>Female</span>
							
        					

        				</div>

        				<div class="inputBox animated slideInRight">
        					<input type="text" name="phone" placeholder="Contact No." required="">

        				</div>

        				<input type="submit" name="submit" value="Register" class="new animated flipInX">
        				
        				<p>Already have an account <a href="login.php">Login</a></p>
        				
        			</form>
        	</div>     	
    </div>
  </body>
 </html>
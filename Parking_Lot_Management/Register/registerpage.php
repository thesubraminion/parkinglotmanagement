<?php
session_start();
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
    <title>Register Page</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
        /* Made with love by Mutiullah Samim*/

@import url('https://fonts.googleapis.com/css?family=Numans');

html,body{
background-image: url('http://www.kabu-load.net/data/out/100/IMG_32787.jpg');
background-size: cover;
background-repeat: no-repeat;
height: 100%;
font-family: 'Numans', sans-serif;
}

.container{
height: 100%;
align-content: center;
}

.card{
height: 650px;
margin-top: auto;
margin-bottom: auto;
width: 400px;
background-color: rgba(0,0,0,0.5) !important;
}

.social_icon span{
font-size: 60px;
margin-left: 10px;
color: #FFC312;
}

.social_icon span:hover{
color: white;
cursor: pointer;
}

.card-header h3{
color: white;
}

.social_icon{
position: absolute;
right: 20px;
top: -45px;
}

.input-group-prepend span{
width: 50px;
background-color: #FFC312;
color: black;
border:0 !important;
}

input:focus{
outline: 0 0 0 0  !important;
box-shadow: 0 0 0 0 !important;

}

.remember{
color: white;
}

.remember input
{
width: 20px;
height: 20px;
margin-left: 15px;
margin-right: 5px;
}

.login_btn{
color: black;
background-color: #FFC312;
width: 100px;
}

.login_btn:hover{
color: black;
background-color: white;
}

.links{
color: white;
}

.links a{
margin-left: 4px;
}
    </style>
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>    
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="../Segment/choiceui.php">Parker</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="../random/aboutus_section.html">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Help</a>
        </li>
      </ul>
    </div>
</nav>

<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>Sign Up</h3>
				<div class="d-flex justify-content-end social_icon">
					<span><i class="fab fa-facebook-square"></i></span>
					<span><i class="fab fa-google-plus-square"></i></span>
					<span><i class="fab fa-twitter-square"></i></span>
				</div>
			</div>
			<div class="card-body">
				<form action="registerprocess.php" method="POST">

					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input class="form-control" type="Name" name="fname" class="textInput" id="fname"  placeholder="First Name">
						
					</div>

					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input class="form-control" type="Name" name="lname" class="textInput" id="lname"  placeholder="Last Name">
						
					</div>

					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-mobile"></i></span>
						</div>
						<input class="form-control" type="Number" name="mobileno" class="textInput" id="mobileno"  placeholder="Mobile Number">
						
					</div>

					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input class="form-control" placeholder="username" type="Email" name="email" class="textInput">>
						
					</div>


					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input  class="form-control" placeholder="password" type="password" id="Password" name="Password">
					</div>

					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input  class="form-control" placeholder="confirm password" name="Password2" class="textInput" type="password" id="Password2" >
					</div>


					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-car"></i></span>
						</div>
						<input class="form-control" type="Name" name="vname" class="textInput" placeholder="Vehicle Name">
						
					</div>

					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-car"></i></span>
						</div>
						<input class="form-control"  type="Name" name="vtype" class="textInput" placeholder="Vehicle Type">
						
					</div>


					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-car"></i></span>
						</div>
						<input class="form-control"  type="Name" name="vnumber" class="textInput" placeholder="Vehicle Number">
						
					</div>



					<div class="form-group">
						<input type="submit" type="submit" name="register_btn" value="Register" class="btn float-right login_btn">




					</div>

										 <?php
                    	if(isset($_SESSION["error"])){
                        	$error = $_SESSION["error"];
                        	echo "<span>$error</span>";
                    }

                    ?>
 
					</div>
				</form>
			</div>

		</div>
	</div>
</div>
</body>
</html>









<!--<!DOCTYPE html>
<html>
<head>

	<title> Signup and Register</title>	

</head>
<body>

	<div class="Header">
		<h1> Registration</h1>
	</div>

	<form method="POST" action="registerprocess.php">

			<p>
				First Name:
				<input type="Name" name="fname" class="textInput">
			</p>

			<p>
				Last Name:
				<input type="Name" name="lname" class="textInput">
			</p>

			<p>
				Mobile Number:
				<input type="Number" name="mobileno" class="textInput">
			</p>	

			<p>
				Unique Email ID:
				<input type="Email" name="email" class="textInput">
			</p>
				
			<p>
				Password:
				<input type="Password" name="Password" class="textInput">
			</p>
			
			<p>
				Confirm Password:
				<input type="Password" name="Password2" class="textInput">
			</p>

			<p>
				Vehicle Name:
				<input type="Name" name="vname" class="textInput">
			</p>

			<p>
				Vehicle Type(2/4):
				<input type="Name" name="vtype" class="textInput">
			</p>
			<p>
				Vehicle Number:
				<input type="Name" name="vnumber" class="textInput">
			</p>

			<p>
				
				<input type="submit" name="register_btn" value="Register">
			</p>	

		
	</form>

</body>
</html>
-->








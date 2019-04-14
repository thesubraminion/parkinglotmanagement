<!DOCTYPE html>
<html lang="en">
<head>
	<title>Leave</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

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

	.dropdown{
		margin-bottom:600px;
	}

	.container{
		height: 100%;
		align-content: center;
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

	.card{
		height: 150px;
		margin-top: auto;
		margin-bottom: auto;
		width: 400px;
		background-color: rgba(0,0,0,0.5) !important;
	}

	.btn-group{
		margin-left: 85px;

	}
	.button{
		font-family: 'Numans', sans-serif;
		font-size: 40px;
		width: 20px;
		background-color: #ffbf00;
		margin-top: 230px;
		margin-left: 110px;
	} 


	.heading{
		margin-top: 300px;
		margin-left: 300px;
	}  

	
</style>
</head> 
<!--Fontawesome CDN-->
<body>
	
	
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<a class="navbar-brand" href="#">Parker</a>
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
				
				
				
				
				<form action="leaveprocess.php" method="POST">
					<p>
						
						<input type="submit" id="leave_btn" value="Unpark" name="Leave" class= "btn float-right login_btn" style="margin-right: 130px; margin-top: 40px; width: 150px">
					</p>  
				</form>
			</div>
		</div> 
	</div>
</div>
</body>
</html>





















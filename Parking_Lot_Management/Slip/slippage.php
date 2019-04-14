<?php
	session_start();
	$con=mysqli_connect("localhost","root","1111","Parking_System");
	$username=$_SESSION['username'];
	$sql="select * from parking_slip where UID='$username'";
	$result=mysqli_query($con,$sql);
	$row=$result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Slip</title>
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
margin-right: 50px;
margin-top: 20px;
}

.login_btn:hover{
color: black;
background-color: white;
}

    .card{
    height: 400px;
    margin-top: auto;
    margin-bottom: auto;
    width: 400px;
    background-color: rgba(0,0,0,0.5) !important;
}
    

    .card-header{
       font-family: 'Numans', sans-serif;
       font-size: 30px;
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
          <a class="nav-link" href="#">About Us</a>
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
            <div class="d-flex container h-100 justify-content-center align-items-center">
            <h3> <font color="#FFC312">Parking Slip</font><h3>
  </div>
      </div>
      <div class="card-body">
          <table class="table table-hover">
            
 <table>

      <tr>
        <td style="color:#ffffff">UID:</td>
        <td style="color:#ffffff"><?php echo $row['UID'] ; ?></td>
      </tr>
      
      <tr>
        <td style="color:#ffffff">Area Name:</td>
        <td style="color:#ffffff"><?php echo $row['Area_Name'] ; ?></td>
      </tr>

      <tr>
        <td style="color:#ffffff">Slot ID</td>
        <td style="color:#ffffff"><?php echo $row['Slot_Id'] ; ?></td>
      </tr> 

      <tr>
        <td style="color:#ffffff">Entry Time: </td>
        <td style="color:#ffffff"><?php echo $row['Parking_Time'] ; ?></td>
      </tr>
        
      <tr>
        <td style="color:#ffffff">Date:</td>
        <td style="color:#ffffff"><?php echo $row['Parking_Date'] ; ?></td>
      </tr>
      

      <tr>
        <td style="color:#ffffff">First Name:</td>
        <td style="color:#ffffff"><?php echo $row['First_Name'] ; ?></td>
      </tr>
      <tr>
        <td style="color:#ffffff">Last Name:</td>
        <td style="color:#ffffff"><?php echo $row['Last_Name'] ; ?></td>
      </tr>

      <tr>
        <td></td>
        <td>
          <form action="slipprocess.php">
         <a class="leave">	
         <a><input type="submit" name="register_btn" " value="Leave" class= "btn float-right login_btn"></a>
          </a>
          </form>
          </td>
      </tr> 
</table>
      </div>
      <div class="card-footer">

      </div>
    </div>
  </div> 
</div>



</div>

  
</body>
</html>





















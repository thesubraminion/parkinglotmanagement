<?php
  session_start();
  $con=mysqli_connect("localhost","root","1111","Parking_System");
  $username=$_SESSION['username'];
  if($_SESSION['flag']=="1")
  {
  $sql="select * from parking_fee where UID='$username'";
  $result=mysqli_query($con,$sql);
  $row=$result->fetch_assoc();
  $_SESSION['username']=$username;
  }
  else
    header("location:http://localhost/Parking_Lot_Management/trial2.php");  
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Payment</title>
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
margin-top: 30px;
margin-right: 30px;
}

.login_btn:hover{
color: black;
background-color: white;
}



    .card{
    height: 500px;
    margin-top: auto;
    margin-bottom: auto;
    width: 400px;
    background-color: rgba(0,0,0,0.5) !important;
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
            <h3> <font color="#FFC312">Payment Details</font><h3>
  </div>
      </div>
      <div class="card-body">
          <table>

      <tr>
        <td style="color:#ffffff">UID:</td>
        <td style="color:#ffffff"><?php echo $row['UID'] ; ?></td>
      </tr>

      <tr>
        <td style="color:#ffffff">EntryTime:</td>
        <td style="color:#ffffff"><?php echo $row['Entry_Time'] ; ?></td>
      </tr>

      <tr>
        <td style="color:#ffffff">LeavingTime:</td>
        <td style="color:#ffffff"><?php echo $row['Leaving_Time'] ; ?></td>
      </tr> 

      <tr>
        <td style="color:#ffffff">Date: </td>
        <td style="color:#ffffff"><?php echo $row['Entry_Date'] ; ?></td>
      </tr>
        
      <tr>
        <td style="color:#ffffff">Charge:</td>
        <td style="color:#ffffff"><?php echo (string)$row['Parking_Charge'] ; ?></td>
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
          <form action="paymentprocess.php">

          
          <input type="submit" name="register_btn" value="Pay By Cash" class= "btn float-right login_btn" style="height: 40px; width: 250px">
          </form>
        
          </td>
      </tr>
        <tr>
        <td></td>
        <td>
          <form action="paymentprocess2.php">
          <input type="submit" name="register_btn" value="Paytm Gateway" class= "btn float-right login_btn" style="height: 40px; width: 250px">
          
          </form>
          </td>
      </tr>   

      
    </table>
      </div>
    </div>
  </div> 
</div>



</div>

  
</body>
</html>




















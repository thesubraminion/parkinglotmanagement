<!DOCTYPE html>
<html lang="en">
<head>
  <title>Park your Vehicle</title>
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
    height: 500px;
    margin-top: auto;
    margin-bottom: auto;
    width: 400px;
    background-color: rgba(0,0,0,0.5) !important;
}
    .button{
      font-family: 'Numans', sans-serif;
      font-size: 40px;
      width: 20px;
      background-color: #ffbf00;
      margin-top: 230px;
      margin-left: 110px;
    } 


    .place{
      color: black;
      background-color: #FFC312;
      
      font-family: 'Numans', sans-serif;
      font-size: 30px;
      margin-left: 8px;
      width: 30px;
      margin-top: 10px;

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
      <div class="card-header">
            <div class="d-flex container h-100 justify-content-center align-items-center">
   <form method="POST" action="areaenterprocess.php">
        
            <a class="place">
              <select name = "area">
              <option value = "Area-A" selected>Area-A</option>
              <option value = "Area-B">Area-B</option>
              <option value = "Area-C">Area-C</option>
              <option value = "Area-D">Area-D</option>
              <option value = "Area-E">Area-E</option>
              <option value = "Area-F">Area-F</option>
              <option value = "Area-G">Area-G</option>
              </select>

      </a>
        <br>
      <div class="button">
    <a>  <input type="submit" name="park_btn" value ="Park" class= "btn float-right login_btn"></a>
    </div>
  </form>
  </div>
      </div>
      <div class="card-body">
          
      </div>
      <div class="card-footer">

      </div>
    </div>
  </div> 
</div>



</div>

  
</body>
</html>





















<!--

  <form method="POST" action="areaenterprocess.php">
    <table>

      <tr>
        <td>Area Name:</td>
        <td>
        <select name = "area">
              <option value = "Area-A" selected>Area-A</option>
              <option value = "Area-B">Area-B</option>
              <option value = "Area-C">Area-C</option>
              <option value = "Area-D">Area-D</option>
              <option value = "Area-E">Area-E</option>
              <option value = "Area-F">Area-F</option>
              <option value = "Area-G">Area-G</option>

            </sele>ct>
          </td> 
        <td><input type="Name" name="area" class="textInput"></td>
      </tr>

      <tr>
        <td></td>
        <td><input type="submit" name="park_btn" value="Park"></td>
      </tr> 

      
    </table>
  </form>

-->

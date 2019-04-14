<!DOCTYPE html>
<html lang="en">
<head>
  <title>Rate Us</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

  <style type="text/css">

  *{

    margin: 0;
    padding: 0;
  }

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
    height: 300px;
    margin-top: auto;
    margin-bottom: auto;
    width: 400px;
    background-color: rgba(0,0,0,0.5) !important;
  }

  .card-footer{
    margin-right: 120px;
    margin-top: 50px;
  }
  .rate {
    float: left;
    height: 46px;
    padding: 0 10px;
    margin-left: 100px; 

  }
  .rate:not(:checked) > input {
    position:absolute;
    top:-9999px;
  }
  .rate:not(:checked) > label {
    float:right;
    width:1em;
    overflow:hidden;
    white-space:nowrap;
    cursor:pointer;
    font-size:30px;
    color:#ccc;
  }
  .rate:not(:checked) > label:before {
    content: 'â˜… ';
  }
  .rate > input:checked ~ label {
    color: #ffc700;    
  }
  .rate:not(:checked) > label:hover,
  .rate:not(:checked) > label:hover ~ label {
    color: #deb217;  
  }
  .rate > input:checked + label:hover,
  .rate > input:checked + label:hover ~ label,
  .rate > input:checked ~ label:hover,
  .rate > input:checked ~ label:hover ~ label,
  .rate > label:hover ~ input:checked ~ label {
    color: #c59b08;
  }

  .place{
      color: black;
      background-color: #FFC312;
      font-family: 'Numans', sans-serif;
      font-size: 25px;
      margin-left: 50px;
      width: 30px;
      margin-top: 10px;

    }


</style>
</head> 
<!--Fontawesome CDN-->
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="../Segment/choiceui.php">Parker</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="#">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Help</a>
        </li>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../Segment/choiceui.php">Logout</a>                    
      </li>
    </ul>
  </div>
</nav>

<div class="container">
  <div class="d-flex justify-content-center h-100">
    <div class="card">
      <div class="card-header">
        <div class="d-flex container h-100 justify-content-center align-items-center">
          <form method="POST" action="ratingprocess.php">
            <a class="place">
              <select name = "rating">
                <option value = "" selected>Rate your Experience</option>
                <option value = "5">5 Stars</option>
                <option value = "4">4 Stars</option>
                <option value = "3">3 Stars</option>
                <option value = "2">2 Stars</option>
                <option value = "1">1 Star</option>
              </select>
            </a>
            <div class="card-footer">
          <td><input type="submit" name="park_btn" value="Logout" class= "btn float-right login_btn" style="margin-left: 100px; margin-top: 80px"></td>
          </div>
          </form>
        </div>
      </div>
      <div class="card-body">

      </div>
      </div>
    </div>
  </div> 


</body>
</html>






















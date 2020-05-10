<!DOCTYPE html>
<html lang="en">
<head>
	<title>Product View</title>
	 <meta charset="utf-8">
	 <meta name="viewport" content="width=device-width, initial-scale=1">
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

	  <style>
		  #ubtn{
			  color: white;
		  }
		  </style>
</head>

<?php

SESSION_START();
?>


<body>
<header>
<!--Navigation Bar-->
	<nav class="navbar navbar-inverse">
  		<div class="container-fluid">
    		<div class="navbar-header">
      			<a class="navbar-brand">Sentiment Analysis</a>
    		</div>
    		<ul class="nav navbar-nav">
      			<li class="active"><a href="#">Home</a></li>
      			<li><a href="login.php">Login</a></li>
      			<li><a href="Register.html">Register</a></li>
    		</ul>
      </div>
	  <div class="col-sm-4"><br>	  
	  <?php
		   if(isset($_SESSION['user']))
		   {
			   echo"<span id ='ubtn' >Welcome {$_SESSION['user']}</span>"; 
			   echo "&nbsp;&nbsp;<button type='submit'><a href='logout.php'>Logout</a></button>";
		   } 
		   else{
			   echo "";
		   }
		?> 
	  </span></div>
    </nav>
</header>
<!--Image grid-->
<div class="container text-center" style="background-color: lavender;">
  <div class="row">
    <div class="col-lg-4 col-md-4 col-sm-4">
      <div class="thumbnail" style="margin-top: 2%;">
        <a href="product.php">
          <img src="image/m1.jpg" alt="Honor 9N" style="width:100%">
          <div class="caption">
            <p>Honor 9N.</p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-4">
      <div class="thumbnail"  style="margin-top: 2%;">
        <a href="#">
          <img src="image/s10.jpg" alt="Samsung Galaxy S10" style="width:100%">
          <div class="caption">
            <p>Samsung Galaxy S10</p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-4">
      <div class="thumbnail"  style="margin-top: 2%;">
        <a href="#">
          <img src="image/n8.jpg" alt="Xiaomi Redmi8" style="width:100%">
          <div class="caption">
            <p>Xiaomi Redmi8</p>
          </div>
        </a>
      </div>
    </div>
  </div></div>
  <div class="container text-center" style="background-color: lavender;">
  <div class="row">
    <div class="col-lg-4 col-md-4 col-sm-4">
      <div class="thumbnail">
        <a href="#">
          <img src="image/m4.jpg" alt="Oppo K3" style="width:100%">
          <div class="caption">
            <p>Oppo K3</p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-4">
      <div class="thumbnail"  style="margin-top: 2%;">
        <a href="#">
          <img src="image/m5.jpg" alt="LG ThinQ" style="width:100%">
          <div class="caption">
            <p>LG ThinQ</p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-4">
      <div class="thumbnail">
        <a href="#">
          <img src="image/m6.jpg" alt="Vivo Y17" style="width:100%">
          <div class="caption">
            <p>Vivo Y17</p>
          </div>
        </a>
      </div>
    </div>
  </div>
</div>

</body>
</html>
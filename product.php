<?php

SESSION_START();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Product Description</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
.checked {
  color: orange;
}
#ubtn{
    color: white;
}
</style>
<script type="text/javascript">
     function fetch(){
       var obj = new XMLHttpRequest();
       obj.onreadystatechange = function()
       {
         if((obj.readyState==4)&&(obj.status==200))
         {
             document.getElementById("cmt").innerHTML = obj.responseText;
          
         }
       }
        obj.open("GET","getDetails.php",true);
        obj.send();
     }

     function setTextArea(){
       document.getElementById("newtext").innerHTML = "<form action = 'edit.php'\
         method = 'POST'> <textarea name = 'editcomment'></textarea>\
         <button type ='submit' name = 'edit'>Change</button>";
     }

</script>
</head>
<body onload="fetch()">
<header>
  <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand">Sentiment Analysis</a>
        </div>
        <ul class="nav navbar-nav">
            <li><a href="index.php">Home</a></li>
            <li class="active"><a href="#">Products</a></li>
            <li><a href="login.php">Login</a></li>
            <li><a href="Register.html">Register</a></li>
        </ul>
      </div>
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
<div class="container">
  <div class="row">
  <!--Image Preview in grid1-->  
  <div class="col-lg-4 col-md-4 col-sm-4" style="background-color: lavender; box-shadow:10px 10px  #A9A9A9; ">
    <div class="product view">
      <div class="card" style="width:100%; height:100%;">
        <img class="card-img-top" src="image/m1.jpg" alt="Card image" style="width:80%; margin-top: 10%; margin-left: 10%;">
        <div class="card-body">
          <h4 class="card-title">Honor 9N</h4>
          <p class="card-text">Price: ₹9,999 </p>
          <a href="#" class="btn btn-primary btn-lg">buy</a>
        </div>
      </div>
    </div>
    <hr>
    
    <!--Comment Box Here-->
    <form action="comment.php" method="POST">
      <div class="form-group">
        <label for="comment">Comment:</label>
        <textarea class="form-control" rows="3" name="comment" id="comment" placeholder="Give Your Feedback Here " required></textarea>
      </div>
      <button type="submit" class="btn btn-primary" name="submit" style="float:right;">Submit</button>
    </form>
  </div>
  <!--Public Comment in grid2-->
  <div class="col-lg-6 col-md-6 col-sm-6"style="margin-left: 2%;">

    <!--Star Rating-->
    <div style="background-color: lavender; padding:2%;">
    <?php
    include "connection.php";

    $sql = "SELECT Rating From Product WHERE Product_ID = 101";

    $qry = mysqli_query($conn,$sql);
    if($qry){
        $row = mysqli_fetch_array($qry);
        echo "<h3>Rating : ".$row["Rating"]."/5.0</h3>";
    }
    else{
        echo "Rating : No Ratings Yet";
    }
    ?>
    </div>
    <h2 class="text-center">Customer Feedback</h2>
    <div class="media border p-3" style="margin-top: 5%; background-color: lavender;  padding:2%; box-shadow:10px 10px  #A9A9A9; ">
    <div class="media-body">
    <p id="cmt"></p>
    <span id='newtext'></span>
  </div>
</div>
  </div> 
</div>
</div>
</body>
</html>
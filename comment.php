<?php

include "connection.php";

SESSION_START();

if(isset($_SESSION['user'])){
     if(isset($_POST['submit'])){
       $comment = $_POST['comment'];
       $user = $_SESSION['user'];

       $sql = "INSERT INTO Review(Review_Text,Review_Date,Review_Time,Email) VALUES('$comment',curdate(),curtime(),'$user')";
       if($conn->query($sql) == TRUE){
       echo "<script>alert('You just commented')</script>";       
       } 
       else{
        echo "Error".$sql."<br>".$conn->error;
       }    
     }
    }
    else{
        echo "<script>alert('You must login first to comment')</script>"; 
        
    }  
mysqli_close($conn);
?>
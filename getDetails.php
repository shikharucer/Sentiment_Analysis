<?php

include "connection.php";

SESSION_START();

if(isset($_SESSION['user'])){
    $user = $_SESSION['user'];
    $sql = "SELECT Email,Review_Text,Review_Date FROM Review WHERE Email = '$user'";
    $qry = mysqli_query($conn,$sql);
    
    if($qry){
        while($row = mysqli_fetch_array($qry)) {
            echo $row["Email"]. "Posted on " . $row["Review_Date"]. " " . $row["Review_Text"]. "<br>";
        }
    }
    else{
        echo"Error";
    }    
        
}

mysqli_close($conn);
?>
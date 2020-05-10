<?php

include "connection.php";

SESSION_START();

    $sql = "SELECT Email,Review_Text,Review_Date FROM Review";
    $qry = mysqli_query($conn,$sql);
    
    if($qry){
        while($row = mysqli_fetch_array($qry)) {
            echo $row["Email"]. "Posted on " . $row["Review_Date"]. " " . $row["Review_Text"]. "<br>";
            if(isset($_SESSION['user'])){
                echo "<form action = 'delete.php' method = 'POST'><button type='submit' name='del'>Delete</button></form>";
                echo "<button type='submit'  onclick = 'setTextArea()'>Edit</button>";
            }
            echo "<hr>";
        }
    }
    else{
        echo"Error";
    }    
        


mysqli_close($conn);
?>
<?php

include "connection.php";

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["mobile"];
    $pswd = $_POST["pswd"];

    $sql = "INSERT INTO Customer (Customer_Name,Email,Password,Phone) VALUES('$name','$email','$pswd','$phone')";

    if($conn->query($sql) == TRUE){
        echo "<script>alert('Registration Sucessfull')</script>";       
        } 
    else{
        echo "Error".$sql."<br>".$conn->error;
    }    
}

mysqli_close($conn);

?>
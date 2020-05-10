<?php

include "connection.php";

SESSION_START();

if(isset($_SESSION['user'])){
    if(isset($_POST['del'])){
        $usr = $_SESSION['user'];

        $sql = "DELETE FROM Review WHERE Email = '$usr' ";

        if($conn->query($sql) == TRUE)
        {
            echo "<script>alert('You have sucessfully deleted your comment')</script>";
            header("Location: product.php");
        }
        else
           echo "error";
    }
}
mysqli_close($conn);
?>
<?php

include "connection.php";

SESSION_START();

if(isset($_SESSION['user'])){
    if(isset($_POST['edit'])){
        $usr = $_SESSION['user'];
        $comment = $_POST['editcomment'];
        $sql = "UPDATE Review set Review_Text = '$comment' WHERE Email = '$usr' ";

        if($conn->query($sql) == TRUE)
        {
            echo "<script>alert('You have sucessfully updated your comment')</script>";
            header("Location: product.php");
        }
        else
           echo "error";
    }
}
mysqli_close($conn);
?>
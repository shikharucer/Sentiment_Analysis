<?php

include "connection.php";

if(isset($_POST['submit'])){
    $img = $_POST['img'];
    $pname = $_POST['pname'];
    $price = $_POST['price'];
    $desc = $_POST['desc'];

    $sql = "INSERT INTO Product(Product_Image,Product_Name,Description,Price) values('$img','$pname','$desc','$price')";

    if($conn->query($sql) == TRUE){
        echo "<h1>Successful</h1>";
    }
    else{
        echo " Error";
    }
}
mysqli_close($conn);

?>
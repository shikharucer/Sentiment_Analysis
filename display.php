
<html>

<?php

include "connection.php";

$sql = "SELECT Product_Image,Product_Name,Description,Price,Rating FROM Product WHERE Product_ID = 101";

$qry = mysqli_query($conn,$sql);

if($qry){
    $row = mysqli_fetch_array($qry);
    ?>
    <body>
    <table><tr><td><image src = "<?php $row['Product_Image'] ?>"></td></tr>
    <tr><td><?php $row['Product_Name'] ?></td></tr>
    <tr></td><?php $row['Description'] ?></td></tr>
    <tr></td><?php $row['Price'] ?></td></tr>
    <tr></td><?php $row['Rating'] ?></td></tr>
    </table>
    </body>
    </html>
<?php  
}

else{
    echo "error";
}

mysqli_close($conn);

?>
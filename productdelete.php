<?php
 include 'header.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Confirmation</title>
    <style>
        .maindiv{
            position: absolute;
            width: 100%;
            height: 90vh;
            background-color: aliceblue;
            margin-top: 10vh;

        }
    </style>
</head>
<body>
    <div class="maindiv">
    <?php

$servername = "DESKTOP-3KIPTC6\SQLEXPRESS";
$connectionoption = [
    "Database"=>"homerepairhub",
    "Uid"=> "",
    "PWD"=> ""
];

$conn = sqlsrv_connect($servername, $connectionoption);


if (!$conn) {

    
    echo"Connection Failed";
}

else{
    //echo "Connection is Successfully Build";
}


 $getproductid = $_GET['product_id'];







    
    



    $query = "DELETE  FROM product WHERE product_id = '".$getproductid."' ";



$result = sqlsrv_query($conn, $query);


if (!$result) {
    echo "No record Found";
  
} else {
        
            
            echo "
           <div style='width : 100%;height : 60vh;background-color: cadetblue;margin-top: 120px;'>
        <h1 style='text-align: center; color:yellow;'>Job Done</h1><br>
        <br><br><h1 style='text-align: center; color:yellow;'>Product is Successfully deleted</h1>
        <br><br><br><br><br>
        <h3 style='text-align: center; color:brown;'>Admin <span style='color:yellow;'><h1>Home Repair Hub</h1></span> Services</h3>
    </div>
            ";
            
           
}

?>
    </div>
</body>
</html>





























<!-- else {
    while ($row = sqlsrv_fetch_array($result)) 
        if ($row['firstname']==$firstname && $row['accountnumber']==$accountnumber) {
            
            echo "
           <div style='width : 100%;height : 60vh;background-color: cadetblue;margin-top: 120px;'>
        <h1 style='text-align: center; color:yellow;'>Congratulations</h1><br>
        <br><br><h1 style='text-align: center; color:yellow;'>Your Order is Successfully placed at your Address</h1>
        <br><br><br><br><br>
        <h3 style='text-align: center; color:brown;'>Thanks for using <span style='color:yellow;'><h1>Home Repair Hub</h1></span> Services</h3>
    </div>
            ";
            
           exit;
        }
        else{
         
            
        
        }
               echo "
            <div style='width : 100%;height : 60vh;background-color: cadetblue;margin-top: 120px;'>
         <h1 style='text-align: center; color:black;font-size:30px'>Confirm your Credential</h1><br>
         <br><br><h1 style='text-align: center; color:red;'>Sorry Invalid Credential</h1>
         <br><br><br><br><br>
         <h3 style='text-align: center; color:brown;'>Thanks for using <span style='color:yellow;'><h1>Home Repair Hub</h1></span> Services</h3>
     </div>
             ";
             
        
        
    
} -->
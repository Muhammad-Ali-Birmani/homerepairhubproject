<?php
include 'header.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin DashBoard</title>
    <style>
        
        .container {
            position: absolute;
            width: 100%;
          
            background-color: aliceblue;
            margin-top: 10vh;
            justify-content: center;
            flex-wrap: wrap;
            align-items: center
                }
       
    </style>
</head>

<body>
    <div class="container">
      

                <?php
                
                $servername = "DESKTOP-3KIPTC6\SQLEXPRESS";
$connectionoption = [
    "Database"=>"homerepairhub",
    "Uid"=> "",
    "PWD"=> ""
];

$conn = sqlsrv_connect($servername, $connectionoption);


if (!$conn) {

   echo "Connection failed";
}

else{
    // echo "Connection is Successfully Build";
}
    



        
        
if (isset($_POST["submit"])) {

    $imagename = $_FILES["pupload"]["name"];
    $tempname = $_FILES["pupload"]["tmp_name"];
    $photofolder = 'productimages/'.$imagename;
    $pname = $_POST['pname'];
    $pprice = $_POST['pprice'];
    $pcategory = $_POST['pcategory'];
    $pcompany = $_POST['pcompany'];
    $pweight = $_POST['pweight'];
    $product_id = $_POST['product_id'];



    if ($_FILES['pupload']['name'] == '' || $pname == '' || $pprice == '' || $pcategory == '' || $pcompany == '' || $pweight == '') {
       return false;
    }
else{

  



    $query = "UPDATE   product SET imageofproduct = '$imagename' ,pname = '$pname',
     pprice =  '$pprice', pcategory = '$pcategory', pcompany = '$pcompany' , pweight = '$pweight' WHERE product_id = '".$product_id."'";
    
        


     $result = sqlsrv_query($conn, $query);


     if($result){
        
        echo "
        <div style='width : 100%;height : 60vh;background-color: cadetblue;margin-top: 120px;'>
     <h1 style='text-align: center; color:yellow;'>Job Done</h1><br>
     <br><br><h1 style='text-align: center; color:yellow;'>Product is Successfully Updated</h1>
     <br><br><br><br><br>
     <h3 style='text-align: center; color:brown;'>Admin <span style='color:yellow;'><h1>Home Repair Hub</h1></span> Services</h3>
 </div>
         ";
    
     }
     else {
        echo "Sorry Product is not updated";

     }


}

}

                  ?>  
            
 
    </div>
</body>

</html>
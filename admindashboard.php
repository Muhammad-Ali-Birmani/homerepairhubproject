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
        .productcontainer{
            width: 50%;
            height: 40vh;
            background-color: royalblue;
        }
        .showproductdiv{
            position: relative;
            width: 35%;
           
            border-radius: 10px;
            padding: 5vh;
            background: transparent;
            border: 3px solid green;
            margin-left: 10px;
          margin-top: 4px;
        }
        .card {
            position: relative;
            width: 35%;
            height: 78vh;
            border-radius: 10px;
            padding: 5vh;
            background: transparent;
            border: 3px solid green;
            float: right;
            margin-top: 3px;
            margin-right: 5px;
        }

        .login {
            background-color: red;
            position: relative;
            width: 100%;
            height: 5vh;
            border-radius: 10px;
            display: flex;
            justify-content: center;
            align-items: center;

        }

        .logid {
            position: relative;
            width: 100%;
            height: 7vh;
            border-radius: 10px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .logid input {
            position: relative;
            width: 100%;
            height: 7vh;
            border-style: none;
            border-radius: 10px;
            font-size: 20px;

        }

        .logid text {
            position: relative;
            width: 100%;
            height: 10vh;
            border-style: none;
            border-radius: 10px;
            font-size: 20px;
        }

        .card button {
            width: 100%;
            height: 7vh;
            border-style: none;
            border-radius: 10px;
            font-size: 20px;
            cursor: pointer;

        }



        .logid input::placeholder {
            font-size: 17px;
            padding: 4px;
            text-align: center;
        }


        .activeorder{
            width: 80%;
            height : 10vh; 
            background-color: green;
             margin-left: 45px; 
             cursor:pointer; 
             color:red;
             border-radius: 10px;
             margin-top: 10px;
         
        }
        .activeorder button{
            width: 100%;
            height : 10vh; 
            background-color: green;
             cursor:pointer; 
             color:red;
             border-radius: 10px;
             border-style: none;
            
        }


        .mydivofcardshow{
            width: 100%;
            height: 70vh;
            background-color: rgb(35, 47, 62);
            border-radius: 10px;
            margin: 3vh;
        }
        
        .mydivofcardshow button{
            padding: 4vh;
            width: 40%;
            margin-left: 5vh;
            border-radius: 10px;
            margin-top: 0.6vh;
            border-style: none;
            cursor: pointer;
            background-color: green;
            
        }

        .innerimagediv{
            width: 100%;
            height: 58vh;
            
            
        }

        .innerimagediv img{
            width: 100%;
            height: 58vh;
            
            
        }

    </style>
</head>

<body>
    <div class="container">
      
           <div class="card">
           <div style="background-color: aliceblue; color:green; font-size:3vh;text-align: center;"class="login">
                    <h1>Upload a new Product</h1>
                </div>

                <br>
                <form action="admindashboard.php" method="POST" enctype="multipart/form-data">
                    <p style="text-align: center; color:red;">Choose product photo</p>
                <div class="logid">
                    <input type="file" name="pupload" required style="border-radius:0px;">
                </div><br>
                <div class="logid">
                    <input type="text" name="pname" placeholder="product name" required>
                </div><br>
                <div class="logid">
                    <input type="text" name="pprice" placeholder="price" required>
                </div><br>
                <div class="logid">
                    <input type="text" name="pcategory" placeholder="category" required>
                </div>
                <br>
                <div class="logid">
                    <input type="text" name="pcompany" placeholder="company name" required>
                </div>
                <br>
                <div class="logid">
                    <input type="text" name="pweight" placeholder="weight" required>
                </div>

                <br>

                
                <div class="login submitBtn">
                    <button><input style="  cursor: pointer;  width: 100%;  height: 7vh;border-style: none;
                    border-radius: 10px;  font-size: 20px; color:white; background-color:green" type="submit"
                            name="submit" id="submit" value="Upload"></button>

                </div>

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



    if ($_FILES['pupload']['name'] == '' || $pname == '' || $pprice == '' || $pcategory == '' || $pcompany == '' || $pweight == '') {
       return false;
    }
else{

  



    $query = "INSERT INTO  product (imageofproduct ,pname,pprice , pcategory, pcompany , pweight)
    VALUES('$imagename' , '$pname','$pprice','$pcategory','$pcompany' , '$pweight')";
        


     $result = sqlsrv_query($conn, $query);


     if(move_uploaded_file($tempname , $photofolder)){
        echo "<p style='color:red;font-size:18px;text-align:center;'><br>Product uploaded successfully</p>";
    
     }
     else {
        echo "Sorry there occur error while uploading file";

     }


}

}

                  ?>         
                </form>
           </div>
           <div class="showproductdiv">
           <div style="background-color: aliceblue; color:green; font-size:3vh;text-align: center;"class="login">
                    <h1>Product at Store</h1>
                    
                </div>
                <div class="activeorder">

                <button><a href="checkorder.php">Active Order</a></button>
         
            </div>
                <?php 
                $getdataquery = "SELECT * FROM product";
                $getresult = sqlsrv_query($conn, $getdataquery);

                while($row = sqlsrv_fetch_array($getresult, SQLSRV_FETCH_ASSOC)) {

                
                ?>
              
                <div class="mydivofcardshow">
                        <div class="innerimagediv">
                        <img height="150px" width="300px" src="productimages/<?php echo htmlspecialchars($row['imageofproduct'])?>" alt="" ><br>
                        </div>
                        <button><a href="updateproduct.php?product_id=<?php echo $row['product_id']?>">UPDATE</a></button>
                        <button><a href="productdelete.php?product_id=<?php echo $row['product_id']?>">DELETE</a></button>

                    </div>
                

                        <?php } ?>
            </div>
 
    </div>
</body>

</html>
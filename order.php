<?php
include 'header.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order</title>
    <style>
        * {
            font-family: sans-serif;

        }

        .lastdiv {
            position: absolute;
            width: 100%;
            height: 100vh;
            
        } 
        
        .maindiv{
            position: absolute;
            width: 100%;
            background-color: aliceblue;
            margin-top: 10vh;
            justify-content: center;
            align-items: center
        }

        .innerdivcard{
            
            position: relative;
            width: 30%;
            height: 68vh;
            background-color: rgb(35, 47, 62);
            margin-left: 10vh;
            margin-top: 10px;
            border-radius: 10px;
            flex-wrap: wrap;
        }


        .photodiv{
              width: 100%;
                height: 44vh;
                background-color: #4CAF50;
                border-top-left-radius: 10px;
                border-top-right-radius: 10px;
                
        }


        
        .buttondiv{
                    text-align: center;
                    
            }
            .buttondiv button{
                    padding: 13px;
                    border-radius: 5px;
                    outline: none;
                    border-style: none;
                    width: 30%;
                    background-color: #4CAF50;
                    color:white;
            }


        #myimagediv{
            
            background-size: contain;
            width: 100%;
            height: 44vh;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }


         .card {
            position: relative;
            width: 35%;
            height: 40vh;
            border-radius: 10px;
            padding: 5vh;
            background: transparent;
            border: 3px solid green;
            margin-left: 10px;


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

$query = "SELECT C_ID FROM customer";
$result1 = sqlsrv_query($conn, $query);

if ($result1) {
    while ($row1 = sqlsrv_fetch_array($result1, SQLSRV_FETCH_ASSOC)) {
        $C_ID = $row1['C_ID'];
      
    }
} else {
    echo "Error: " . sqlsrv_errors();
}



$product_id = $_GET['product_id'];
$getdataquery = "SELECT * FROM product WHERE product_id = '$product_id'";

$result = sqlsrv_query($conn, $getdataquery);

if (!$result) {
   echo "Sorry no record found";
}

$row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC);
   
?>
<div class="innerdivcard">
<div class="photodiv">
    <img id="myimagediv"  src='productimages/<?php echo $row['imageofproduct']; ?>'>
</div>
<h1 style="text-align: center;color:white"><?php echo $row['pname']; ?></h1>
<div style="text-align: center;color:red"><?php echo "<del>".$row['pprice']+$row['pprice'] . "</del>"?></div>
<h1 style="text-align: center;color:white"><?php echo $row['pprice']; ?>RS</h1>
<br>
</div>

<?php 
echo "<br>";
?>

<div class="card">
            <form action="confirmorder.php" method="POST">
                <div style="background-color: aliceblue; color:green; font-size:3vh;" class="login">
                    <h1>Place your order Now</h1>
                </div>

                <br>
                <div class="logid">
                    <input type="text" name="firstname" placeholder="First name" required autocomplete="off">
                </div><br>
                <div class="logid">
                    <input type="text" name="accountnumber" placeholder="Account number" required autocomplete="off">
                </div>
                <input type="hidden" name="product_id" value="<?php echo $row['product_id']; ?>">
                <input type="hidden" name="price" value="<?php echo $row['pprice']; ?>">
                <br>

                <div class="login submitBtn">
                    <button><input style="  cursor: pointer;  width: 100%;  height: 7vh;border-style: none;
                    border-radius: 10px;  font-size: 20px; color:white; background-color:green" type="submit"
                            name="submit" id="submit" value="Order"></button>

                </div>
                <br>
                <button ><a href="customeraccount.php?" style="color : red;">New Account</a></button>
                <?php

                ?>

            </form>
                    
                    
                            
                    
                
      

        </div>

       <div class="lastdiv">
        <?php
        echo "<br>";
        include 'footer.php';
        ?>
    </div>
   </div>











    

</body>

</html>



















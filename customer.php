<?php 

include 'header.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop now</title>
    <style>


        .maindiv{
            
            position: absolute;
            width: 100%;
            background-color: aliceblue;
            margin-top: 10vh;
            justify-content: center;
            display: flex;
            flex-wrap: wrap;
           
            
        }

        .innerdivcard{
            
            position: relative;
            width: 20%;
            height: 68vh;
            background-color: rgb(35, 47, 62);
            margin-left: 10px;
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
    
    $getdataquery = "SELECT * FROM product ORDER BY product_id DESC";

    


$result = sqlsrv_query($conn, $getdataquery);

while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {
    $pname = $row['pname'];
    $pprice = $row['pprice'];
    $image = $row['imageofproduct'];

    ?>
    <div class="innerdivcard">
        <div class="photodiv">
            <img id="myimagediv"  src='productimages/<?php echo $image; ?>'>
        </div>
        <h1 style="text-align: center;color:white"><?php echo $pname; ?></h1>
        <div style="text-align: center;color:red"><?php echo "<del>".($pprice+$pprice) . "</del>"?></div>
        <h1 style="text-align: center;color:white"><?php echo $pprice; ?>RS</h1>
        <div class="buttondiv">
            <button style="cursor: pointer;"><a href="order.php?product_id=<?php echo $row['product_id']; ?>">Order Now</a></button>
        </div>
    </div>
    <?php
}
?>
    

 

    </div>
            
</body>
</html>


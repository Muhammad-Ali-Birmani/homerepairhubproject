<?php 
include 'header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hire Plumber</title>
    <style>
        .maindiv{
            position: absolute;
            margin-top: 10vh;
            width: 100%;
            background-color: aliceblue;
            display: flex;
            flex-wrap: wrap;
            
            
        }

        .innerdiv{
            position: relative;
            width: 25%;
            height: 70vh;
            background-color: rgb(35, 47, 62);
            margin: 20px;
            border-radius: 10px;
            align-items: center;
            justify-content: center;
            
        }
        .imagediv{
            margin-left: 15vh;
            position: relative;
            width: 50%;
            height: 40%;
            border-radius: 50%;
            
        }

        .namediv{
            position: relative;
            width: 100%;
            height: 10vh;
            
        }

        .city{
         /* margin-top: 10px; */
        }

        .descriptiondiv{
            margin-top: px;
            height: 20vh;
            border-radius: 10px;
        }

        .buttondiv{
            position: absolute;
            width: 100%;
            background-color: red;
            height: 10vh;
            margin-top: 10vh;
            border-radius: 10px;
        }

        .buttondiv button{
            position: absolute;
            width: 100%;
            background-color: green;
            height: 10vh;
            color: white;
            border-radius: 10px;
            border-style: none;
            cursor: pointer;
            font-size: 20px;
        }

    </style>
</head>
<body>

    <div class="maindiv">
    <?php 
        $servername = 'DESKTOP-3KIPTC6\SQLEXPRESS';
        $connectionoption = [
            "Database"=>"homerepairhub",
            "Uid"=> "",
            "PWD"=> ""
        ];

        $conn = sqlsrv_connect($servername, $connectionoption);
        if (!$conn ) {
            echo "Connection Failed";
        }
        else{
            
           // echo"Connection is successfully Build";
        }

        $query = "SELECT * FROM plumber";
        $result = sqlsrv_query($conn, $query);

        if (!$result) {
            echo "Query Execution Failed";
        }
        else{
           // echo "Query Execution Successfully";
        }

        while ($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {
            $fname =  $row['pfirstname'];
            $lname =  $row['plastname'];
            $city = $row['city'];
            $imageofplumber = $row['imageofplumber'];

        

        ?>


                <div class="innerdiv">
                <div class="imagediv">
                        <img src='imageofplumbers/<?php echo $imageofplumber; ?>' alt="" width="100%" height="100%" style="border-radius: 50%;object-fit: cover;">
                </div>

                <div class="namediv">
                        <h1 style="text-align: center;color:white"> <?php echo $fname . " " .$lname  ?></h1>
                </div>

                <div class="namediv city">
                        <h1 style="color:white">City: <?php echo $city?></h1>
                </div>

                
                <div class="namediv descriptiondiv">
                    <p style="text-align: center;color:white">I am Plumber with 10 year professional experience <br>
                    I will done your job with full satisfaction.
                </p>
                <div class="buttondiv">
                        <button><a  href="hirenownotify.php">Hire now</a></button>
                </div>

                </div>



        </div>
        <?php
        }
        ?>

    </div>
</body>
</html>
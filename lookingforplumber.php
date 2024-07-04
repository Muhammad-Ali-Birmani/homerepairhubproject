<?php
include 'header.php';
echo "<br>";
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
            align-items: center;
        
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
       


<div class="card">
            <form action="" method="POST">
                <div style="background-color: aliceblue; color:green; font-size:3vh;" class="login">
                    <h1>Ensure Account First</h1>
                </div>

                <br>
                <div class="logid">
                    <input type="text" name="firstname" placeholder="First name" required autocomplete="off">
                </div><br>
                <div class="logid">
                    <input type="text" name="accountnumber" placeholder="Account number" required autocomplete="off">
                </div>
                
                <br>

                <div class="login submitBtn">
                    <button><input style="  cursor: pointer;  width: 100%;  height: 7vh;border-style: none;
                    border-radius: 10px;  font-size: 20px; color:white; background-color:green" type="submit"
                            name="submit" id="submit" value="Hire now"></button>

                </div>
                <br>
                <button ><a href="customeraccount.php?" style="color : red;">New Account</a></button>
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


if (isset($_POST['firstname']) && isset($_POST['accountnumber'])) {
    $firstname = $_POST['firstname'];
  $accountnumber = $_POST['accountnumber'];


 




$query = "SELECT firstname , accountnumber FROM customer";
$result = sqlsrv_query($conn, $query);

if (!$result) {
  echo "Query not Run";
} else {
    
    while ($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {
        if ($row['firstname']==$firstname && $row['accountnumber']==$accountnumber) {

            //echo "<script>window.location.href = 'admindashboard.php';</script>";
            echo "<script>window.location.href='plumbershown.php'</script>";
            exit();
           
        }
    }
  
    echo "<pre style='color:red'>                                       Invalid Credential</pre>";

}
}



echo "<br>"

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
<?php
include 'header.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
        * {
            font-family: sans-serif;

        }

        .containerfirst {
            position: absolute;
            width: 100%;
            height: 90vh;
            background-color: #333;
            margin-top: 10vh;
            box-shadow: 5px 5px 5px 5px green;
            display: flex;
        }

        .containerfirst img {
            position: absolute;
            width: 100%;
            height: 90vh;
            object-fit: fit;

        }

        .innerfirst {
            position: relative;
            width: 50%;
            height: 50vh;
            border-radius: 10px;
            margin-top: 20vh;
        }

        .innerfirst button {
            position: relative;
            cursor: pointer;
            border-radius: 5px;
            padding: 19px;
            background-color: #4CAF50;
            color: white;
            border-style: none;
            width: 45%;
            font-size: 20px;
            padding: 20px;
            margin: 10px;

        }

        .lastdiv {
            position: absolute;
            width: 100%;
            height: 100vh;
            margin-top: 100vh;
        }
    </style>
</head>

<body>
    <div class="containerfirst">

        <img src="backimg.jpg" alt="">
        <div class="innerfirst">
            <h1 style="font-size: 40px; color:white; margin-left:15vh">Login as</h1>
            <div class="firstbutton">
                <button><a href="admin.php">Admin</a></button><br>
                <button><a href="plumberaccount.php">Plumber</a></button><br>
                <button><a href="customeraccount.php">Customer</a></button><br>

            </div>

        </div>
        <div class="innerfirst" style=" text-align: right">
            <h1 style="font-size: 40px; color:white;margin-right:20vh;">Here</h1>
            <div class="firstbutton">
                <button><a href="customer.php">Purchase now</a></button><br>
                <button><a href="lookingforplumber.php">Looking for Plumber</a></button><br>


            </div>

        </div>
    </div>


    <div class="lastdiv">
        <?php
        include 'footer.php';
        ?>
    </div>

</body>

</html>
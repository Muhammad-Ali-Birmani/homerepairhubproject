<?php
include 'header.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <style>
        * {
            font-family: sans-serif;
        }

        .maindiv {
            position: absolute;
            width: 100%;
            height: 90vh;
            margin-top: 10vh;
            background-color: aliceblue;
            display: flex;
            text-align: center;
            justify-content: center;
            align-items: center;
        }

        .card {
            position: relative;
            width: 35%;
            height: 74vh;
            border-radius: 10px;
            padding: 5vh;
            background: transparent;
            border: 3px solid green;
        }

        .card label {
            font-size: 18px;
            color: red;
        }

        .card a {
            color: blue;
        }

        .login {
            position: relative;
            width: 100%;
            height: 10vh;
            border-radius: 10px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .logid {
            position: relative;
            width: 100%;
            height: 10vh;
            border-radius: 10px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .logid input {
            position: relative;
            width: 100%;
            height: 8vh;
            border-style: none;
            border-radius: 10px;
            font-size: 20px;
            padding: 6px;
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
            height: 10vh;
            border-style: none;
            border-radius: 10px;
            font-size: 20px;
            cursor: pointer;
        }

        .logid input::placeholder {
            font-size: 20px;
            padding: 5px;
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="maindiv">
        <div class="card">
            <form action="admin.php" method="POST">
                <div style="background-color: aliceblue; color:green; font-size:4vh;" class="login">
                    <h1>Log In</h1>
                </div>
                <br>
                <div class="logid">
                    <input name="user_idnumber" type="password" placeholder="National Identity number" required>
                </div>
                <br>
                <div class="logid">
                    <input name="usergmail" type="text" placeholder="Gmail" required>
                </div>
                <br>
                <div class="login">
                    <a style="color:red" href="">forget password</a>
                </div>
                <br>
                <div class="login">
                    <button type="submit" name="submit"
                        style="cursor: pointer; width: 100%; height: 9vh; border-style: none; border-radius: 10px; font-size: 20px; color:white; background-color:green">Log
                        In</button>
                </div>
                <br>
                <a style="color: blue;" href="superadmin.php">apply for new account</a>
                <?php
                if (!empty($error_message)) {
                    echo "<p style='color:red;'>$error_message</p>";
                }
                ?>
            </form>
            
            <?php

$servername = "DESKTOP-3KIPTC6\SQLEXPRESS";
$connectionoption = [
    "Database"=>"homerepairhub",
    "Uid"=> "",
    "PWD"=> ""
];

$conn = sqlsrv_connect($servername, $connectionoption);

if (!$conn) {
    die( print_r( sqlsrv_errors(), true));
    echo "Connection Failed";
}

else{
    // echo "Connection is Successfully Build";
}

if (isset($_POST["submit"])) {
    $id_number = $_POST['user_idnumber'];
    $gmail_account = $_POST['usergmail'];

    if ($id_number == '' || $gmail_account=='') {
        return false;
    }


    $query = "SELECT id_number,gmail_id FROM superadmin WHERE id_number = '".$id_number."' AND gmail_id='".$gmail_account."'";

$result = sqlsrv_query($conn, $query);

$row_count = sqlsrv_num_rows($result);


if ($result) {
    while ($row = sqlsrv_fetch_array($result)) {
        if ($row['id_number']==$id_number && $row['gmail_id']==$gmail_account) {
            echo "<script>window.location.href = 'admindashboard.php';</script>";
            exit();
        }
    }
    echo "Data not found."; 
} else {
    echo "Invalid credentials.";
}

}

?> 

<?php 

// $servername = "DESKTOP-3KIPTC6\SQLEXPRESS";
// $connectionoption = [
//     "Database"=>"homerepairhub",
//     "Uid"=> "",
//     "PWD"=> ""
// ];

// $conn = sqlsrv_connect($servername, $connectionoption);


// if (!$conn) {

//     die( print_r( sqlsrv_errors(), true));
//     echo"Connection Failed";
// }

// else{
//     //  echo "Connection is Successfully Build";
// }
    
// if (isset($_POST["submit"])) {
   
//    $id_number = $_POST['user_idnumber'];
//   $gmail_account = $_POST['usergmail'];
   
//     if ($id_number == '' || $gmail_account=='') {
//         return false;
//     }
 
// }

//  $query = "SELECT id_number,gmail_id FROM superadmin WHERE id_number = '".$id_number."'  AND  gmail_id='".$gmail_account."'";

// $result = sqlsrv_query($conn, $query);

//     if ($result) {
//          header("Location: admindashboard.php");
//             exit();
//         } else {
//             echo "Invalid credentials.";
//         }
    
    
   
?>

        </div>
    </div>
</body>

</html>








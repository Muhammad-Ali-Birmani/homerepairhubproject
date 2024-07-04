
<?php
include 'header.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Super Admin</title>
    <style>
        * {
            font-family: sans-serif
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
            height: 78vh;
            border-radius: 10px;
            padding: 5vh;
            background: transparent;
            border: 3px solid green;


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

        .checkdiv {
            position: absolute;
            width: 100%;
            height: 100vh;
            background-color: cadetblue;
            margin-top: 100vh;
        }
    </style>
</head>

<body>
    <div class="maindiv">
        <div class="card">
            <form action="superadmin.php" method="POST">
                <div style="background-color: aliceblue; color:green; font-size:3vh;" class="login">
                    <h1>Apply for Super Admin</h1>
                </div>

                <br>
                <div class="logid">
                    <input type="text" name="first_name" placeholder="First name" required>
                </div><br>
                <div class="logid">
                    <input type="text" name="last_name" placeholder="Last name" required>
                </div><br>
                <div class="logid">
                    <input type="text" name="id_number" placeholder="National Identity Number" required>
                </div><br>
                <div class="logid">
                    <input type="text" name="gmail_account" placeholder="Gmail ID" required>
                </div>
                <br>
                <div class="logid">
                    <input type="password" name="password" placeholder="password" required>
                </div>
                <br>
                <div class="logid">
                    <input type="password" name="re_password" placeholder="re-enter password" required>
                </div>

                <br>



                <?php

                echo "<script> 
                var mytxt = document.getElementById('shwmsg');
                mytxt.innerContent = 'Working';
</script>";
                ?>


                <div class="login submitBtn">
                    <button><input style="  cursor: pointer;  width: 100%;  height: 7vh;border-style: none;
                    border-radius: 10px;  font-size: 20px; color:white; background-color:green" type="submit"
                            name="submit" id="submit" value="Register"></button>

                </div>
                <br>
                <p id="shwmsg">already have an account <a style="color:red" href="admin.php">Log In</a></p>
                <?php

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
                        echo"Connection Failed";
                    }
                    
                    else{
                         //echo "Connection is Successfully Build";
                    }
                        
                    
                    
                    if (isset($_POST["submit"])) {


                        $first_name = $_POST['first_name'];
                        $last_name = $_POST['last_name'];
                        $id_number = $_POST['id_number'];
                        $gmail_account = $_POST['gmail_account'];
                        $password = $_POST['password'];
                        $re_password = $_POST['re_password'];
                        
                        
            
                    
            
            
                        if ($first_name == '' || $last_name == '' || $id_number == '' || $gmail_account == '' || $password == '' || $re_password == '') {
            
                        
                            return false;
                        }
                        else{
                
                            if ($password!=$re_password) {
                                echo "password does not match";
                                return false;
                            }
                
                
                
                            $query = "INSERT INTO superadmin (first_name ,last_name,id_number , gmail_id, [password] , re_password)
                            VALUES('$first_name' , '$last_name','$id_number','$gmail_account','$password' , '$re_password')";
                                
                
                
                             $result = sqlsrv_query($conn, $query);
                        
                       
                        if (!$result) {
                                echo"Sorry try again";
                        } 
                        else {
                                echo "Account is Successfully Created";
                            }
                            
                
                        }
                    
                    }
                            
                    
                ?>
      

        </div>
    </div>


   
        
    </div> 
</body>



</html>
























<?php


        // $first_name = $_POST['first_name'];
        // $last_name = $_POST['last_name'];
        // $id_number = $_POST['id_number'];
        // $gmail_account = $_POST['gmail_account'];
        // $password = $_POST['password'];
        // $re_password = $_POST['re_password'];



        // //  $connection = mysqli_connect("localhost", "root", "", "homerepairhub");


        // if ($connection) {
        //     echo "<h1>" . "Successfully" . "</h1>";

        // }


        

        // // check if already admin exists then stop to create new account
        
        // // $checkexistadmin = "SELECT  gmail_id , id_number FROM `superadmin`WHERE id_number = '" . $id_number . "' AND gmail_id = '" . $gmail_account . "'";

        // // if ($checkexistadmin > 0) {
        // //     echo "<script>
        // //         alert('Sorry try differnet gmail or ');
        // //         </script>";
        // //     return false;
        // // }
        

        // $query = "insert into `superadmin`(`first_name` , `last_name` , `id_number` , `gmail_id` , `password` , `re_password`) values(
        //             '$first_name' , '$last_name' , '$id_number' , '$gmail_account' , '$password' , '$re_password'
        //         )";

        // $datasubmitted = mysqli_query($connection, $query);

        // if ($datasubmitted) {
        //     echo "<script>
        //             alert('Account is successfully created');
        //             </script>";

        // } else {
        //     echo "<script>
        //             alert('Account creation failed \n Try Again');
        //             </script>";
        // }






        ?>
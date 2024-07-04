
<?php
include 'header.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CustomerAccount </title>
    <style>
        * {
            font-family: sans-serif
        }

        .maindiv {
            position: absolute;
            width: 100%;
            height: 135vh;
            margin-top: 10vh;
            background-color: aliceblue;
            display: flex;
            text-align: center;
            justify-content: center;
            align-items: center;
        }

        .card {
            position: relative;
            width: 30%;
            height: 121vh;
            border-radius: 10px;
            padding: 5vh;
            background: transparent;
            border: 3px solid green;
            justify-content: center;
            display: flex;

        }



        .login {
            flex-wrap: wrap;
            background-color: red;
            position: relative;
            width: 100%;
            height: 5vh;
            border-radius: 10px;
            align-items: center;

        }

        .logid {
            position: relative;
            flex-wrap: wrap;
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
            <form action="plumberaccount.php" method="POST" enctype="multipart/form-data">
                <div style="background-color: aliceblue; color:green; font-size:2.5vh;" class="login">
                    <h1>Your Plumber Account</h1>
                </div>

                <br>
                <div class="logid">
                    <input type="text" name="pfirstname" placeholder="first name" required>
                </div><br>
                <div class="logid">
                    <input type="text" name="plastname" placeholder="last name" required>
                </div><br>
                <div class="logid">
                    <input type="date" name="pdateofbirth" placeholder="date of birth" required>
                </div><br>
                <div class="logid">
                    <input type="text" name="pgmail" placeholder="gmail" required>
                </div><br>
                <label style="color:red" for="city">select city</label>
                <div class="logid">
                    <select style="padding: 10px; border-radius:10px;" name="city" id="city">
                        <option value=""></option>
                        <option value="Dera Ghazi Khan">dera ghazi khan</option>
                        <option value="Multan">multan</option>
                        <option value="Lahore">lahore</option>
                        <Karachi value="Karachi">Karachi</option>
                        <option value="Faisalabad">faisalabad</option>
                    </select>
                </div><br>
                <div class="logid">
                    <input type="text" name="identitynumber" placeholder="identity number" required>
                </div><br>
                       <div class="logid">
                    <input type="text" name="contactnumber" placeholder="contact number" required>
                </div><br>
                <label style="color:red" for="uploadimage">upload your photo</label>
                <div class="logid">
                    <input type="file" name="imageofplumber" placeholder="image" required>
                </div><br>
                <div class="logid">
                    <input type="password" name="ppassword" placeholder="password" required>
                </div>
                <br>
                <div class="logid">
                    <input type="password" name="confirmpassword" placeholder="re-enter password" required>
                </div>

                <br>

                <?php

         
                ?>

                <div class="login submitBtn">
                    <button><input style="  cursor: pointer;  width: 100%;  height: 7vh;border-style: none;
                    border-radius: 10px;  font-size: 20px; color:white; background-color:green" type="submit"
                            name="submit" id="submit" value="Register"></button>

                </div>
                <br>
                <p id="shwmsg">already have an account <a style="color:red" href="">Log In</a></p>

                <?php 
                    $servername = "DESKTOP-3KIPTC6\SQLEXPRESS";
                    $connectionoption = [
                        "Database"=>"homerepairhub",
                        "Uid"=> "",
                        "PWD"=> ""
                    ];
                    
                    $conn = sqlsrv_connect($servername, $connectionoption);
                    
                    
                    if (!$conn) {
                    
                     echo "Connection Failed";
                    }
                    
                    else{
                         //echo "Connection is Successfully Build";
                    }
                                            
                    if (isset($_POST["submit"])) {

                        $imageofplumber = $_FILES["imageofplumber"]["name"];
                        $tempname = $_FILES["imageofplumber"]["tmp_name"];
                        $photofolder = 'imageofplumbers/'.$imageofplumber;
                        $pfirstname = $_POST['pfirstname'];
                        $plastname = $_POST['plastname'];
                        $gmail = $_POST['pgmail'];
                        $identitynumber = $_POST['identitynumber'];
                        $ppassword = $_POST['ppassword'];
                        $confirmpassword = $_POST['confirmpassword'];
                        $contactnumber = $_POST['contactnumber'];
                        $pdateofbirth = $_POST['pdateofbirth'];
                        $city =$_POST['city'];


                    
                        
            
                        if ($_FILES['imageofplumber']['name'] == '' || $pfirstname == '' || $plastname == '' || $gmail == '' || $identitynumber == '' || $ppassword == '' || $confirmpassword == '' ||
                        $contactnumber == ''|| $pdateofbirth == ''|| $imageofplumber == ''|| $city == '') {
            
                        
                            return false;
                        }
                        
                
                         if ($ppassword!=$confirmpassword) {
                             echo "password does not match";
                            return false;
                          }
                
                
                            $currentDateTime = date("Y-m-d H:i:s");
                             
                            $setStatus = 'inactive';

                             $setStatus;
                
                            $query = "INSERT INTO plumber (pfirstname ,plastname,pgmail , identitynumber, ppassword , confirmpassword,
                            contactnumber,pdateofbirth,imageofplumber,dateofaccountcreation,pstatus,city)
                            VALUES('$pfirstname' , '$plastname','$gmail','$identitynumber','$ppassword' , '$confirmpassword',
                            '$contactnumber','$pdateofbirth','$imageofplumber','$currentDateTime','$setStatus','$city')";
                                
                             $result = sqlsrv_query($conn, $query);
                        
                       
                      
                        if (!$result) {
                            echo "Sorry Query Not Run";
                        }

                        else{
                            if (move_uploaded_file($tempname,$photofolder)) {
                                echo "<p style='color:red;font-size:18px;text-align:center;'><br>Account is Created  successfully</p>";
                                }
                           
                               else{
                                       echo "Sorry there occur error while uploading file";
                                    }

                        }
                        
      
                        
                        
                        
            }
                      
                    
                           
                ?>
       

            </form>
              </div>
    </div> 
    </div> 
</body>
</html>
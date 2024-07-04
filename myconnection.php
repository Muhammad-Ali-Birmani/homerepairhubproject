<?php

$server = "localhost";
$username = "root";
$password = "";
$dbname = "homerepairhub";

$connection = mysqli_connect($server, $username, $password, $dbname);
if (!$connection)
    echo "<h1>connection failed</h1>";


?>
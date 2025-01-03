<?php

$host_name  = 'localhost';
$host_username = 'root';
$host_password = "";
$db_name = "SpecLab_Demo";
$db_connection = mysqli_connect($host_name,$host_username,$host_password,$db_name);

// $conn = new mysqli($servername, $username, $password);
// if ($conn->connect_error) {
//     die("Connection Failed: ". $conn->connect_error);
// }
// else{
//     echo"Connection Established";
//     mysqli_select_db($conn, $dbname);
// }
?>
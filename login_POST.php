<?php 
session_start();

require "DBconnect.php";

$email = $_POST['email'];
$password = $_POST['password'];

$verify_user = "SELECT * FROM Customers WHERE U_Email='$email' AND U_Password='$password'";
$result = mysqli_query($db_connection, $verify_user);

if($result->num_rows>0){
    $row = mysqli_fetch_assoc($result);
    $_SESSION['id'] = $row['U_ID'];
    if($row['U_Type']== 'Admin'){
        header("Location: homeAdmin.php");
    }
    else{
        header('Location: home.php');
        exit();
    }
}

else{
    echo'Incorrect Email or Password!';
}

?>
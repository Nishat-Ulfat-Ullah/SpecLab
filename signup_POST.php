<?php 
session_start();

require "DBconnect.php";



$first_name = $_POST['firstname'];
$second_name = $_POST['secondname'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];
$u_type = 'User';

if(isset($_POST['submit'])){
    $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
}

$upper=preg_match('@[A-Z]@',$password);
$lower=preg_match('@[a-z]@',$password);
$num=preg_match('@[0-9]@',$password);
$phnupper=preg_match('@[A-Z]@',$$phone);
$phnlower=preg_match('@[a-z]@',$phone);


$flag = false;


if (!filter_var($email,FILTER_VALIDATE_EMAIL)){
    $flag = true;
    $_SESSION['email_err'] = 'Please Enter A Valid Email!';
}
if (strlen($password)<8){
    $flag = true;
    $_SESSION['pass_err'] = 'Password Must Contain 8 Characters';
}
elseif(!$upper){
    $flag = true;
    $_SESSION['pass_err'] = 'Password Must Contain A Uppercase!';
}
elseif(!$lower){
    $flag = true;
    $_SESSION['pass_err'] = 'Password Must Contain A Lowercase!';
}
elseif(!$num){
    $flag = true;
    $_SESSION['pass_err'] = 'Password Must Contain A Number!';
}
if($phnupper){
    $flag = true;
    $_SESSION['phn_err'] = "Enter Valid Phone Number";
}
elseif($phnlower){
    $flag = true;
    $_SESSION['phn_err'] = "Enter Valid Phone Number";
}
if($cpassword != $password ) {
    $flag = true;
    $_SESSION['cpass_err'] = "Passwords Didn't Match";
}
if($flag){
    header('location:signup.php');
}
else{
    $insert = "INSERT INTO Customers(U_First_Name,U_Last_Name,U_Phone,U_Email,U_Password,U_Type,U_Pic) VALUES('$first_name','$second_name','$phone','$email','$password','$u_type','$image')";
    mysqli_query($db_connection,$insert);
    //$_SESSION['succ'] = 'User Successfully Registered';
    header("Location:logIn.php");
}




?>
<?php 

session_start();
require "DBconnect.php";

$p_name = $_POST["p_name"];
$p_quantity = $_POST["p_quantity"];
$p_price = $_POST["p_price"];
$p_type = $_POST["p_type"];
$p_brand = $_POST["brand"];

if(isset($_POST['submit'])){
    $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
}

$flag = False;

if(empty($p_name)){
    $flag = True;
    $_SESSION["nam_err"] = "Enter Product Name";
}

if ($p_quantity<0){
    $flag = True;
    $_SESSION["qnt_err"] = "Enter Product Quantity";
}

if (empty($p_price)){
    $flag = True;
    $_SESSION["prc_err"] = "Enter Product Price";
}

if ($p_type == "None"){
    $flag = True;
    $_SESSION["pt_err"] =  "Select Product Type";
}


else{
    $query = "INSERT INTO items(I_Name,I_Type,I_quantity,I_Brand,I_Price,img) VALUES('$p_name','$p_type','$p_quantity','$p_brand','$p_price','$image')";
    mysqli_query($db_connection,$query);
    header("Location:register_items.php");
}

?>
<?php

require "DBconnect.php";

if(isset($_POST['drop'])){
    $query = "DELETE FROM items WHERE I_Name ='{$_POST['i_name']}'";
    mysqli_query($db_connection,$query);
    header('Location:itemsAdmin.php');
}

?>
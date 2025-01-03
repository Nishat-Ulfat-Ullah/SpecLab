<?php 

require "DBconnect.php";
session_start();


if (isset($_SESSION['id'])){
    $userID = $_SESSION['id'];

    $user_query = "SELECT * FROM Customers WHERE U_ID=$userID";
    $result_user = mysqli_query($db_connection, $user_query);
    $row2 = mysqli_fetch_assoc($result_user);

    $UFname = $row2["U_First_Name"];
    $ULname = $row2["U_Last_Name"];
    $contact = $row2["U_Phone"];
    $userPIC = $row2["U_Pic"];
    
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="userpr.css">
    <title>User Profile</title>
</head>
<body>
    <nav>
        <a href="home.php" class="logo">SpecLab Logo</a>
        <div class="links">
            <a href="home.php">Home</a>
            <a href="#">Feature Builds</a>
            <a href="#">About Us</a>
            <a href="#">FeedBack</a> 
        </div>
    </nav>
    <div class="maintext">
        <h1 >User Profile Dashboard</h1>
    </div>
    <header>
        <div class="left">
            <div class="wrapper">
                <form action="signup_POST.php" method="POST" enctype="multipart/form-data">
                    
                    <div class="input-box">
                        <h2><?=$row2["U_First_Name"]?> <?=$row2["U_Last_Name"]?></h2>
                        <hr>
                    </div>
                    <div class="input-box">
                        <h2><?=$row2["U_Phone"]?></h2>
                        <hr>
                    </div>
                    <div class="input-box">
                        <h2><?=$row2["U_Email"]?></h2>
                        <hr>
                    </div>
                </form>
                <button type="submit" name='submit' class="btn">Edit Profile</button>
            </div>    
            
        </div>
        <div class="uimage">
            <?php echo '<img src="data:image;base64,'.base64_encode($row2["U_Pic"]).'" class=uimage>'; ?>
        </div>
        
    </header>

</body>
</html>
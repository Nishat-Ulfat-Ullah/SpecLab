
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
    <link rel="stylesheet" href="home.css">
    <title>Home</title>
</head>
<body>

    <nav>
        <a href="#" class="logo">SpecLab Logo</a>
        <div class="links">
            <a href="home.php">Home</a>
            <a href="#">Feature Builds</a>
            <a href="#">About Us</a>
            <a href="#">FeedBack</a> 
        </div>
        <img src="asset/options.png" class="user-pic" onclick="toggleMenu()">
        <div class="sub-menu-wrapper" id="subMenu">
            <div class="sub-menu">
                <div class="user-info">
                    <?php echo '<img src="data:image;base64,'.base64_encode($row2["U_Pic"]).'" class=uimage>'; ?>
                    <h2><?=$row2["U_First_Name"]?> <?=$row2["U_Last_Name"]?></h2>
                </div>
                <hr>
                <a href="userprofile.php" class="sub-menu-link">
                    <img src="asset/profile.png">
                    <p>My Profile</p>
                    <span>></span>
                </a>

                <a href="" class="sub-menu-link">
                    <img src="asset/settings.png">
                    <p>Settings & Privacy</p>
                    <span>></span>
                </a>

                <a href="" class="sub-menu-link">
                    <img src="asset/support.png">
                    <p>Help & Support</p>
                    <span>></span>
                </a>

                <a href="login.php" class="sub-menu-link">
                    <img src="asset/logout.png">
                    <p>Logout</p>
                    <span>></span>
                </a>
            </div>
        </div>
        
    </nav>

    <header>
        <div class="left">
            <h1>LET's BUILD <span>TOGETHER!</span></h1>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Error deserunt laborum rem vel expedita odit dolores, pariatur impedit  
            </p>
            <a href="#">
                <i class='bx bx-wrench' ></i>
                <span>Build Now</span>
            </a>
        </div>
        <img src="asset/header.png">
    </header>
    
    <h2 class="separator">
        Build Your Dream PC
    </h2>
    <div class="self-nft">
        <div class="item">
            <div class="header">
                <i class='bx bxs-badge-dollar' ></i>
                <h5><a href="built_pc.php" >Purchase PC</a></h5>
            </div>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laborum ipsum illum suscipit aspernatur dignissimos iste placeat ad illo debitis quod.
            </p>
        </div>
        <div class="item"><a href="items.php" >
            <div class="header">
                <i class='bx bxs-bot' ></i>
                <h5><a href="items.php" >Purchase Components</a></h5>
            </div>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laborum ipsum illum suscipit aspernatur dignissimos iste placeat ad illo debitis quod.
            </p>
            </a>
        </div>
        <div class="item">
            <div class="header">
                <i class='bx bxs-cog' ></i>
                <h5>Custom Build</h5>
            </div>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laborum ipsum illum suscipit aspernatur dignissimos iste placeat ad illo debitis quod.
            </p>
        </div>
    </div>
    <h2 class="separator">
        Top Rated Builds
    </h2>

    <div class="trate-builds">
        <div class="category">
            <a href="#">Workstation</a>
            <a href="#">Gaming</a>
            <a href="#">Hybrid</a>
            <a href="#">Overall</a>
        </div>
        <div class="build-list">
            <div class="item">
                <img src="asset/header.png" >
                <div class="info">
                    <div>
                        <h5>Build01</h5>
                        <div class="bdt">
                            <i class='bx bx-money' ></i>
                            <p>0.00 BDT</p>
                        </div>
                    </div>
                    <p>5 of 33</p>
                </div>
                <div class="view">
                    <p>Buy now</p>
                    <a href="#">View</a>
                </div>
            </div>
            <div class="item">
                <img src="asset/header.png" >
                <div class="info">
                    <div>
                        <h5>Build01</h5>
                        <div class="bdt">
                            <i class='bx bx-money' ></i>
                            <p>0.00 BDT</p>
                        </div>
                    </div>
                    <p>5 of 33</p>
                </div>
                <div class="view">
                    <p>Buy now</p>
                    <a href="#">View</a>
                </div>
            </div>
            <div class="item">
                <img src="asset/header.png" >
                <div class="info">
                    <div>
                        <h5>Build01</h5>
                        <div class="bdt">
                            <i class='bx bx-money' ></i>
                            <p>0.00 BDT</p>
                        </div>
                    </div>
                    <p>5 of 33</p>
                </div>
                <div class="view">
                    <p>Buy now</p>
                    <a href="#">View</a>
                </div>
            </div>
            <div class="item">
                <img src="asset/header.png" >
                <div class="info">
                    <div>
                        <h5>Build01</h5>
                        <div class="bdt">
                            <i class='bx bx-money' ></i>
                            <p>0.00 BDT</p>
                        </div>
                    </div>
                    <p>5 of 33</p>
                </div>
                <div class="view">
                    <p>Buy now</p>
                    <a href="#">View</a>
                </div>
            </div>
            
        </div>
    </div>




<script>
    let subMenu = document.getElementById("subMenu");
    function toggleMenu(){
        subMenu.classList.toggle("open-menu");
    }
</script>

</body>
</html>
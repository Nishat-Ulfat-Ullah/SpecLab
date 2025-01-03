<?php

require 'conn.php';

$query="SELECT * FROM PC_BUILT";
$res=mysqli_query($db_connection,$query);
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SpecLab</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="items.css" rel="stylesheet" >
    <link href="home.css" rel="stylesheet" >
    </head>
  <body>
    
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class='container-fluid'> 
        <a href="#" class="logo">SpecLab</a>
        <div class='d-flex justify-content-center'>
          <div class="links" >
              <a href="home.php ">Home</a>
              <a href="#">Feature Builds</a>
              <a href="#">About Us</a>
              <a href="#">FeedBack</a> 
          </div>  
        </div>   
        <form class="d-flex justify-content-right" role="search" action="" method='GET'>
          <input class="form-control me-2" name='srch' value="<?= isset($_GET['srch']) ? $_GET['srch'] : '' ?>" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
        
      </div>
              
        
      </nav>
      <form>
      
      <form>
        <div class="d-flex justify-content-end  mt-2 container-fluid">
          <div class="dropdown ">
            <select class="form-select" Name="cat" aria-label="Default select example">
              
              <option selected>Default</option>
              <option value="1">High to Low (Price)</option>
              <option value="2">Low to High (Price)</option>
            
            </select>
            <button type="submit" class="btn btn-primary btn-sm ms-2">Sort</button>
          </div>
        </div>
      </form>
      <div class="trate-builds">
        <div class="category">
            <a href="#">Workstation</a>
            <a href="#">Gaming</a>
            <a href="#">Hybrid</a>
            <a href="#">Overall</a>
        </div>
        <div class="build-list">
            <?php while($row=mysqli_fetch_assoc($res)){ ?>
            <div class="item">
                <img src="asset/header.png" >
                <div class="info">
                    <div>
                        <h5><?=$row['PC_Name']?></h5>
                        <div class="bdt">
                            <i class='bx bx-money' ></i>
                            <p>Price: <?=$row['PC_Price']?>BDT</p>
                        </div>
                    </div>
                </div>
                <form action="built_pc_post.php" method="POST">
                    <div class="mb-3">
                        <input type="hidden" name="i_name" value="<?=$row['PC_ID']?>">
                        <button type="submit" name='add' class="btn btn-primary">Add To Cart</button>    
                    </div>
                    <div class="mb-3">
                        <input type="hidden" name="prebuilt" value="<?=$row['PC_ID']?>">
                        <button type="submit" name='view' class="btn btn-primary">View</button>
                    </div>
                </form>
            </div>
        </div>
          
            
            
        </div>
        <?php } ?>
      </div>
        
  


        

                
    




    </div> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>




</html>
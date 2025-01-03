<?php

require 'conn.php';

$searchTerm = '';  

$sql1 = "SELECT * FROM products p JOIN items i ON p.P_ID = i.I_type";
if(isset($_GET['srch']) && !empty($_GET['srch'])) {
    $searchTerm = mysqli_real_escape_string($db_connection, $_GET['srch']);
    $sql1 = "SELECT * FROM products p JOIN items i ON p.P_ID = i.I_type WHERE i.I_Name LIKE '%" . $searchTerm. "%' OR i.I_Brand LIKE '%" . $searchTerm . "%'";
    
    ///$sql1 = "SELECT * FROM products p JOIN items i ON p.P_ID = i.I_type WHERE i.I_Name LIKE '%" . $_GET['srch'] . "%' OR i.I_Brand LIKE '%" . $_GET['srch'] . "%'"; 
} 

elseif(isset($_GET['cat']) && $_GET['cat']!="Default"){

  if($_GET['cat']==1){
    $sql1="SELECT * FROM products p JOIN items i ON p.P_ID = i.I_type ORDER BY i.I_Price DESC";


  }
  else{
    $sql1="SELECT * FROM products p JOIN items i ON p.P_ID = i.I_type ORDER BY i.I_Price ASC";


  }
;


}

//else {
    
    ///$sql1 = "SELECT * FROM products p JOIN items i ON p.P_ID = i.I_type";
//}

$res=mysqli_query($db_connection, $sql1);


?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SpecLab</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="itemsAdmin" rel="stylesheet" >
    <link href="home.css" rel="stylesheet" >
    </head>
  <body>
    
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class='container-fluid'> 
        <a href="#" class="logo">SpecLab</a>
        <div class='d-flex justify-content-center'>
          <div class="links" >
              <a href="homeAdmin.php ">Home</a>
              <a href="#">Feature Builds</a>
              <a href="#">About Us</a>
              <a href="#">FeedBack</a> 
          </div>  
        </div>   
        <div class='d-flex'>
          <form class="d-flex justify-content-right" role="search" action="" method='GET'>
            <input class="form-control me-2" name='srch' value="<?= isset($_GET['srch']) ? $_GET['srch'] : '' ?>" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
          <div>
            <button  class="btn btn-outline-success" type="submit"><a href="register_items.php">Add Items</a></button>
          </div>   


       </div>
        
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
  


        <section class="container my-5">
          <div class="row">
            <?php while($row=mysqli_fetch_assoc($res)){ ?>
                <div class="col-md-3 mb-3 d-flex">
                    <div class="card" style="width: 100%;"> 
                        <div class="d-flex justify-content-center">
                            <?php echo '<img src="data:image;base64,'.base64_encode($row['img']).'" class="w-50">'; ?>
                        </div>

                        <div class="card-body d-flex flex-column"> 
                            <h5 class="card-title"><?=$row['I_Name'] ?></h5>
                            <div class='mt-auto'>
                              <ul>
                                  <li>Type: <?=$row['P_name']?> </li>
                                  <li>Brand: <?=$row['I_Brand']?> </li>
                                  <li>Price: <?=$row['I_Price']?>tk</li>
                                  <li>Availability: 
                                      <?php if($row['I_quantity']){ ?>
                                          <strong class="text-success">In Stock</strong>
                                      <?php } else { ?>
                                          <strong class="text-danger">Out of Stock</strong>
                                      <?php } ?>
                                  </li>
                              </ul>
                            </div>
                            <form action="itemsAdmin_POST.php" method="POST">
                                <div class="mb-3">
                                    <input type="hidden" name="i_name" value="<?=$row['I_Name']?>">
                                    <button type="submit" name='add' class="btn btn-primary">Add To Cart</button>    
                                </div>
                                <div class="mb-3">
                                    <input type="hidden" name="i_name" value="<?=$row['I_Name']?>">
                                    <button type="submit" name='drop' class="btn btn-primary">Drop</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            <?php } ?>
          </div>
      </section>


                
    




    </div> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>




</html>
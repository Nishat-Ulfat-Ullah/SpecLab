<?php
   require 'conn.php';

   if(isset($_POST['view'])){
         $query="SELECT * From PC_BUILT WHERE PC_ID='{$_POST['prebuilt']}'";
         $res=mysqli_query($db_connection, $query);
         $row2=mysqli_fetch_assoc($res);
   }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="builtpc_post.css">
    <title>User Profile</title>
</head>
<body>
   
   <nav>
      <div class='d-flex justify-content-left'>
         <a href="home.php" class="logo">SpecLab</a>
      </div>
      <div class="d-flex container-fluid justify-content-center links">

         <a href="home.php">Home</a>
         <a href="#">Feature Builds</a>
         <a href="#">About Us</a>
         <a href="#">FeedBack</a> 
      </div>
   </nav>
   <div class="maintext">
      <h1 ><?=$row2['PC_Name']?></h1>
   </div>
   <header>
         <div class="left">
               <div class="wrapper">
      
                  <div class="input-box">
                        <h2>CPU:</h2><?=$row2["PC_CPU"]?>
                        <hr>
                       
                  </div>
                  <div class="input-box">
                        <h2>GPU:</h2><?=$row2["PC_CPU"]?>
                        <hr>
                        <br>
                  </div>
                  <div class="input-box">
                        <h2>Motherboard:</h2><?=$row2["PC_Mobo"]?>
                        <hr>
                        <br>
                  </div>
                  <div class="input-box">
                        <h2>RAM:</h2><?=$row2["PC_RAM"]?>
                        <hr>
                        <br>
                  </div>
                  <div class="input-box">
                        <h2>Storage:</h2><?=$row2["PC_STORAGE"]?>
                        <hr>
                        <br>
                  </div>
                  <div class="input-box">
                        <h2>Power Supply:</h2><?=$row2["PC_PSU"]?>
                        <hr>
                        <br>
                  </div>
                  <div class="input-box">
                        <h2>Casing:</h2><?=$row2["PC_Casing"]?>
                        <hr>
                        <br>
                       
                  </div>
                  <button type="submit" name='submit' class="btn">Add To Cart</button>
               </div>    
               
         </div>
         <div class="uimage">
               
               <?php $i=0;
               while($i<20){
               ?>
                  <br>
                  

               <?php
                  $i+=1;
               }
               ?>
            
               <?php echo '<img src="data:image;base64,'.base64_encode($row2["image_pc"]).'" class=uimage>'; ?>
         </div>
         
      </header>
</body>
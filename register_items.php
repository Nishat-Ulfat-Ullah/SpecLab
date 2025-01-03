<?php session_start(); ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="register_items.css">
  </head>
  <body>
    <section>
        <div class="container">
            <nav>
                <a href="#" class="logo">SpecLab Logo</a>
                <div class="links">
                    <a href="homeAdmin.php">Home</a>
                    <a href="#">Feature Builds</a>
                    <a href="#">About Us</a>
                    <a href="#">FeedBack</a> 
                </div>
                <div class="mb-3">
                    <button type="submit" name='submit' class="btn btn-primary"><a href="itemsAdmin.php">View Items</a></button>
                </div>
                <!-- <div class="login">
                    <a href="itemsAdmin.php">
                        <i class='bx bx-wrench' ></i>
                        <span>View Items</span>
                    </a>
                </div> -->
            </nav>
            <br><br><br><br><br><br><br>
            <div class="row">
                <div class="col-lg-10 m-auto">
                    <div class="card">
                        <div class="card-header">
                            <h1 style="text-align:center">Register Product</h1>
                        </div>

                        <div class="card-body">
                            <form action="register_items_POST.php" method="POST" enctype="multipart/form-data">
                                <div class="mb-3">
                                    <label for="" class="form-label">Enter Product Name</label>
                                    <input type="text" name="p_name" class="form-control">
                                    <?php if(isset($_SESSION["nam_err"])){ ?>
                                        <strong class="text-danger"><?=$_SESSION["nam_err"]?></strong>
                                    <?php } unset($_SESSION["nam_err"])?>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Product Quantity</label>
                                    <input type="number" name="p_quantity" class="form-control">
                                    <?php if(isset($_SESSION["qnt_err"])){ ?>
                                        <strong class="text-danger"><?=$_SESSION["qnt_err"]?></strong>
                                    <?php } unset($_SESSION["qnt_err"])?>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Product Price</label>
                                    <input type="number" name="p_price" class="form-control">
                                    <?php if(isset($_SESSION["prc_err"])){ ?>
                                        <strong class="text-danger"><?=$_SESSION["prc_err"]?></strong>
                                    <?php } unset($_SESSION["prc_err"])?>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Enter Brand Name</label>
                                    <input type="text" name="brand" class="form-control">
                                    <?php if(isset($_SESSION["nam_err"])){ ?>
                                        <strong class="text-danger"><?=$_SESSION["nam_err"]?></strong>
                                    <?php } unset($_SESSION["nam_err"])?>
                                </div>
                                
                                <div class="mb-3">
                                    <label for="" class="form-label">Product Type</label>
                                    <br>
                                    <select name="p_type" id="products">
                                        <option value="NULL">None</optio>
                                        <option value="01">CPU</option>
                                        <option value="03">MotherBoard</option>
                                        <option value="02">GPU</option>
                                        <option value="04">RAM</option>
                                        <option value="05">Storage</option>
                                        <option value="06">PSU</option>
                                        <option value="07">Casing</option>
                                    </select>
                                </div>
                                <div class="input-box">
                                    <input type="file" name="image" class='file-input' accept="image/jpg, image/jpeg, image/png, image/webp" required>
                                    <i class='bx bxs-image-add'></i>
                                </div>
                                <br>
                                <div class="mb-3">
                                    <button type="submit" name='submit' class="btn btn-primary">Add Product</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" ></script>
  </body>
</html>
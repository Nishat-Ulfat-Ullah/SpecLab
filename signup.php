<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp</title>
    <link rel="stylesheet" href="signup.css">
</head>
<body>
    <div class="wrapper">
        <form action="signup_POST.php" method="POST" enctype="multipart/form-data">
            <h1>SignUp</h1>
            <div class="input-box">
                <input type="text" name="firstname" placeholder="First Name" required>
                <i class='bx bx-user' ></i> 
            </div>

            <div class="input-box">
                <input type="text" name="secondname" placeholder="Last Name" required>
                <i class='bx bx-user' ></i>
            </div>

            <div class="input-box">
                <input type="text" name="phone" placeholder="Phone Number" required>
                <i class='bx bxs-mobile'></i>
                <?php if(isset($_SESSION['phn_err'])){ ?>
                    <strong class="text-danger"> <?= $_SESSION['phn_err'] ?> </strong>
                <?php } unset($_SESSION['phn_err']) ?>
            </div>

            <div class="input-box">
                <input type="text" name="email" placeholder="Email" required>
                <i class='bx bx-user' ></i>
                <?php if(isset($_SESSION['email_err'])){ ?>
                    <strong class="text-danger"> <?= $_SESSION['email_err'] ?> </strong>
                <?php } unset($_SESSION['email_err']) ?>
            </div>

            <div class="input-box">
                <input type="password"  name="password" placeholder="Password" required>
                <i class='bx bx-lock-alt' ></i>
                <?php if(isset($_SESSION['pass_err'])){ ?>
                    <strong class="text-danger"> <?= $_SESSION['pass_err'] ?> </strong>
                <?php } unset($_SESSION['pass_err']) ?>
            </div>

            <div class="input-box">
                <input type="password" name="cpassword" placeholder="Confirm Password" required>
                <i class='bx bx-lock-alt' ></i>
                <?php if(isset($_SESSION['cpass_err'])){ ?>
                    <strong class="text-danger"> <?= $_SESSION['cpass_err'] ?> </strong>
                <?php } unset($_SESSION['cpass_err']) ?>
            </div>

            <div class="input-box">
                <input type="file" name="image" class='file-input' accept="image/jpg, image/jpeg, image/png"   required>
                <i class='bx bxs-image-add'></i>
            </div>

            <button type="submit" name='submit' class="btn">Signup</button>
            <div class="reg-link">
                <p>
                    Already have an account?
                    <a href="login.php">Login</a>
                </p>
            </div>
        </form>
    </div>
</body>
</html>
<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="signup.css">
</head>
<body>
    <div class="wrapper">
        <form action="login_POST.php" method="POST">
            <h1>Login</h1>
            <div class="input-box">
                <input type="text" name="email" placeholder="Email" required>
                <i class='bx bx-user' ></i>
            </div>

            <div class="input-box">
                <input type="password"  name="password" placeholder="Password" required>
                <i class='bx bx-lock-alt' ></i>
            </div>
            <button type="submit" class="btn">Login</button>
            <div class="reg-link">
                <p>
                    Don't have an account?
                    <a href="signup.php">Signup</a>
                </p>
            </div>
        </form>
    </div>
</body>
</html>


<?php include('server.php') ?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>login page</title>
        <link rel="stylesheet" type="text/css" href="login.css">
    </head>
    <body>
        <div class="loginbox">
            <img src="avatar.png" class="avatar">
            <h1>Login Here</h1>
            <form  action="login.php" method="POST">
            <?php include('errors.php'); ?>
                <p>Username</p>
                <input type="username" id="user" name="username" placeholder="Enter Username">
                <p>Password</p>
                <input type="password" id="pass" name="password" placeholder="Enter Password">
                <input type="submit" name="login_user" value="Login">
                <a href="#">Lost your Password?</a></br>
                <a href="register.php">Don't have an account?</a>
            </form>

        </div>
    </body>
</html>
<?php include('server.php') ?>
<!DOCTYPE html>
<html>
  <head>
      <title>Registration system</title>
      <link rel="stylesheet" type="text/css" href="style.css">
  </head>
   <body>
      <form method="POST" action="register.php">
      	<?php include('errors.php'); ?>
      	<div class="signbox">
          <h1>Register</h1>
      	  <p>Username</p>
      	  <input type="username" name="username" placeholder="Enter username" value="<?php echo $username; ?>">
      	  <p>Email</p>
      	  <input type="email" name="email" placeholder="Enter Email" value="<?php echo $email; ?>">
      	  <p>Password</p>
            <input id="password-field" type="password" placeholder="Enter Password" name="password_1">
      	   <p>Confirm password</p>
            <input id="password-field" type="password" placeholder="Confirm Password" name="password_2">
      	  <input type="submit" name="reg_user" value="Register"></br>
          <a href="login.php">Already a member? Sign in</a>
        </div>
      </form>
    </body>
</html>
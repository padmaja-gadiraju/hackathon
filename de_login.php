<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Driver Login</title>
    <link rel="stylesheet" type="text/css" href="transport1.css">

</head>
<body>
    <form action="deLogin.php" method="post">
     	<h2> Dealer Login</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>User Name</label>
     	<input type="text" name="user_id" placeholder="User Name"><br>

     	<label>Password</label>
     	<input type="password" name="password" placeholder="Password"><br>

     	<button type="submit">Login</button><br>
          <a href="dri_signup.php" class="ca">Create an account</a><br>
          <a href="forpass.php" class="ca">forget password..</a>
     </form>
</body>
</html>
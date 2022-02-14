<!DOCTYPE html>
<html>
<head>
	<title>SIGN UP</title>
	<link rel="stylesheet" type="text/css" href="transport1.css">
</head>
<body>
     <form action="signup_process.php" method="post">
     	<h2>Driver Signup</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>

          <label>Email Id</label>
          <?php if (isset($_GET['user_id'])) { ?>
               <input type="email" 
                      name="user_id" 
                      placeholder="email id"
                      value="<?php echo $_GET['user_id']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="user_id" 
                      placeholder="email"><br>
          <?php }?>


     	<label>Password</label>
     	<input type="password" 
                 name="password" 
                 placeholder="Password"><br>

          <label>Re Password</label>
          <input type="password" 
                 name="re_password" 
                 placeholder="Re_Password"><br>

     	<button type="submit">Sign Up</button>
          <a href="dri_insert.php" class="ca">Already have an account?</a>
     </form>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dealer Details</title>
</head>
<body>
<!DOCTYPE html>
<html>
<head>
	<title>Dealer Details</title>
	<link rel="stylesheet" type="text/css" href="transport.css">
</head>
<body>
     <form action="" method="post">
     	<h2>Dealer Details</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>

          <label>Name</label>
          <?php if (isset($_GET['name'])) { ?>
               <input type="text" 
                      name="name" 
                      placeholder="Name"
                      value="<?php echo $_GET['name']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="name" 
                      placeholder="Name"><br>
          <?php }?>


     	<label>Mobile Number</label>
     	<input type="text" 
                 name="mobile_number" 
                 placeholder="Mobile Number"><br>

          <label>Nature Of Material</label>
          <input type="text" 
                 name="nature_of_material" 
                 placeholder="Nature Of Material"><br>

        <label>Weight Of Material</label>
          <input type="text" 
                 name="weight_of_material" 
                 placeholder="Weight Of Material"><br>
        
        <label>Quantity</label>
          <input type="text" 
                 name="quantity" 
                 placeholder="Quantity"><br>
        
        <label>City</label>
          <input type="text" 
                 name="city" 
                 placeholder="City"><br>

        <label>State</label>
          <input type="text" 
                 name="state" 
                 placeholder="State"><br>

        
     	<button type="submit">Submit</button>
     </form>
</body>
</html>
</body>
</html>
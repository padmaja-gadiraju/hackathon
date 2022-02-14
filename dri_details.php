<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Driver_signup</title>
    <link rel="stylesheet" type="text/css" href="transport.css">
</head>
<body>
<!DOCTYPE html>
<html>
<head>
	<title>SIGN UP</title>
	<link rel="stylesheet" type="text/css" href="">
</head>
<body>
     <form action="" method="post">
     	<h2>Driver Details</h2>
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


     	<label>Age</label>
     	<input type="text" 
                 name="Age" 
                 placeholder="Age"><br>

          <label>Truck Number</label>
          <input type="text" 
                 name="Truck Number" 
                 placeholder="Truck Number"><br>

        <label>Mobile Number</label>
          <input type="text" 
                 name="Mobile Number" 
                 placeholder="Mobile Number"><br>
        
        <label>Truck Capacity</label>
          <input type="text" 
                 name="Truck Capacity" 
                 placeholder="Truck Capacity"><br>
        
        <label>Transpoter Name</label>
          <input type="text" 
                 name="Transpoter Name" 
                 placeholder="Transpoter Name"><br>

        <label>Driving Experience</label>
          <input type="text" 
                 name="Driving Experience" 
                 placeholder="Driving Experience"><br>

        <label>Interested Routes</label><table  cellspacing = ''>
            <tr><td>From</td><td>To</td></tr>
            <tr><td>
            <input type="text" 
                 name="Route-1" 
                 placeholder="Route-1"><br>
        
            </td><td>
            <input type="text" 
                 name="Route-1" 
                 placeholder="Route-1"><br>
            </td></tr>
            <tr><td>
            <input type="text" 
                 name="Route-2" 
                 placeholder="Route-2"><br>
            </td><td>
            <input type="text" 
                 name="Route-2" 
                 placeholder="Route-2"><br>
            </td></tr>
            <tr><td><input type="text" 
                 name="Route-3" 
                 placeholder="Route-3"><br></td><<br><td>
                 <input type="text" 
                 name="Route-3" 
                 placeholder="Route-3"><br>
                 </td></tr>
        </table>
     	<button type="submit">Submit</button>
     </form>
</body>
</html>
</body>
</html>
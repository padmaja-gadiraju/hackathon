<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> dealer</title>
    <link rel="stylesheet" href="css.css">
</head>
<body>
    
    <div class="container" align='center'>
        <form action="" method="POST">
            <input type="text" name="mobile_number" placeholder="mobile_number"><br>
            <input type="submit" name="search" value="SEARCH"><br>
            
        </form>
        <p align = 'CENTER'>
        <button type="submit" style="color:black;"><a href="de_insert.php"> INSERT</a></button>
        </p>

        <table align='center' >
                    <tr>
                        <th>Name</th>
                        <th>Mobile Number</th>
                        <th>Nature of Material</th>
                        <th>Weight of Material</th>
                        <th>Quantity</th>
                        <th>City</th>
                        <th>State</th>
                        <th>Edit</th>
                        <th>Delete</th>
                        
                    </tr><br>
                <?php
                include "connection.php";

                if(isset($_POST['search']))
                {
                    $mobile_number = $_POST['mobile_number'];

                    $sql = "SELECT * FROM dealer_details WHERE mobile_number ='$mobile_number'";
		            $result = mysqli_query($con, $sql);

                    while($row = mysqli_fetch_array($result)){
                        ?>
                        <tr>
                            <td> <?php echo $row['name']; ?> </td>
                            <td> <?php echo $row['mobile_number']; ?> </td>
                            <td> <?php echo $row['nature_of_material']; ?> </td>
                            <td> <?php echo $row['weight_of_material']; ?> </td>
                            <td> <?php echo $row['quantity']; ?> </td>
                            <td> <?php echo $row['city']; ?> </td>
                            <td> <?php echo $row['state']; ?> </td>
                            <td><a href="deedit.php?id=<?php echo $row['name'];?>">Edit</a></td>
                            <td><a href="dedelete.php?id= $row['name']">Delete</a></td>
                            

                            
                        </tr>

                        <?php
                    }
                }
                ?>
        </table>
        <p align = 'right'>
        <button type="submit" style="color:black;"><a href="Logout.php"> LOGOUT</a></button>
        </p> 


    </div>
</body>
</html>
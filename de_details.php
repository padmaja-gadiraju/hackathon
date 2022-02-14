<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>driver details</title>
    <link rel="stylesheet" href="css.css">
</head>
<body>
    <div class="container" align='center'>
        <form action="" method="POST">
            <input type="text" name="city" placeholder="City"><br>
            <input type="text" name="state" placeholder="State"><br>
            <input type="submit" name="search" value="SEARCH"><br><br> 
            
        </form>
        
        <table align='center' border="2" cellspacing = '' >
                    <tr>
                        <th>Name</th>
                        <th>Age</th>
                        <th>Truck Number</th>
                        <th>Mobile Number</th>
                        <th>Truck Capacity</th>
                        <th>Transpoter Name</th>
                        <th>Experience</th>
                        <th>From1</th>
                       <th>To1</th>
                       <th>From2</th>
                       <th>To2</th>
                       <th>From3</th>
                       <th>To3</th>
                    </tr><br>

                <?php
                include "connection.php";

                if(isset($_POST['search']))
                {
                    $city = $_POST['city'];
                    $state = $_POST['state'];

                    $sql = "SELECT * FROM driver_details WHERE city ='$city' AND state='$state' ";
		            $result = mysqli_query($con, $sql);

                    while($row = mysqli_fetch_array($result)){
                        ?>
                        <tr>
                            <td> <?php echo $row['name']; ?> </td>
                            <td> <?php echo $row['age']; ?> </td>
                            <td> <?php echo $row['truck_number ']; ?> </td>
                            <td> <?php echo $row['phone_no']; ?> </td>
                            <td> <?php echo $row['truck_capacity']; ?> </td>
                            <td> <?php echo $row['transpoter_name']; ?> </td>
                            <td> <?php echo $row['experience']; ?> </td>
                            <td> <?php echo $row['routefrom1 ']; ?> </td>
                            <td> <?php echo $row['routeto1 ']; ?> </td>
                            <td> <?php echo $row['routefrom2 ']; ?> </td>
                            <td> <?php echo $row['routeto2 ']; ?> </td>
                            <td> <?php echo $row['routefrom3 ']; ?> </td>
                            <td> <?php echo $row['routeto3 ']; ?> </td>
                            
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
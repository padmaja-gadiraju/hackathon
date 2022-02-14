<html>
<head>
<title> dealer Updation </title>
	<link rel="stylesheet" type="text/css" href="transport.css">
</head>
<body>
    <h1> Updation of Data </h1>
        
        <form action="" method="POST">
        <input type="text" name="name" placeholder="Enter  Name"/><br/>
        <input type="text" name="mobile_number" placeholder="Enter Mobile Number"/><br/>
        <input type="text" name="nature_of_material" placeholder="Enter Nature of Material"/><br/>
        <input type="text" name="weight_of_material" placeholder="Enter Weight of Material"/><br/>
        <input type="text" name="quantity" placeholder="Enter Quantity"/><br/>
        <input type="text" name="city" placeholder="Enter City"/><br/>
        <input type="text" name="state" placeholder="Enter State"/><br/>

        <input type="submit" name="update" value="UPDATE DATA"/>
        </form>
</body>
</html>

<?php
include "connection.php";

if(isset($_POST['update']))
{
    $name = $_POST['name'];
    $mobile_number =$_POST['mobile_number'];
    $nature_of_material =$_POST['nature_of_material'];
    $weight_of_material =$_POST['weight_of_material'];
    $quantity =$_POST['quantity'];
    $city =$_POST['city'];
    $state =$_POST['state'];
   


    $query = "UPDATE dealer_details SET name ='$name',mobile_number='$mobile_number',nature_of_material='$nature_of_material',weight_of_material = '$weight_of_material ',quantity='$quantity',city='$city',state='$state' where name='$_POST[name]' ";
    $query_run = mysqli_query($con,$query);

    if($query_run)
    {
        header("Location:de_insert.php");
    }
    else
    {
        header("Location:deedit1.php");
    }
}

?>
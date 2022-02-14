<html>
<head>
<title> driver Updation </title>
	<link rel="stylesheet" type="text/css" href="transport.css">
</head>
<body>
    <h1> Updation of Data </h1>
        
        <form action="" method="POST">
        <input type="text" name="name" placeholder="Enter  Name"/><br/>
        <input type="text" name="age" placeholder="Enter Age"/><br/>
        <input type="text" name="truck_number" placeholder="Enter Nature of Material"/><br/>
        <input type="text" name="phone_no " placeholder="Enter Weight of Material"/><br/>
        <input type="text" name="truck_capacity" placeholder="Enter Quantity"/><br/>
        <input type="text" name="transpoter_name" placeholder="Enter City"/><br/>
        <input type="text" name="experience" placeholder="Enter State"/><br/>
        <input type="text" name="routefrom1" placeholder="Enter from 1"/><br/>
        <input type="text" name="routeto1" placeholder="Enter to1"/><br/>
        <input type="text" name="routefrom2" placeholder="Enter from 2"/><br/>
        <input type="text" name="routeto2" placeholder="Enter to2"/><br/>
        <input type="text" name="routefrom3" placeholder="Enter from 3"/><br/>
        <input type="text" name="routeto3" placeholder="Enter to3"/><br/>

        <input type="submit" name="update" value="UPDATE DATA"/>
        </form>
</body>
</html>

<?php
include "connection.php";

if(isset($_POST['update']))
{
    $name = $_POST['name'];
    $age =$_POST['age'];
    $truck_number =$_POST['truck_number'];
    $phone_no =$_POST['phone_no'];
    $truck_capacity =$_POST['truck_capacity'];
    $transpoter_name =$_POST['transpoter_name'];
    $experience =$_POST['experience'];
    $routefrom1 =$_POST['routefrom1'];
    $routeto1 =$_POST['routeto1'];
    $routefrom2 =$_POST['routefrom2'];
    $routeto2 =$_POST['routeto2'];
    $routefrom3 =$_POST['routefrom3'];
    $routeto3 =$_POST['routeto3'];
   


    $query = "UPDATE driver_details SET name ='$name',age='$age',truck_number='$truck_number',phone_no = '$phone_no ',truck_capacity='truck_capacity',transpoter_name='$transpoter_name',
    experience='$experience' ,routefrom1 = '$routefrom1 ',routeto1 = '$routeto1 ',routefrom2 = '$routefrom2 ',
    routeto2 = '$routeto2 ',routefrom3 = '$routefrom3 ',routeto3 = '$routeto3 where name='$_POST[name]' ";
    $query_run = mysqli_query($con,$query);

    if($query_run)
    {
        header("Location:dri_insert.php");
    }
    else
    {
        header("Location:driedit1.php");
    }
}

?>
<?php
 include "connection.php";
 $name = $_GET['name'];
 $del = mysqli_query($con, "DELETE FROM `driver_details` WHERE `name`= 'name' ");
 if($del){
   echo "deleted";
 }
 else{
    echo "not deleted";
 }

?>
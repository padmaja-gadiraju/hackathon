<?php
session_start();
include "connection.php";
if (isset($_POST['user_id']) && isset($_POST['password'])) {

    function validation($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $user_id = validation($_POST['user_id']);
    $password = validation($_POST['password']);

    if (empty($user_id)){
        header("Location: dri_login.php?error=User Name is required");
        exit();

    }else if(empty($password)) {
        header("Location: dri_login.php?error=Password is required");
        exit();
    }else{

        $pass = md5($pass);
        
        $sql = "SELECT * FROM driver_login WHERE user_name = '$user_id' AND password= '$password' ";
        $result = mysqli_query($con, $sql);

        if(mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if ($row['user_name'] === $user_id && $row['password'] === $password){
                $_SESSION['user_name'] = $row['user_name'];
                header("Location: dri_details.php");
            }
            else{
                header("Location: dri_login.php?error=Incorrect User Name or Password");
                exit();
            }
        }else {
            header("Location: dri_login.php?error=Incorrect User Name or Password");
                exit(); 
        }
    }

}else{
    header("Location: dri_login.php");
    exit();
}
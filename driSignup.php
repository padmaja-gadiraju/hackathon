<?php 
session_start(); 
include "connection.php";

if (isset($_POST['user_id']) && isset($_POST['password'])
 && isset($_POST['re_password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$user_id = validate($_POST['user_id']);
	$pass = validate($_POST['password']);

	$re_pass = validate($_POST['re_password']);
	$user_data = 'user_id='. $user_id. '&name='. $name;


	if (empty($user_id)) {
		header("Location: de_signup.php?error=User Name is required&$user_data");
	    exit();
	}else if(empty($pass)){
        header("Location: dri_signup.php?error=Password is required&$user_data");
	    exit();
	}
	else if(empty($re_pass)){
        header("Location: dri_signup.php?error=Re Password is required&$user_data");
	    exit();
	}
	else if($pass !== $re_pass){
        header("Location: dri_signup.php?error=The confirmation password  does not match&$user_data");
	    exit();
	}

	else{

		$pass = md5($pass);

	    $sql = "SELECT * FROM driver_login WHERE user_name='$user_id'";
		$result = mysqli_query($con, $sql);

		if (mysqli_num_rows($result) > 0) {
			header("Location: dri_signup.php?error=The username is taken try another&$user_data");
	        exit();
		}else {
           $sql2 = "INSERT INTO driver_login(user_name, password) VALUES('$user_id', '$pass')";
           $result2 = mysqli_query($con, $sql2);
           if ($result2) {
           	 header("Location: dri_login.php?success=Your account has been created successfully");
	         exit();
           }else {
	           	header("Location: dri_signup.php?error=unknown error occurred&$user_data");
		        exit();
           }
		}
	}
	
}else{
	header("Location: dri_signup.php");
	exit();
}
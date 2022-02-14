<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forget Password</title>
	<link rel="stylesheet" type="text/css" href="transport1.css">
</head>
<body>
<form method="post" action="forpass.php">
	<div class="tblLogin">
		
		<div class="tableheader">Enter OTP</div>
		<p style="color:#31ab00;">Check your email for the OTP</p>
			
		<div class="tablerow">
			<input type="text" name="otp" placeholder="One Time Password" class="login-input" required>
		</div>
		<div class="tableheader"><input type="submit" name="submit_otp" value="Submit" class="btnSubmit"></div>
		
		<p style="color:#31ab00;">Welcome, You have successfully loggedin!</p>
		
	</div>
</form>
</body>
</html>
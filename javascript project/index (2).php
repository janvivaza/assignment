<!DOCTYPE html>
<html>
<head>
	<title>Simple Water Billing System</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<meta name='viewport' content='width=device-width, initial-scale=1'>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
	
	<style>
		body {
			background-image: url("img/bhav.jpg");
		}
	</style>
	
</head>
<body>
<div class="container" style="width: 500px;
    border: solid 6px;
    border-radius: 8px;
    margin-top: 50px;
    background-color:#16a185;
	color:BLACK;
}">
<h2 align="center">WATER BILLING SYSTEM</h2><hr>
	<form method="post" action="process.php">
		<div class="form-group">
		    <i class='fas fa-user'></i>
			<label for="user">Username:</label>
			<input type="text" name="username" class="form-control" id="user" placeholder="Enter Username" required>
		</div>
		<div class="form-group">
			<i class='fas fa-key'></i>
			<label for="pwd">Password:</label>
			<input type="password" name="password" class="form-control" id="pwd" placeholder="Enter password" required>
			
		</div>
		<br>

		<div align="center">
		<button type="submit" name="ok" class="btn btn-default">Submit</button>
		</div>
	</form>
<?php if(isset($_GET['error'])){
	echo "<script>alert('Invalid Username or Password')</script>";
	}
?>
</div>
</body>
</html>
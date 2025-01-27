<?php session_start();
if(!isset($_SESSION['id'])){
	echo '<script>windows: location="index.php"</script>';

	
	}
		
?>
<?php
$session=$_SESSION['id'];
$con=mysqli_connect("localhost","root","","waterbilling");
$result = mysqli_query($con,"SELECT * FROM user where id= '$session'");
while($row = mysqli_fetch_array($result))
  {
  $sessionname=$row['name'];

  }
?>
<!DOCTYPE html>
<html>
<head>
<title>Water Billing System</title>
<link href="css/bootstrap.min.css" media="screen" rel="stylesheet" type="text/css" />
<link href="css/facebox.css" media="screen" rel="stylesheet" type="text/css" />
<script src="js/jquery1.js" type="text/javascript"></script>
<script src="css/facebox.js" type="text/javascript"></script>
  <script type="text/javascript">
	jQuery(document).ready(function($) {
	  $('a[rel*=facebox]').facebox({
		loadingImage : 'src/loading.gif',
		closeImage   : 'src/closelabel.png'
	  })
	})
  </script>
<script src="js/application.js" type="text/javascript" charset="utf-8"></script>	
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Water Billing System</title>
<style>
		body {
			background-image: url("img/water.jpg");
		}
	</style>
</head>
<body>
<nav class="navbar navbar-inverse">
	<div class="container-fluid">
		<div class="navbar-header">
			<a class="navbar-brand">Water Billing</a>
		</div>
		<ul class="nav navbar-nav">
		<li class="active"><a href="billing.php">Home</a></li>
		<li><a href="bill.php">Billing</a></li>
		<li><a href="user.php">Users</a></li>
		<li><a href="addclient.php">Add Client</a></li>
		<li><a href="viewuser.php">View Client</a></li>
		<li><a href="logout.php">Logout</a></li>
		</ul>
	</div>
</nav>
<h1 align="center">Water Billing System</h1>

<p>
</body>
</html>
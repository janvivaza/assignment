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
<title>Simple Water Billing System</title>
<link href="css/bootstrap.min.css" media="screen" rel="stylesheet" type="text/css" />
<link href="css/facebox.css" media="screen" rel="stylesheet" type="text/css" />
<script src="js/jquery1.js" type="text/javascript"></script>
<script src="js/facebox.js" type="text/javascript"></script>
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
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>Billing System</title>
</head>
<body>
<nav class="navbar navbar-inverse">
	<div class="container-fluid">
		<div class="navbar-header">
    <a class="navbar-brand" href="#">Water Billing</i></a>
		</div>
		<ul class="nav navbar-nav">
		<li><a href="billing.php">Home</a></li>
		<li><a href="bill.php">Billing</a></li>
		<li><a href="user.php">Users</a></li>
		<li class="active"><a href="addclient.php">Add Client</a></li>
		<li><a href="viewuser.php">View Client</a></li>
		<li><a href="logout.php">Logout</a></li>
		</ul>
	</div>
</nav>
<div class="container">
<h2 align="center">Add Client</h2>
<form method="post" action="client_add.php">
    <div class="form-group">
      <label for="fname">First Name:</label>
      <input type="text" name="fname" class="form-control" id="fname" placeholder="First Name" required>
    </div>
	<div class="form-group">
      <label for="lname">Last Name:</label>
      <input type="text" name="lname" class="form-control" id="lname" placeholder="Last Name" required>
    </div>
	<div class="form-group">
      <label for="mi">M.I.:</label>
      <input type="text" name="mi" class="form-control" id="mi" placeholder="M.I." required>
    </div>
	<div class="form-group">
      <label for="address">Address:</label>
      <input type="text" name="address" class="form-control" id="address" placeholder="Address" required>
    </div>
    <div class="form-group">
      <label for="contact">Contact No.#:</label>
      <input type="text" name="contact" class="form-control" id="contact" placeholder="Contact No.#" required>
    </div>
    <button type="submit" name="add" class="btn btn-default">ADD</button>
    <button type="reset" class="btn btn-default">CANCEL</button>
  </form>
</div>
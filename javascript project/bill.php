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
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Billing System</title>
</head>
<body>
<nav class="navbar navbar-inverse">
	<div class="container-fluid">
		<div class="navbar-header">
			<a class="navbar-brand">Water Billing</a>
		</div>
		<ul class="nav navbar-nav">
		<li><a href="billing.php">Home</a></li>
		<li class="active"><a href="bill.php">Billing</a></li>
		<li><a href="user.php">Users</a></li>
		<li><a href="addclient.php">Add Client</a></li>
		<li><a href="viewuser.php">View Client</a></li>
		<li><a href="logout.php">Logout</a></li>
		</ul>
	</div>
</nav>
<div class="container">
<h2 align="center">Client Bill</h2>
  <table class="table table-hover">
    <thead>
      <tr>
        <th>ID</th>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Middle Initial</th>
        <th>Address</th>
        <th>Contact Number</th>
        <th>Function</th>
      </tr>
    </thead>
    <tbody>
<?php
$con=mysqli_connect("localhost","root","","waterbilling");
$result = mysqli_query($con,"SELECT * FROM owners");
while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['id'] . "</td>";
  echo "<td>" . $row['fname'] . "</td>";
  echo "<td>" . $row['lname'] . "</td>";
  echo "<td>" . $row['mi'] . "</td>";
  echo "<td>" . $row['address'] . "</td>";
  echo "<td>" . $row['contact'] . "</td>";
 echo "<td><button><a rel='facebox' href='paybill.php?id=".$row['id']."'>Pay Bill</a></button> ";
 echo "<button><a rel='facebox' href='viewbill.php?id=".$row['id']."'>View Bill</a></button></td>";
  echo "</tr>";}?>
	</tbody>
  </table>
</div>
</body>
</html>
 <script src="js/jquery.js"></script>
  <script type="text/javascript">
$(function() {
$(".delbutton").click(function(){
var element = $(this);
var del_id = element.attr("id");
var info = 'id=' + del_id;
 if(confirm("Sure you want to delete this update? There is NO undo!"))
		  {
 $.ajax({
   type: "GET",
   url: "delete.php",
   data: info,
   success: function(){
   }
 });
         $(this).parents(".record").animate({ backgroundColor: "#fbc7c7" }, "fast")
		.animate({ opacity: "hide" }, "slow");
 }
return false;
});
});
</script>
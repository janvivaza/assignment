<?php
$con=mysqli_connect("localhost","root","","waterbilling");
$user_id =$_REQUEST['id'];
	$id = $_POST['id'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$name = $_POST['name'];
	
mysqli_query($con,"UPDATE user SET id ='$id', username ='$username',
	 password ='$password',name ='$name' WHERE id = '$user_id'");
	 echo "<script>windows: location='user.php'</script>";
?>
<?php
$con=mysqli_connect("localhost","root","","waterbilling");
	$id = $_POST['id'];
	mysqli_query($con,"DELETE from user WHERE id='$id'");
			

		 echo "<script>windows: location='user.php'</script>";				
?>
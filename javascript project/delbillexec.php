<?php
$con=mysqli_connect("localhost","root","","waterbilling");
	$id = $_POST['id'];
	mysqli_query($con,"DELETE from bill WHERE id='$id'");
		 echo "<script>windows: location='bill.php'</script>";
?>
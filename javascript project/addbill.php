<?php
$con=mysqli_connect("localhost","root","","waterbilling");
	
	$owners_id = $_POST['owners_id'];
	$prev = $_POST['prev'];
	$pres = $_POST['pres'];
	$price = $_POST['price'];
	$date=$_POST['date'] ;
	$id=$_POST['id'] ;

	mysqli_query($con,"INSERT INTO  bill (id,owners_id,prev,pres,price,date) 
		 VALUES ('$id','$owners_id','$prev','$pres','$price','$date')"); 
				
				echo '<script>alert("success")</script>';
				echo '<script>windows: location="bill.php"</script>';
?>
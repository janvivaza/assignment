<?php
$con=mysqli_connect("localhost","root","","waterbilling");
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$mi= $_POST['mi'] ;					
$address=$_POST['address'] ;
$contact=$_POST['contact'] ;
					
mysqli_query($con,"INSERT INTO  owners (id,lname,fname,mi,address,contact) VALUES ('','$lname','$fname','$mi','$address','$contact')"); 				
echo '<script>alert("success")</script>';
echo '<script>windows: location="user.php"</script>';

?>
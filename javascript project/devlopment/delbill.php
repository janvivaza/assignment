<?php session_start(); ?>
<?php
 $con=mysqli_connect("localhost","root","","waterbilling");
$id =$_REQUEST['id'];
$result = mysqli_query($con,"SELECT * FROM bill WHERE id  = '$id'");
$test = mysqli_fetch_array($result);
if (!$result) 
		{
		die("Error: Data not found..");
		}
				$id=$test['id'] ;
?>
<form action="delbillexec.php" method="post" align="center">
<h4>Are you sure you want to Delete this Record?</h4>
<input type="hidden" name="id" value="<?php echo $id; ?>" />
<input type="submit" nsme="ok" value="Delete">
</form>
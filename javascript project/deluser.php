<?php session_start(); ?>
<?php
 $con=mysqli_connect("localhost","root","","waterbilling");
$id =$_REQUEST['id'];
$result = mysqli_query($con,"SELECT * FROM user WHERE id  = '$id'");
$test = mysqli_fetch_array($result);
if (!$result) 
		{
		die("Error: Data not found..");
		}
				$id=$test['id'] ;
?>
<form action="deluserexec.php" method="post">
<p>Are you sure you want to delete this record!</p>
<input type="hidden" name="id" value="<?php echo $id; ?>" />
<input type="submit" nsme="ok" value="Delete">
</form>
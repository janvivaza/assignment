<?php session_start(); ?>
<?php
$con=mysqli_connect("localhost","root","","waterbilling");
$owner_id =$_REQUEST['id'];

$result = mysqli_query($con,"SELECT * FROM owners WHERE id  = '$owner_id'");
$test = mysqli_fetch_array($result);
if (!$result) 
		{
		die("Error: Data not found..");
		}
				$id=$test['id'] ;
				$lname= $test['lname'] ;					
				$fname=$test['fname'] ;
				$mi=$test['mi'] ;
				$address=$test['address'] ;
				$contact=$test['contact'] ;

?>
<h1 align="center">Client Account Update</h1>
  <form method="post" action="editecex.php">
<table width="342" border="0">
  <tr>
    <td width="107">Owners Id:</td>
    <td width="315"><input type="text" name="id" value="<?php echo $id; ?>" /></td>
    
  </tr>
  <tr>
    <td>First Name:</td>
    <td><input type="text" name="fname" value="<?php echo $fname; ?>"/></td>
    </tr>
    <tr>
    <td>Last Name:</td>
    <td><input type="text" name="lname"value="<?php echo $lname; ?>" /></td>
    </tr>
    <tr>
    <td>M.I.:</td>
    <td><input type="text" name="mi" value="<?php echo $mi; ?>"/></td>
 
  </tr>
  <tr>
    <td>Address:</td>
    <td><input type="text" name="address" value="<?php echo $address; ?>" /></td>
  
  </tr>
  <tr>
  <td>Contact:</td>
    <td><input type="text" name="contact" value="<?php echo $contact; ?>"/></td></tr>
 <tr>
		<td>&nbsp;</td>
		<td><input type="submit" name="save" value="Update"  /></td>
	</tr>
</table>
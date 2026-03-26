<?php 
$con =mysqli_connect( 'sql109.infinityfree.com','if0_38810862','Alto2002','if0_38810862_alto');
if (isset($_GET['delid'])) {
	$futa=$_GET['delid'];
	$success=mysqli_query($con,"DELETE FROM attendance WHERE id='$futa'");
	if ($success>0) {
		$futa= "<p style='color:green; font-size: 40px'>Successifull deleted....</p>";
header("refresh:1;url=users.php");

	}
	else{
		echo "failed to delete";
		header("refresh:0.5;url=users.php");
	}
}
 ?>
 <div>
 	<p ><?php echo @$futa; ?></p>
 </div><?php 
$con=mysqli_connect('localhost','root','','alto');
if (isset($_GET['delid'])) {
	$futa=$_GET['delid'];
	$success=mysqli_query($con,"DELETE FROM attendance WHERE id='$futa'");
	if ($success>0) {
		$futa= "<p style='color:green; font-size: 40px'>Successifull deleted....</p>";
header("refresh:1;url=users.php");

	}
	else{
		echo "failed to delete";
		header("refresh:0.5;url=users.php");
	}
}
 ?>
 <div>
 	<p ><?php echo @$futa; ?></p>
 </div>
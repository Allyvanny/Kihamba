<?php 
$con =mysqli_connect( 'localhost','root','','alto');
if (isset($_GET['delid'])) {
	$futa=$_GET['delid'];
	$success=mysqli_query($con,"DELETE FROM attendance WHERE id='$futa'");
	if ($success>0) {
		$futa= "<p style='color:green; font-size: 40px'>Successifull deleted....</p>";
header("refresh:0.5;url=users.php");

	}
	else{
		echo "failed to delete";
		header("refresh:0.7;url=users.php");
	}
}
 ?>
 <div>
 	<p ><?php echo @$futa; ?></p>
 </div>
<?php 

$con =mysqli_connect( 'localhost','root','','alto');
if (isset($_GET['delid'])) {
	$futa=$_GET['delid'];
	$success=mysqli_query($con,"DELETE FROM messages WHERE id='$futa'");
	if ($success>0) {
		$futa= "<p style='color:green; font-size: 40px'>Successifull deleted....</p>";
header("refresh:1;url=viewmessages.php");

	}
	else{
		echo "failed to delete";
		header("refresh:0.5;url=message.php");
	}
}
 ?>
 <div>
 	<p ><?php echo @$futa; ?></p>
 </div>
<?php
$con =mysqli_connect( 'localhost','root','','alto');

if(isset($_GET['id'])){
	$delid = $_GET['id'];
	$msg = mysqli_query($con,"DELETE FROM gallery WHERE id='$delid'");
	if($msg>0){
		header("refresh:1;url=viewproject.php");
		//echo "successfully deleted......";
	}
	else{
		echo"Failed to deleted";
	}
}
?>
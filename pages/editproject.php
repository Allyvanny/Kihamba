<?php 
$con =mysqli_connect( 'sql109.infinityfree.com','if0_38810862','Alto2002','if0_38810862_alto');
if (isset($_GET['id'])) {
	$getid=$_GET['id'];
	$take=mysqli_query($con, "SELECT * FROM gallery WHERE id='$getid'");
	while($check=mysqli_fetch_array($take)){
		$head=$check['heading'];
		$desc=$check['description'];

	}
}

/* Start Updating and editing*/
if (isset($_POST['save'])) {
	$head=$_POST['heading'];
	$desc=$_POST['description'];
	$query=mysqli_query($con, "UPDATE gallery SET heading='$head',description='$desc' WHERE id='$getid'");

	if ($query > 0) {
		echo "<p style='color:green; font-size:30px;'> Successifully Updated.....</p>";
		header("refresh:2;url=viewproject.php");
	}

	else{
		echo "Failed to update";
	}
}
 ?>
 <div>
 	<link rel="stylesheet" type="text/css" href="../css/editproject.css">
 	<form action=" " method="POST">
 		<h2>Update your informations!</h2>
 		<label class="lab">Heading:</label><br>
 		<input type="text" name="heading" value="<?php echo $head;?>"><br>
 		<label class="lab">Description</label><br>
 		<textarea name="description"><?php echo $desc ?></textarea><br>
 		<button name="save">Edit & Update</button>
 	</form>
<a href="viewproject.php">Go Back</a>
 </div>
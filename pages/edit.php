<?php 
$con =mysqli_connect( 'sql109.infinityfree.com','if0_38810862','Alto2002','if0_38810862_alto');
if(isset($_GET['editid'])){
	$useid=$_GET['editid'];
	$storesql=mysqli_query($con,"SELECT * FROM attendance WHERE id='$useid'");
	while ($fetched=mysqli_fetch_array($storesql)) {

	$fname=$fetched['full_name'];
	$regno=$fetched['regno'];
	$phoneno=$fetched['phone_no'];
	}
}
/*section to start update au edit*/
if (isset($_POST['Edit'])) {
	$fname= $_POST['full_name'];
	$regno=$_POST['regno'];
	$phoneno=$_POST['phone_no'];
	$succeed= mysqli_query($con,"UPDATE attendance SET full_name='$fname',regno='$regno',phone_no='$phoneno' WHERE id='$useid'");
	if ($succeed >0) {
		$umefanikiwa ="Successifull edited.....";
		header("refresh:1;url=users.php");
	}
	else{

	}
}
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<link rel="stylesheet" type="text/css" href="../css/style2.css">
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>Edit</title>
 	 <link rel="stylesheet" href="style1.css">
 </head>
 <body>
 <div>
 	<form action="" method="POST">
 		<label>Full Name:</label><br>
 		<input type="text" name="full_name" value="<?php echo $fname; ?>"><br>
 		<label>Reg No:</label><br>
 		<input type="text" name="regno" value="<?php echo $regno; ?>"><br>
 		<label>Phone No:</label><br>
 		<input type="text" name="phone_no" value="<?php echo $phoneno; ?>"><br>
 		<button name="Edit">Edit</button>
 		<p style="color: green;font-size: 30px"><?php echo @$umefanikiwa; ?></p>
 	</form>
 	<a href="users.php">Go Back</a>
 </div>


 </body>
 </html>
 
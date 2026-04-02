<?php 
  $path = "../"; // Go up one level to find the root
  include 'header.php'; 
?>
<?php 
$con =mysqli_connect( 'localhost','root','','alto');
if(isset($_GET['editid'])){
	$useid=$_GET['editid'];
	$storesql=mysqli_query($con,"SELECT * FROM attendance WHERE id='$useid'");
	while ($fetched=mysqli_fetch_array($storesql)) {

	$fname=$fetched['full_name'];
	$regno=$fetched['username'];
	$phoneno=$fetched['phone_no'];
	}
}
/*section to start update au edit*/
if (isset($_POST['Edit'])) {
	$fname= $_POST['full_name'];
	$username=$_POST['username'];
	$phoneno=$_POST['phone_no'];
	$succeed= mysqli_query($con,"UPDATE attendance SET full_name='$fname',username='$username',phone_no='$phoneno' WHERE id='$useid'");
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
 	<form action="" method="POST" class="form">
 		<div class="form-elements">
			<label>Full Name:</label><br>
 		<input type="text" name="full_name" value="<?php echo $fname; ?>"><br>
 		<label>Username:</label><br>
 		<input type="text" name="username" value="<?php echo $username; ?>"><br>
 		<label>Phone No:</label><br>
 		<input type="text" name="phone_no" value="<?php echo $phoneno; ?>"><br>
 		<button name="Edit">Edit</button>
 		<p style="color: green;font-size: 30px"><?php echo @$umefanikiwa; ?></p>
		</div>
		<a href="users.php">Go Back</a>
 	</form>
 	
 </div>


 </body>
 </html>
 
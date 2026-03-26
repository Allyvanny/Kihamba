<?php 
$con =mysqli_connect( 'sql109.infinityfree.com','if0_38810862','Alto2002','if0_38810862_alto');
if(isset($_POST['register'])){
	$fullname=$_POST['full_name'];
	$regno=$_POST['regno'];
	$phoneno=$_POST['phone_no'];
	$pword=md5($_POST['password']);
	$pword2=md5($_POST['password2']);
	if(empty($_POST['full_name'])){
		echo "<p style='color:red;font-size:20px'><i>Full name is required!!</i></p>";
	}
	if (empty($_POST['regno'])) {
		echo "<p style='color:red;font-size:20px'><i>Registration number is required</i></p>";
	}
	if (empty($_POST['phone_no'])) {
		echo "<p style='color:red;font-size:20px'><i>Phone number is required</i></p>";
	}
	if(empty($_POST['password'])){
		echo "<p style='color:red;font-size:20px'><i>Password is required</i></p>";
	}
	else{
$test= mysqli_query($con,"SELECT * FROM attendance WHERE regno='$regno'");
$verify= mysqli_fetch_array($test);
if ($verify>0) {
echo "<p style='color:red;font-size:20px'><i>Registration number already exist!!!</i></p>";
}
else{

	if($pword==$pword2){
		

	$check= mysqli_query($con,"INSERT INTO attendance VALUES( '','$fullname','$regno','$phoneno','$pword')");
	if ($check >0) {

		$succ ="<p style= 'color:blue; font-size:35px;'>Successful registered...</p>";
		header("refresh:1;url=users.php");
	}
	else{
		echo "<p>Failed to Create</p>";
	}
}
else{
	echo "<p style='color:red;font-size:20px'> <i>Password does not match!!!</i></p>";
	}
}
}
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Create</title>
	<link rel="stylesheet" type="text/css" href="../css/style2.css">
</head>
<body>
<div>
	<form action="" method="POST">
		<h1>Enter your details to register</h1>
		<img src="../images/herbal_tea.png"><br>
		<label>Full Name</label><br>
		<input type="text" name="full_name" placeholder="Enter your full name here" autocomplete="off"><br>
		<label>Reg No</label><br>
		<input type="text" name="regno" placeholder="Enter your registration number here" autocomplete="off"><br>
		<label>Phone Number</label><br>
		<input type="text" name="phone_no" placeholder="Enter your Phone number here" autocomplete="off"><br>
		<label>Password</label><br>
		<input type="password" name="password" placeholder="Enter your Password" autocomplete="off"><br>
		<label>Confirm Password</label><br>
		<input type="password" name="password2" placeholder="Confirm Password"autocomplete="off"><br>
		<button name="register">Register</button><br><br>
		<p><?php echo @$succ; ?></p>

	</form>

	<a href="login.php">Already registered?Login</a>
	<a href="users.php">View registered members</a>
	<a href="../index.php">Go Back</a>
</div>
</body>
</html>
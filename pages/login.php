<?php 
session_start();
$con =mysqli_connect( 'sql109.infinityfree.com','if0_38810862','Alto2002','if0_38810862_alto');
if (isset($_POST['login'])) {
	$username=$_POST['regno'];
	$pword=$_POST['password'];
	$query=mysqli_query($con,"SELECT * FROM attendance WHERE regno='$username' and password='$pword'");
	$check=mysqli_fetch_array($query);
	if (mysqli_num_rows($query)>0) {
		$_SESSION['id']=$check['id'];
		$_SESSION['full_name']=$check['full_name'];
		echo "Successifull Login";
		header("refresh:1;url=viewproject.php");
	}
	else{
		$Fail= "<p style='color:red;font-size:20px'>Incorrect login,Try again...</p>";
		header("refresh:2;url=login.php");
	}
}
 ?>
 <div>
 	<link rel="stylesheet" type="text/css" href="../css/style2.css">
 <h2>Login Here</h2>
 	<form action="" method="POST">
 		<label>Username</label><br>
 		<input type="text" name="regno" autocomplete="off"><br>
 		<label>Password</label><br>
 		<input type="password" name="password" autocomplete="off"><br>
 		<button name="login">Login</button><br><br>
 		<a href="../pages/Creat.php">Not regisred?..Register</a>
 		<a href="../index.php">Go Back</a>
 	</form>
 	<p><?php echo @$Fail; ?></p>
 </div>

<?php 
  $path = "../"; // Go up one level to find the root
  include 'header.php'; 
?>
<?php 
$con =mysqli_connect( 'localhost','root','','alto');
if (isset($_POST['submit'])) {
	$name=$_POST['full_name'];
	$prog=$_POST['programme'];
	$phone=$_POST['phone'];
	$mess=$_POST['message'];
	$query=mysqli_query($con, " INSERT INTO messages VALUES('','$name','$prog','$phone','$mess')");
	
	if ($query>0) {
		$th= " <i>Thank you for contacting us, welcome back!!!!!!!</i>";
		header("refresh:2;url=message.php");
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Message</title>
	<link rel="stylesheet" type="text/css" href="../css/message.css">	
</head>
<body>
<div>
		<h1>Hi, welocme to the communication page, please tell me your consern please</h1>
<form action="" method="POST">
	<label class="lab" >Full Name</label><br>
	<input type="text" name="full_name" placeholder="Enter yuor full name here" required   autocomplete="off"><br>
		<label class="lab">Programme</label><br>
 	<select name="programme" style="width: 350px; height: 45px; font-size: 16px;">
 		<option>....Select Programme....</option>
 		<option>Bachelor of Computer Science</option>
 		<option>Barchelor of Cpmputer Engineering</option>
 		<option>Barchelor of Agribusiness Management with Technology</option>
 		<option>Barchelor of ICT</option>
 		<option>Barchelor of Data Science</option>
 		<option>Barchelor of Environmental Science</option>
 		<option>Bachelor of Civil Engineering</option>
 		<option>Barchelor of Electrical Engineering</option>
 		<option>Barchelor of Mechanical Engineering</option>
 	</select><br>
	<label class="lab">Phone number</label><br>
	<input type="text" name="phone" placeholder="Enter your phone number there" required autocomplete="off"><br>
	<label class="lab">Message</label><br>
	<textarea placeholder="Enter your message there please" name="message" rows="4" cols="40" required autocomplete="off"></textarea><br>
	<button name="submit">Send</button>
    <a href="viewmessages.php">View Messages</a>
	<p style="font-size: 2px; color: green; "><?php echo @$th; ?></p>
</form>
<a href="../index.php">Go Back</a>
</div>
</body>
</html>
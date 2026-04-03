 <?php 
  $path = "../"; // Go up one level to find the root
  include 'header.php'; 
?>
 <?php 
$con =mysqli_connect( 'localhost','root','','alto');

if (isset($_POST['post'])) {
	$head=$_POST['heading'];
	$file=$_FILES['myfile']['name'];
	$desc=$_POST['description'];
	move_uploaded_file($_FILES['myfile']['tmp_name'] , "../store/".$file);
	$succ=mysqli_query($con, " INSERT INTO gallery VALUES('', '$head', '$file', '$desc')");

	if ($succ> 0) {
		echo "<p style='color:green; font-size:30px;'> Successifully Uploaded.....</p>";
		header("refresh:1;url=Project.php");
	}
}
 ?>

<body>	
<div>
	<link rel="stylesheet" type="text/css" href="../css/project.css">
	<form action="" method="POST" enctype="multipart/form-data">
		<h2>Welcome to gallery ,you can view some uploads or post new images</h2>
		<label class="lab">Heading</label><br>
		<input type="text" name="heading" placeholder="Enter your heading here" required autocomplete="off"><br>
		<label class="lab">Picture/Image</label><br>
		<input type="file" name="myfile" required><br>
		<label class="lab">Description</label><br>
		<textarea placeholder="Enter information about your images" name="description" required autocomplete="off"></textarea><br>
		<button name="post">Upload</button>
		<a href="viewproject.php">View Uploads</a>
	</form>
	<a href="../index.php"> Go back</a>
</div>

</body>
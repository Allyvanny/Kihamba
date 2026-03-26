<?php 
$con =mysqli_connect( 'sql109.infinityfree.com','if0_38810862','Alto2002','if0_38810862_alto');
if (isset($_GET['readid'])) {
	$takeid=$_GET['readid'];
	$query=mysqli_query($con, " SELECT * FROM materials WHERE id= '$takeid'");
	while ($disc= mysqli_fetch_array($query)) {
		$tid=$disc['title'];
		echo "
        <h1> Information</h1>
		<p style=' margin-left:30%;margin-right:30%;font-size:30px;background:whitesmoke'>$tid</p>";
	}
}
 ?>
 <a href="upload.php">Go back</a>
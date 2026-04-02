<?php 
  $path = "../"; // Go up one level to find the root
  include 'header.php'; 
?>
<?php 
/*Creating data base connections*/
$con =mysqli_connect( 'localhost','root','','alto');
/*getting the id of viewing data from data base*/
if (isset($_GET['viewid'])) {
	$ona=$_GET['viewid'];
	/*creating sql code for retreving data*/
	$view=mysqli_query($con, "SELECT * FROM attendance WHERE id='$ona'");
	$display='';
	while ($query=mysqli_fetch_array($view)) {
		$fname=$query['full_name'];
		$username=$query['username'];
		$phoneno=$query['phone_no'];
		$display="
<p><b><i>Full Name:</i></b>$fname</p>
<p><b><i>Username:</i></b>$username</p>
<p><b><i>Phone No:</i></b>$phoneno</p>

		";
	}
}

 ?>

 	<div style="text-align:center;background: whitesmoke;margin-right: 30%;margin-left: 30%; border: 2px solid greenyellow;background-image: url('download.png'); font-size: 30px; ">
 	<h2>User Informations</h2>
 	<p><?php echo $display; ?></p>

 	<a href="users.php">Go back</a>
 </div>



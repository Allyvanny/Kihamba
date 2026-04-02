<?php
session_start();
if(!isset($_SESSION['user_id'])){
    header("Location: login.php");
    exit();
}
?>
<?php 
  $path = "../"; // Go up one level to find the root
  include 'header.php'; 
?>
<?php 
$con =mysqli_connect( 'localhost','root','','alto');
$query=mysqli_query($con," SELECT * FROM attendance");
$i = 1;
$view='
<table class="styled-table">
<thead>
<tr>
<th>Sno</th>
<th>Full Name</th>
<th>Username</th>
<th>Phone Number</th>
<th> Action</th>
</tr>
</thead>

<tbody>';
while ($show = mysqli_fetch_array($query)) {
	$fid =$show['id'];
	$fname =$show['full_name'];
	$username =$show['username'];
$phoneno =$show['phone_no'];

$view .="
<tr>
<td>".$i++."</td>
<td>$fname</td>
<td>$username</td>
<td>$phoneno</td>
<td class='action'> 
<a href='edit.php?editid=$fid'>Edit</a>
<a href='view.php?viewid=$fid'>View</a>
<a href='delete.php?delid=$fid'onclick='return confirm(\"Are you sure you want to delete this record?\")'>Delete</a>
</td>
</tr>
";
}
$view .='</tbody><table>';
 ?>
 <div class="container">
 	<link rel="stylesheet" type="text/css" href="../css/style2.css">
 	<h1>All Registered Members Information Records </h1>
 	<?php 
echo $view;
 	 ?>
 	  <a href="../index.php">Go back</a>
 </div>
  <script type="text/javascript">
   
  function futa(fid) {
    var del = confirm("Are you sure you want to delete this record?");
    if (del) {
        // Redirecting to your delete logic page
        window.location.href = 'delete.php?delid=' + fid;
    }
}
 </script>
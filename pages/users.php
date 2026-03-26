<?php 
$con =mysqli_connect( 'sql109.infinityfree.com','if0_38810862','Alto2002','if0_38810862_alto');
$query=mysqli_query($con," SELECT * FROM attendance");
$i = 1;
$view='
<table border="1em">
<tr>
<th>Sno</th>
<th>Full Name</th>
<th>Registration Number</th>
<th>Phone Number</th>
<th> Action</th>
</tr>';
while ($show = mysqli_fetch_array($query)) {
	$fid =$show['id'];
	$fname =$show['full_name'];
	$regno =$show['regno'];
$phoneno =$show['phone_no'];

$view .="
<tr>
<td>".$i++."</td>
<td>$fname</td>
<td>$regno</td>
<td>$phoneno</td>
<td>
<a href='edit.php?editid=$fid'>Edit</a>
<a href='view.php?viewid=$fid'>View</a>
<a href='delete.php?delid=$fid'onclick='futa($fid)'>Delete</a>
</td>
</tr>
";
}
 ?>
 <div>
 	<link rel="stylesheet" type="text/css" href="../css/style2.css">
 	<h1>All Registered Members Information Records </h1>
 	<?php 
echo $view;
 	 ?>
 	  <a href="Creat.php">Go back</a>
 </div>
  <script type="text/javascript">
   
   function futa(){
  var del= confirm(" Are you sure you want to delete?");
  console.log(fid);
  if (del){
    alert("Successiful Deleted...");
    window.location='?id='+fid;
  }
 
}
 </script>
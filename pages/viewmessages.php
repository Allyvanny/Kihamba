<?php 

$con =mysqli_connect( 'sql109.infinityfree.com','if0_38810862','Alto2002','if0_38810862_alto');
$query=mysqli_query($con," SELECT * FROM messages");
$i = 1;
$view='
<table border="1em">
<tr>
<th>Sno</th>
<th>Full Name</th>
<th>Programme</th>
<th>Message</th>
<th> Action</th>
</tr>';
while ($show = mysqli_fetch_array($query)) {
	$fid =$show['id'];
	$fname =$show['full_name'];
	$prog =$show['programme'];
    $mess =$show['message'];

$view .="
<tr>
<td>".$i++."</td>
<td>$fname</td>
<td>$prog</td>
<td>$mess</td>
<td><a href='deletemessage.php?delid=$fid'onclick='futa($fid)'>Delete</a></td>
</tr>
";
}
 ?>
 <div>
 	<link rel="stylesheet" type="text/css" href="../css/style2.css">
 	<h1>All Messages sent from the people</h1>
 	<?php 
echo $view;
 	 ?>
 	  <a href="message.php">Go back</a>
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
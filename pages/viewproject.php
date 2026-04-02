<?php 
  $path = "../"; // Go up one level to find the root
  include 'header.php'; 
?>
<?php 
$con =mysqli_connect( 'localhost','root','','alto');
$view='';
$query=mysqli_query($con, "SELECT * FROM gallery ");
while ($take=mysqli_fetch_array($query)) {
$head=$take['heading'];
$file=$take['myfile'];
$des=$take['description'];
$uid=$take['id'];
$view.="
<p><strong>Heading:</strong>$head</p>
<p><img src='../store/$file' style='width:350px; height:300px; border:3px dotted teal; margin-left:10%'></p>
<p><strong>Description:</strong>$des</p>
<p> 
<a href='../pages/editproject.php?id=$uid'>Edit & Update</a>
  <a href='deleteproject.php?id=$uid' onclick='return confirm(\"Are you sure you want to delete this project?\")'>Delete</a>
  </p><hr>

";

}
 ?>

 
 <div>
  <a href="Project.php">Go Back</a>
    <link rel="stylesheet" type="text/css" href="../css/viewproject.css">
    <h2>Here are the images I have uploaded, keep a look.</h2>
 	<?php 
 echo $view; 
 	 ?>
<a href="Project.php">Go Back</a>
 </div>

 <script type="text/javascript">
   
   function futa(){
  var del= confirm(" Do you want to delete?");
  console.log(uid);
  if (del){
    alert("Successiful Deleted...");
    window.location='?id='+uid;
  }
 
}
 </script>
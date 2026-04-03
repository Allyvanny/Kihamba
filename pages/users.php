<?php
session_start();
if(!isset($_SESSION['user_id'])){
    header("Location: login.php");
    exit();
}
?>
<?php 
//   $path = "../"; // Go up one level to find the root
//   include 'header.php'; 
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
<th>Profile Picture</th>
<th> Action</th>
</tr>
</thead>

<tbody>';
while ($show = mysqli_fetch_array($query)) {
	$fid =$show['id'];
	$fname =$show['full_name'];
	$username =$show['username'];
$phoneno =$show['phone_no'];
$img = $show['profile_pic'];
$view .="
<tr>
<td>".$i++."</td>
<td>$fname</td>
<td>$username</td>
<td>$phoneno</td>
<td><img src='../store/$img' style='width:50px; height:50px; border-radius:50%;'></td>
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
   <div>
     <h2 style="color: #2e7d32; text-align: left; padding-left: 20px;">
        Hi, <?php echo $_SESSION['username']; ?>!
    </h2>
    <?php if(!empty($_SESSION['profile_pic'])): ?>
            <img src="../store/<?php echo $_SESSION['profile_pic']; ?>" 
                 style="width: 50px; height: 50px; border-radius: 50%; border: 2px solid #009879; ">
        <?php else: ?>
            <img src="../store/profile.png" style="width: 60px; height: 60px; border-radius: 50%;">
        <?php endif; ?>
   </div>
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
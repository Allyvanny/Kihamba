<?php 
session_start(); 
// Safety check: If not logged in, send them back to login page
if (!isset($_SESSION['user_id'])) {
    header("Location: pages/login.php");
    exit();
}

 
?>


<?php 
$path = "";
include 'pages/header.php'; ?>
<br><br><br>
<link rel="stylesheet" type="text/css" href="css/index.css">
<h2 style="color: #2e7d32; text-align: left; padding-left: 20px;">
        Welcome, <?php echo $_SESSION['username']; ?>!
    </h2>
	 <?php if(!empty($_SESSION['profile_pic'])): ?>
            <img src="store/<?php echo $_SESSION['profile_pic']; ?>" 
                 style="width: 50px; height: 50px; border-radius: 50%; border: 2px solid #009879; ">
        <?php else: ?>
            <img src="store/profile.png" style="width: 60px; height: 60px; border-radius: 50%;">
        <?php endif; ?>
	<marquee behavior="alternate" scrollamount="10"><h1>WARMLY WELOME, VISIT!!!!</h1></marquee>
<div id="image-i">
	<img src="images/my.jpg">
	<h2 style="border: 2px solid yellow;"> Am, <i style="color:green;">Alto Desdery Kihamba</i>...<br>Welcome to my portifolio.<br>
	In this portifolio, you will be able to visit different pages.<br>
	Within those pages there are many things that will make you feel right to visit my portifolio</h2>
</div>
<br><br>
<div class="MM">
	<div class="title-group">
    <small>OFFICIAL UPDATES</small>
    <h2>Announcements</h2>
    <div class="underline"><a href="pages/announcements.php?category=announcement">View All</a></div>
</div>

<div class="title-group">
    <small>WHAT'S HAPPENING</small>
    <h2>Latest News</h2>
    <div class="underline"><a href="pages/news.php?category=news">View All</a></div>
</div>

<div class="title-group">
    <small>STAY AHEAD</small>
    <h2>Upcoming Events</h2>
    <div class="underline"><a href="pages/upcoming.php?category=event">View All</a></div>
</div>
</div>

<?php include 'pages/footer.php'; ?>
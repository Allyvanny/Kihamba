<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>
<h1>Hello, <?php echo $_SESSION['username']; ?></h1>
<p>Here is the latest from the University:</p>

<div style="display:flex; gap:10px;">
    <a href="announcements.php" style="padding:10px; background:red; color:white; text-decoration:none;">Announcements</a>
    <a href="news.php" style="padding:10px; background:blue; color:white; text-decoration:none;">Latest News</a>
    <a href="upcoming.php" style="padding:10px; background:green; color:white; text-decoration:none;">Upcoming Events</a>
</div>

<br><br>
<a href="logout.php">Logout</a>
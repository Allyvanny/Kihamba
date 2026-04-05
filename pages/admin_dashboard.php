<?php
session_start();
if ($_SESSION['role'] !== 'admin') {
    header("Location: login.php"); // Kick out if not admin
    exit();
}
?>
<h1>Welcome, Admin <?php echo $_SESSION['username']; ?></h1>
<div style="background:#eee; padding:20px; border-radius:10px;">
    <h3>Management Tools</h3>
    <ul>
        <li><a href="add_update.php">Add New Announcement/News/Event</a></li>
        <li><a href="manage_users.php">View Registered Users</a></li>
        <li><a href="logout.php">Logout</a></li>
    </ul>
</div>
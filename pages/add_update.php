<?php
session_start();
if ($_SESSION['role'] !== 'admin') {
    die("Access Denied: Only Admins can add updates.");
}
?>

<?php
$conn = mysqli_connect("localhost", "root", "", "alto");

$message = "";
if (isset($_POST['submit'])) {
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $desc = mysqli_real_escape_string($conn, $_POST['description']);
    $cat = $_POST['category'];
    $event_date = !empty($_POST['event_date']) ? "'".$_POST['event_date']."'" : "NULL";

    $sql = "INSERT INTO updates (title, description, category, event_date) 
            VALUES ('$title', '$desc', '$cat', $event_date)";

    if (mysqli_query($conn, $sql)) {
        $message = "<p style='color:green;'>✅ Update added successfully!</p>";
    } else {
        $message = "<p style='color:red;'>❌ Error: " . mysqli_error($conn) . "</p>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Update</title>
    <style>
        body { font-family: sans-serif; padding: 20px; background: #eee; }
        .form-box { background: white; padding: 20px; border-radius: 10px; max-width: 400px; margin: auto; }
        input, textarea, select { width: 100%; padding: 10px; margin: 10px 0; border: 1.5px solid #ccc; border-radius: 5px; box-sizing: border-box; }
        button { width: 100%; padding: 12px; background: #2c3e50; color: white; border: none; border-radius: 5px; font-size: 16px; cursor: pointer; }
        label { font-weight: bold; font-size: 14px; }
    </style>
</head>
<body>

<div class="form-box">
    <h2>Post New Update</h2>
    <?php echo $message; ?>
    <form method="POST">
        <label>Title</label>
        <input type="text" name="title" placeholder="Enter headline..." required>

        <label>Category</label>
        <select name="category">
            <option value="announcement">Announcement</option>
            <option value="news">Latest News</option>
            <option value="event">Upcoming Event</option>
        </select>

        <label>Description</label>
        <textarea name="description" rows="4" placeholder="Write details here..." required></textarea>

        <label>Event Date (Optional)</label>
        <input type="date" name="event_date">

        <button type="submit" name="submit">Post to Website</button>
    </form>
    <br>
    <a href="updates.php" style="text-decoration:none; color:#3498db;">← View All Updates</a>
</div>

</body>
</html>
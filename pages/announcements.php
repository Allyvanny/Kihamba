<?php
$conn = mysqli_connect("localhost", "root", "", "alto");

// SQL: Filter by 'announcement' and show newest first
$sql = "SELECT * FROM updates WHERE category = 'announcement' ORDER BY date_posted DESC";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Announcements</title>
    <style>
        body { font-family: sans-serif; background: #fdf2f2; padding: 15px; }
        .card { background: white; border-left: 5px solid #e74c3c; padding: 15px; margin-bottom: 10px; border-radius: 5px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); }
        h2 { color: #c0392b; margin: 0 0 10px 0; font-size: 18px; }
        .date { font-size: 12px; color: #7f8c8d; }
    </style>
</head>
<body>
    <h1>📢 University Announcements</h1>
    <?php while($row = mysqli_fetch_assoc($result)): ?>
        <div class="card">
            <h2><?php echo $row['title']; ?></h2>
            <p><?php echo $row['description']; ?></p>
            <div class="date">Posted: <?php echo date('d M Y', strtotime($row['date_posted'])); ?></div>
        </div>
    <?php endwhile; ?>
</body>
</html>
<?php
$conn = mysqli_connect("localhost", "root", "", "alto");

// SQL: Filter by 'news'
$sql = "SELECT * FROM updates WHERE category = 'news' ORDER BY date_posted DESC";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latest News</title>
    <style>
        body { font-family: sans-serif; background: #f0f4f8; padding: 15px; }
        .news-card { background: white; padding: 0; margin-bottom: 20px; border-radius: 10px; overflow: hidden; box-shadow: 0 4px 6px rgba(0,0,0,0.1); }
        .content { padding: 15px; }
        h2 { color: #2c3e50; margin: 0; font-size: 20px; }
        .tag { background: #3498db; color: white; padding: 2px 8px; border-radius: 3px; font-size: 10px; }
    </style>
</head>
<body>
    <h1>📰 Latest News</h1>
    <?php while($row = mysqli_fetch_assoc($result)): ?>
        <div class="news-card">
            <div class="content">
                <span class="tag">NEWS</span>
                <h2><?php echo $row['title']; ?></h2>
                <p><?php echo $row['description']; ?></p>
                <small><?php echo date('F j, Y', strtotime($row['date_posted'])); ?></small>
            </div>
        </div>
    <?php endwhile; ?>
</body>
</html>
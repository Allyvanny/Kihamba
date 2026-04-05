<?php
$conn = mysqli_connect("localhost", "root", "", "alto");

// SQL: Filter by 'event' and sort by the FUTURE date
$sql = "SELECT * FROM updates WHERE category = 'event' AND event_date >= CURDATE() ORDER BY event_date ASC";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upcoming Events</title>
    <style>
        body { font-family: sans-serif; background: #e8f5e9; padding: 15px; }
        .event-card { background: white; display: flex; align-items: center; padding: 15px; margin-bottom: 10px; border-radius: 8px; }
        .date-box { background: #2ecc71; color: white; padding: 10px; border-radius: 5px; text-align: center; min-width: 60px; margin-right: 15px; }
        .info h2 { margin: 0; font-size: 18px; color: #27ae60; }
    </style>
</head>
<body>
    <h1>🗓 Upcoming Events</h1>
    <?php while($row = mysqli_fetch_assoc($result)): ?>
        <div class="event-card">
            <div class="date-box">
                <strong><?php echo date('d', strtotime($row['event_date'])); ?></strong><br>
                <?php echo date('M', strtotime($row['event_date'])); ?>
            </div>
            <div class="info">
                <h2><?php echo $row['title']; ?></h2>
                <p><?php echo $row['description']; ?></p>
            </div>
        </div>
    <?php endwhile; ?>
</body>
</html>
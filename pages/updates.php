<?php
// Database connection (update with your InfinityFree details later)
$conn = mysqli_connect("localhost", "root", "", "alto");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM updates ORDER BY date_posted DESC";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latest Updates</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f4f4f4; padding: 20px; }
        .container { max-width: 800px; margin: auto; }
        
        /* Card Styling */
        .card { 
            background: white; 
            border-radius: 8px; 
            padding: 15px; 
            margin-bottom: 20px; 
            box-shadow: 0 2px 5px rgba(0,0,0,0.1); 
        }
        
        /* Category Badges */
        .badge {
            padding: 5px 10px;
            border-radius: 5px;
            font-size: 12px;
            text-transform: uppercase;
            color: white;
        }
        .announcement { background: #e74c3c; } /* Red */
        .news { background: #3498db; }         /* Blue */
        .event { background: #2ecc71; }        /* Green */
        
        h2 { margin-top: 10px; color: #333; }
        p { color: #666; line-height: 1.5; }
        .date { font-size: 12px; color: #999; }
    </style>
</head>
<body>

<div class="container">
    <h1>Dashboard Updates</h1>

    <?php while($row = mysqli_fetch_assoc($result)): ?>
        <div class="card">
            <span class="badge <?php echo $row['category']; ?>">
                <?php echo $row['category']; ?>
            </span>
            
            <h2><?php echo $row['title']; ?></h2>
            <p><?php echo $row['description']; ?></p>
            
            <?php if($row['category'] == 'event'): ?>
                <p><strong>🗓 Event Date:</strong> <?php echo $row['event_date']; ?></p>
            <?php endif; ?>
            
            <div class="date">Posted on: <?php echo date('M d, Y', strtotime($row['date_posted'])); ?></div>
        </div>
    <?php endwhile; ?>
</div>

</body>
</html>
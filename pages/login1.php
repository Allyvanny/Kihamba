<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "alto");

if (isset($_POST['login'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = md5($_POST['password']); 

    // 1. Check if it's the Admin first (Manual check or from an Admin table)
    if ($username == "admin" && $password == md5("admin123")) {
        $_SESSION['username'] = "Admin";
        $_SESSION['role'] = "admin";
        header("Location: admin_dashboard.php");
        exit();
    }

    // 2. If not admin, check your existing 'attendance' table
    $query = "SELECT * FROM attendance WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $user['username'];
        $_SESSION['role'] = "user"; // Assign 'user' role to anyone in attendance table
        header("Location: user_dashboard.php");
    } else {
        echo "<script>alert('User not found in Attendance records!');</script>";
    }
}
?>

<div class="form-card">
    <link rel="stylesheet" type="text/css" href="../css/style3.css">
    <form action="" method="POST" autocomplete="off">
        <h2>Login</h2>
        <div class="form-elements">
            <label>Username</label>
            <input type="text" name="username" required placeholder="Username" autocomplete="off">
            
            <label>Password</label>
            <input type="password" name="password" required placeholder="Password" autocomplete="new-password">
            
            <button name="login">Login</button>
        </div>
        <div class="msg"><?php echo @$msg; ?></div>
        <div class="form-links">
            <a href="Creat.php">New here? Register</a>
            <a href="../index.php">Back to Home</a>
        </div>
    </form>
</div>
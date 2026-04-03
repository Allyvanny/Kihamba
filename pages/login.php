<?php 
session_start(); // MUST BE THE FIRST LINE
$con = mysqli_connect('localhost', 'root', '', 'alto');

if(isset($_POST['login'])){
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $password = md5($_POST['password']);

    $query = mysqli_query($con, "SELECT * FROM attendance WHERE username='$username' AND password='$password'");
    
    if(mysqli_num_rows($query) > 0){
        $row = mysqli_fetch_array($query);
        $_SESSION['user_id'] = $row['id']; // Save user info to session
        $_SESSION['username'] = $row['username'];
        $_SESSION['profile_pic'] = $row['profile_pic']; // Save profile picture filename to session
        header("Location: ../index.php");
        exit(); // Stop further script execution
    } else {
        $msg = "<p style='color:red;'>Incorrect username or password</p>";
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
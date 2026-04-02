<?php 
$con = mysqli_connect('localhost', 'root', '', 'alto');

if(isset($_POST['register'])){
    $fullname = mysqli_real_escape_string($con, $_POST['full_name']);
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $phoneno = mysqli_real_escape_string($con, $_POST['phone_no']);
    $pword = md5($_POST['password']);
    $pword2 = md5($_POST['password2']);
    
    $test = mysqli_query($con, "SELECT * FROM attendance WHERE username='$username'");
    if (mysqli_num_rows($test) > 0) {
        $msg = "<p style='color:red;'>User already exists!</p>";
    } else {
        if($pword == $pword2){
            $check = mysqli_query($con, "INSERT INTO attendance (full_name, username, phone_no, password) VALUES ('$fullname', '$username', '$phoneno', '$pword')");
            if ($check) {
                $msg = "<p style='color:green;'>Registered Successfully!</p>";
                header("refresh:1;url=users.php");
            }
        } else {
            $msg = "<p style='color:red;'>Passwords do not match!</p>";
        }
    }
}
?>

<div class="form-card">
	<link rel="stylesheet" type="text/css" href="../css/style3.css">
    <form action="" method="POST" autocomplete="off">
        <h1>Register</h1>
        <div class="form-elements">
            <label>Full Name</label>
            <input type="text" name="full_name" required placeholder="John Doe" autocomplete="off">
            
            <label>Username</label>
            <input type="text" name="username" required placeholder="johndoe123" autocomplete="none	">
            
            <label>Phone Number</label>
            <input type="text" name="phone_no" required placeholder="07XXXXXXXX" autocomplete="off">
            
            <label>Password</label>
            <input type="password" name="password" required autocomplete="new-password">
            
            <label>Confirm Password</label>
            <input type="password" name="password2" required autocomplete="new-password">
            
            <button name="register">Create Account</button>
        </div>
        <div class="msg"><?php echo @$msg; ?></div>
        <div class="form-links">
            <a href="login.php">Already have an account? Login</a>
        </div>
    </form>
</div>
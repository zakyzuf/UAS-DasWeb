<?php 
 
include 'functions.php';
 
error_reporting(0);
 
session_start();
 
if (isset($_SESSION['username'])) {
    header("Location: index.php");
}
 
if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
 
    if ($password == $cpassword) {
        $sql = "SELECT * FROM users WHERE email='$email'";
        $result = mysqli_query($conn, $sql);
        if (!$result->num_rows > 0) {
            $sql = "INSERT INTO users (username, email, password)
                    VALUES ('$username', '$email', '$password')";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                echo "<script>alert('Selamat, registrasi berhasil!')
                document.location.href = 'index.php';</script>";
            } else {
                echo "<script>alert('Woops! Terjadi kesalahan.')</script>";
            }
        } else {
            echo "<script>alert('Woops! Email Sudah Terdaftar.')</script>";
        }
         
    } else {
        echo "<script>alert('Password Tidak Sesuai')</script>";
    }
}
 
?>
 
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styleLogin.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>equals. Register</title>
</head>
<body>
    <div class="container">
        <div class="center">
            <h1>Register to equals.</h1>
        <form action="" method="POST">
            <div class="txt_field">
                <input type="text" name="username" value="<?php echo $username; ?>" required>
                <span></span>
                <label>Username</label>
            </div>
            <div class="txt_field">
                <input type="email" name="email" value="<?php echo $email; ?>" required>
                <span></span>
                <label>Email</label>
            </div>
            <div class="txt_field">
                <input type="password" name="password" value="<?php echo $_POST['password']; ?>" required>
                <span></span>
                <label>Password</label>
            </div>
            <div class="txt_field">
                <input type="password" name="cpassword" value="<?php echo $_POST['cpassword']; ?>" required>
                <span></span>
                <label>Confirm Password</label>
            </div>
            <input type="submit" value="Register" name="register">
            <div class="signup_link">Anda sudah punya akun? <a href="login.php">Login </a></div>
        </form>
        </div>
    </div>
</body>
</html>
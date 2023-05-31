<?php 
 
include 'functions.php';
 
error_reporting(0);
 
session_start();
 
if (isset($_SESSION['username'])) {
    header("Location: index1.php");
}
 
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = ($_POST['password']);
 
    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $admin = "SELECT * FROM users WHERE email='admin@gmail.com'";
    $result = mysqli_query($conn, $sql);
    $resultadmin = mysqli_query($conn, $admin);
    if ($result->num_rows > 0) {
      if ($row['level'] == 1){
        $_SESSION['admin']=$user;
        header("Location: admin.php");
      } else {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
        header("Location: index1.php");
      }
    } else {
        echo "<script>alert('Email atau password Anda salah. Silahkan coba lagi!')</script>";
    }
}
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login to equals.</title>
    <link rel="stylesheet" type="text/css" href="styleLogin.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
    <div class="center">
        <h1>Login to equals.</h1>
        <form id="formLogin" method="post" action="">
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
          <div class="pass">Forgot Password?</div>
          <input type="submit" value="Login" name="login">
          <div class="signup_link">
            Not a member? <a href="signup.php">Signup</a>
          </div>
        </form>
    </div>
    </div>
</body>
</html>
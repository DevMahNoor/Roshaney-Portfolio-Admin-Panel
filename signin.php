<?php
include 'db.php';
session_start();
$error = "";

if (isset($_POST['login'])) {
  
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $email = $_POST['email'];

    
    $query = "SELECT * FROM users WHERE username='$username' and email ='$email 'AND password='$password'";

    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        $_SESSION['user'] = $username;
        header("Location: dashboard.php");
        exit();
    } else {
        $error = "Invalid username or password!";
    }
} 
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Sign In — PortfolioOS</title>
  <link rel="stylesheet" href="css/style.css" />
</head>

<body>

<div class="auth-wrap">

  <!-- Left Panel -->
  <div class="auth-panel auth-panel--left">
    <div class="auth-brand">
      <div class="logo-mark">✦</div>
      <h1>Welcome<br/>Back</h1>
      <p>Sign in to your dashboard.</p>
    </div>
  </div>

  <!-- Right Panel -->
  <div class="auth-panel" style="background:var(--bg-deep);">
    <div class="form-card">

      <div class="form-card__header">
        <h2>Sign In</h2>
      </div>

      
      <?php if($error != ""): ?>
        <div style="color:red; margin-bottom:10px;">
          <?= $error ?>
        </div>
      <?php endif; ?>

      <!-- ✅ FORM CONNECTED -->
      <form method="POST">

        <div class="form-group">
          <label>Username</label>
          <div class="input-wrap">
            <span class="icon">👤</span>
            <input type="text" name="username" placeholder="Enter username" required />
          </div>
        </div>
        
        <div class="form-group">
          <label>Email</label>
          <div class="input-wrap">
            <span class="icon">✉</span>
            <input type="email" name="email" placeholder="Enter email" required />
          </div>
        </div>


        <div class="form-group">
          <label>Password</label>
          <div class="input-wrap">
            <span class="icon">🔒</span>
            <input type="password" name="password" placeholder="Enter password" required />
          </div>
        </div>

        <button type="submit" name="login" class="btn btn-primary btn-full">
          Sign In
        </button>

      </form>

      <p style="margin-top:15px;">
        Don't have an account? <a href="signup.php">Signup</a>
      </p>

    </div>
  </div>

</div>

</body>
</html>

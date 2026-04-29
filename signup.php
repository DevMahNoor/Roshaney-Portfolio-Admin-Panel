<?php
session_start();
include 'db.php';

if (isset($_POST['register'])) {

    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $password_verify = md5($_POST['password_verify']);

    if ($password !== $password_verify) {
        die("Passwords do not match!");
    }

    $query = "INSERT INTO users (username, password)
              VALUES ('$username', '$password')";

    mysqli_query($conn, $query);

    // <html>
    // <pre>
    //   print_r($query, true);
    //   exit();
    // </pre>
    // </html>
    header("Location: signin.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Sign Up — PortfolioOS</title>
  <link rel="stylesheet" href="css/style.css" />
</head>
<body>

<div class="auth-wrap">

  <!-- Left panel -->
  <div class="auth-panel auth-panel--left">
    <div class="auth-brand fade-up">
      <div class="logo-mark">✦</div>
      <h1>PortfolioOS</h1>
      <p>Your personal admin portal to manage, update, and showcase your professional portfolio with ease.</p>
      <div class="auth-stats">
        <div class="stat-item"><span class="num">∞</span><span class="lbl">Projects</span></div>
        <div class="stat-item"><span class="num">100%</span><span class="lbl">Control</span></div>
        <div class="stat-item"><span class="num">1</span><span class="lbl">Dashboard</span></div>
      </div>
    </div>
  </div>

  <!-- Right panel -->
  <div class="auth-panel" style="background:var(--bg-deep);">
    <div class="form-card fade-up">
      <div class="form-card__header">
        <h2>Create Account</h2>
        <p>Set up your portfolio admin in seconds.</p>
      </div>

      <form class="demo-form" method="POST" action="">
        <div class="form-row">
          <div class="form-group">
            <label>First Name</label>
            <div class="input-wrap">
              <span class="icon">👤</span>
              <input type="text" placeholder="Ali" required />
            </div>
          </div>
          <div class="form-group">
            <label>Last Name</label>
            <div class="input-wrap">
              <span class="icon">👤</span>
              <input type="text" placeholder="Ahmed" required />
            </div>
          </div>
        </div>

        <div class="form-group">
          <label>Email Address</label>
          <div class="input-wrap">
            <span class="icon">✉</span>
            <input type="email" placeholder="you@example.com" required />
          </div>
        </div>

        <div class="form-group">
          <label>Username</label>
          <div class="input-wrap">
            <span class="icon">@</span>
            <input type="text" placeholder="ali_ahmed" required />
          </div>
        </div>

        <div class="form-group">
          <label>Password</label>
          <div class="input-wrap">
            <span class="icon">🔒</span>
            <input type="password" placeholder="Min 8 characters" required />
          </div>
        </div>

        <div class="form-group">
          <label>Confirm Password</label>
          <div class="input-wrap">
            <span class="icon">🔒</span>
            <input type="password" placeholder="Repeat password" required />
          </div>
        </div>
            
        <div class="check-row" style="justify-content:flex-start; gap:10px; margin-bottom:24px;">
          <input type="checkbox" id="terms" />
          <label for="terms" style="margin:0; text-transform:none; font-size:.86rem; letter-spacing:0; color:var(--text-dim);">
            I agree to the <a href="#">Terms of Service</a> and <a href="#">Privacy Policy</a>
          </label>
        </div>

        <button type="submit" class="btn btn-primary btn-full" data-label="register">Create Account</button>
      </form>

      <p class="text-center text-muted mt-4">Already have an account? <a href="signin.php">Sign in</a></p>
    </div>
  </div>

</div>

<script src="js/main.js"></script>
</body>
</html>

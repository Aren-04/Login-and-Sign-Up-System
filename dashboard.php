<?php
session_start();
if (!isset($_SESSION["user"])) {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Dashboard</title>
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>
  <div class="dashboard-container">
    <h1>Welcome, <?php echo htmlspecialchars($_SESSION["user"]); ?></h1>
    <p style="text-align:center; margin-bottom: 20px;">You are now logged in to your account.</p>
    <a href="logout.php" class="logout-btn" style="display:block; width:100%; text-align:center;">Logout</a>
  </div>
</body>
</html>

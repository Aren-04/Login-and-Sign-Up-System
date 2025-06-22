<?php
session_start();
require_once "config/db.php";

$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $login = trim($_POST["login"]);
    $password = $_POST["password"];

    if (empty($login) || empty($password)) {
        $error = "All fields are required";
    } else {
        $stmt = $conn->prepare("SELECT id, username, password FROM users WHERE username=? OR email=?");
        $stmt->bind_param("ss", $login, $login);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows === 1) {
            $stmt->bind_result($id, $username, $hashed);
            $stmt->fetch();

            if (password_verify($password, $hashed)) {
                $_SESSION["user"] = $username;
                header("Location: dashboard.php");
                exit;
            } else {
                $error = "Incorrect password";
            }
        } else {
            $error = "User does not exist";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>
  <div class="form-container">
    <h2>Login</h2>
    <?php if (!empty($error)) echo "<p class='error'>$error</p>"; ?>
    <form method="POST" action="">
      <input type="text" name="login" placeholder="Username or Email" required>
      <input type="password" name="password" placeholder="Password" required>
      <button type="submit">Login</button>
      <div class="link">Don't have an account? <a href="signup.php">Signup here</a></div>
    </form>
  </div>
</body>
</html>

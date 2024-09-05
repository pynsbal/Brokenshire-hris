<?php
session_start();
require_once('process/dbh.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $username = $_POST['username'];
  $password = $_POST['password'];

  $sql = "SELECT * FROM `employee` WHERE username='$username' AND password='$password'";
  $result = mysqli_query($conn, $sql);
  $res = mysqli_fetch_assoc($result);

  if ($res) {
    $_SESSION['loggedin'] = true;
    $_SESSION['id'] = $res['id'];

    if ($res['profile_completed'] == 0) {
      header('Location: myprofileup.php?id=' . $res['id']);
    } else {
      header('Location: myprofile.php?id=' . $res['id']);
    }
    exit;
  } else {
    echo "Invalid login credentials";
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <form method="POST" action="login.php">
    <label for="username">Username:</label>
    <input type="text" name="username" required>
    <label for="password">Password:</label>
    <input type="password" name="password" required>
    <button type="submit">Login</button>
  </form>
</body>
</html>

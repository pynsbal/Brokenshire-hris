<?php
require_once('process/dbh.php');

if (isset($_POST['update'])) {
    $id = $_POST['id'] ?? '';
    $old = $_POST['oldpass'] ?? '';
    $new = $_POST['newpass'] ?? '';

    $result = mysqli_query($conn, "SELECT password FROM `admin` WHERE id='$id'");
    $admin = mysqli_fetch_assoc($result);
    $oldPassword = $admin['password'];

    if ($old == $oldPassword) {
        // Hash the new password before updating
        $hashedNewPassword = password_hash($new, PASSWORD_DEFAULT);

        $updateQuery = "UPDATE `admin` SET `password`='$hashedNewPassword' WHERE id = $id";
        if (mysqli_query($conn, $updateQuery)) {
            echo "<script>
                    alert('Password Updated');
                    window.location.href = 'admin_homepage.php';
                  </script>";
            exit;
        } else {
            echo "<script>
                    alert('Failed to Update Password');
                    window.history.back();
                  </script>";
            exit;
        }
    } else {
        echo "<script>
                alert('Incorrect Old Password. Please try again.');
                window.history.back();
              </script>";
        exit;
    }
}
?>

<html>
    <head>
        <title>Change Password | Admin</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" type="text/css" href="css/test.css">      
        <link href="css/settings.css" rel="stylesheet" media="all">
    </head>
    <body>
    <nav class="navbar navbar-expand-lg" style="background-color: #004138;">
    <a class="navbar-brand text-light" href="#">
        <img src="hrl.png" width="55" height="30" class="d-inline-block align-top" alt="">
        BCHRIS
      </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link text-light" href="admin_homepage.php">Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light" href="registeracc.php">Registration</a>
      </li>
      <!-- <li class="nav-item">
        <a class="nav-link text-light" href="settings.php">Settings</a>
      </li> -->
      <li class="nav-item">
        <a class="nav-link text-light" href="logout.php">Logout</a>
      </li>
    </ul>
  </div>
</nav>

<body>
    <!-- <div class="container">
        <h3>Reset Password</h3>
        <form action="settings.php" method="POST">
            <div class="form-group">
                <label for="oldpass">Old Password</label>
                <input type="password" name="oldpass" required>
            </div>

            <div class="form-group">
                <label for="newpass">New Password</label>
                <input type="password" name="newpass" required>
            </div>

            <input type="hidden" name="id" value="<?php echo $id; ?>" required>
            
            <div>
                <button type="submit" class="btn btn-primary" name="update">Submit</button>
            </div>
        </form>
    </div> -->
</body>
</html>
<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
    header('Location: login.php');
    exit;
}

require_once('process/dbh.php');

$id = $_SESSION['id'];
$sql = "SELECT * FROM employee WHERE id='$id'";
$result = mysqli_query($conn, $sql);

if ($result) {
    $res = mysqli_fetch_assoc($result);
    $firstname = $res['first_name'];
    $lastname = $res['last_name'];
    $position = $res['position'];
} else {
    echo "Error: " . mysqli_error($conn);
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Employee Homepage | BCHRIS</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="emphomepage.css">

  <style>
    .card-img-top {
      display: block;
      margin-left: auto;
      margin-right: auto;
    }
  </style>
  
</head>
<body>
    
    <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="card mb-3">
                <img src="bcp.jpg" alt="...">
                <div class="card-body">
                    <h2 class="card-title"><center><strong>WELCOME TO BCHRIS</strong></center></h2>
                  <p class="card-text"><center><em>fides et servitium</em></center></p>
                  <?php include 'navbar-user.html'; ?>
                </div>
              </div>
          </div>
        </div>
        <div class="container">
        <div class="row">
          <div class="col-sm-12 d-flex justify-content-center">
            <div class="card" style="width: 70rem;">
              <div class="card-body text-center">
                <img class="card-img-top" src="user.png" alt="Card image" style="width: 15%;">
                <br>
                <br>
                <h2 class="card-title"><?php echo $firstname . " " . $lastname; ?></h2>
                <h4 class="card-title"><?php echo $position; ?></h4>
                <a href="viewmyprofile.php?id=<?php echo $id?>" class="btn btn-success">See Profile</a>
              </div>
            </div>
          </div>
        </div>
    </div>

</body>
</html>

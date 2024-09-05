<?php
session_start();
require_once ('process/dbh.php');

// Check if the user is not logged in
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    // Redirect to the login page or display an error
    header('Location: admin_homepage.php');
    exit;
}

$search = isset($_GET['search']) ? $_GET['search'] : '';

$sql = "SELECT employee_id, first_name, last_name, department, position, date_started 
        FROM employee 
        WHERE last_name LIKE '%$search%' 
        OR first_name LIKE '%$search%'
        OR department LIKE '%$search%'
        OR position LIKE '%$search%'
        ORDER BY last_name ASC";

$result = mysqli_query($conn, $sql);

// Check if the query was successful 
if (!$result) {
    echo "Error: " . mysqli_error($conn);
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin | BCHRIS</title>
  <link rel="stylesheet" type="text/css" href="css/test.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="mystyle.css">
  <style>
    h2 {
      text-align: center;
    }

    .form-group {
      margin-bottom: 15px;
    }

    .form-row::after {
      content: "";
      display: table;
      clear: both;
    }

    .form-control {
      display: block;
      width: 100%;
      padding: 0.375rem 0.75rem;
      font-size: 1rem;
      line-height: 1.5;
      color: #495057;
      background-color: #fff;
      background-clip: padding-box;
      border: 1px solid #ced4da;
      border-radius: 0.25rem;
    }

    th {
      text-align: center; /* Corrected the typo in the alignment property */
    }

    .dropdown-menu {
      max-height: 200px;
      overflow-y: auto;
    }

  </style>
</head>
<body>

<div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="card mb-3">
          <img src="bcp.jpg">
          <div class="card-body">
            <h2 class="card-title"><center><strong>WELCOME TO BCHRIS</strong></center></h2>
            <p class="card-text"><center><em>fides et servitium</em></center></p>
            <nav class="navbar navbar-expand-lg" style="background-color: #004138;">
            <div class="container-fluid">
              <a class="navbar-brand text-light" href="admin_homepage.php">
                <img src="hrw.png" width="55" height="30" class="d-inline-block align-top" alt="">
                BCHRIS
              </a>

              <div class="justify-content-end">
                <ul class="navbar-nav">
                  <li class="nav-item active">
                    <a class="nav-link text-light" href="admin_homepage.php">Home<span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-light" href="registeracc.php">Registration</a>
                  </li>

                  <li class="nav-item dropdown">
                    <a class="nav-link text-light dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    </a>
                    <div class="dropdown-menu" aria-labelledby="nabvarDropdown" style="background-color: #004138;">
                      <a class="nav-link text-light" href="settings.php">Settings</a>
                      <a class="nav-link text-light" href="logout.php">Logout</a>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</nav>

<!-- Search and Filter Section -->
<div class="container">
    <div class="row justify-content-end">
        <div class="col-auto">
            <form class="form-inline mt-3" action="admin_homepage.php" method="GET">
                <input class="form-control mr-2" type="text" placeholder="Search..." aria-label="Search" name="search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>

                <!-- Add a space between the search button and filter input -->
                <div style="margin-left: 10px;"></div>

                <input class="form-control mr-2" type="text" placeholder="Filter by Date Started (YYYY-MM-DD)" name="filter_date">
                <button class="btn btn-outline-primary" type="submit">Filter</button>
            </form>
        </div>
    </div>
</div>

<?php
$filter_date = isset($_GET['filter_date']) ? $_GET['filter_date'] : '';

if ($filter_date != '') {
    $sql = "SELECT employee_id, first_name, last_name, department, position, date_started, status 
            FROM employee 
            WHERE date_started LIKE '%$filter_date%'
            ORDER BY last_name ASC";
} else {
    $sql = "SELECT employee_id, first_name, last_name, department, position, date_started, status 
            FROM employee 
            WHERE last_name LIKE '%$search%' 
            OR first_name LIKE '%$search%'
            OR department LIKE '%$search%'
            OR position LIKE '%$search%'
            ORDER BY last_name ASC";
}

$result = mysqli_query($conn, $sql);

// Check if the query was successful 
if (!$result) {
    echo "Error: " . mysqli_error($conn);
    exit;
}
?>

<div class="container custom-container">
  <div class="card custom-card">
    <div class="card-body">
      <table class="table table-bordered table-hover">
        <thead>
          <tr bgcolor = >
          <th align="center">Employee ID</th>
            <th align="center">Last Name</th>
            <th align="center">First Name</th>
            <th align="center">Position</th>
            <th align="center">Department</th>
            <th align="
            <th align="center">Date Started</th>
          </tr>
        </thead>

        <?php
while ($employee = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>".$employee['employee_id']."</td>";
    echo "<td>".$employee['last_name']."</td>";
    echo "<td>".$employee['first_name']."</td>";
    echo "<td>".$employee['position']."</td>";
    echo "<td>".$employee['department']."</td>";

    $formattedDate = date("m-d-Y", strtotime($employee['date_started']));
    echo "<td>".$formattedDate."</td>";

    // $status = $employee['status'];
    // $statusClass = '';
    
    // if ($status == 'Active') {
    //     $statusClass = 'status-active';
    // } else {
    //     $statusClass = 'status-inactive';
    // }

    // echo "<td class='$statusClass'>$status</td>";

    echo "<td>";
    echo "<a class='btn btn-info' href='cici.php?id=" . $employee['employee_id'] . "'>View</a>";
    // echo "<a class='btn btn-primary' href='myprofileup.php?id=" . $employee['employee_id'] . "'>Edit</a>";
    echo "</td>";
}
?>
</table>
</div>
  </div>
</div>
</body>
</html>
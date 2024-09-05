<?php
session_start();

// Check if the user is not logged in
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
   // Redirect to the login page or display an error
   header('Location: login.php');
   exit;
}

require_once('process/dbh.php');

$id = isset($_GET['id']) ? $_GET['id'] : '';
if (!$id) {
    echo "Invalid ID parameter";
    exit;
}

$sql = "SELECT * FROM `employee` WHERE id=$id";
$result = mysqli_query($conn, $sql);

// Check if the query was successful
if ($result) {
    while ($res = mysqli_fetch_assoc($result)) {
        $prefix = $res['prefix'];
        $first_name = $res['first_name'];
        $last_name = $res['last_name'];
        $middlename = $res['middle_name'];
        $nickname = $res['nickname'];
        $gender = $res['gender'];
        $religion = $res['religion'];
        $civilstatus = $res['civil_status'];
        $citizenship = $res['citizenship'];
        $birthday = $res['birthday'];
        $email = $res['email'];
        $phonenumber = $res['phone_number'];
        $department = $res['department'];
        $position = $res['position'];
        $employeeid = $res['employee_id'];
    }
}
?>

background-color: #E9E9E9;

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Employee Profile Form</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="styles.css" />
  <style>
    h2 {
      text-align: center;
    }
    div {
      border-radius: 5px;
      padding: 20px;
    }
  </style>
</head>
<body>
<h2>EMPLOYEE PROFILE</h2>
<div class="accordion accordion-flush" id="accordionFlushExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingOne">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
        <strong>PERSONAL INFORMATION</strong>
      </button>
    </h2>
    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">
        <form class="row g-3" method="POST" action="myprofileup.php?id=<?php echo $id?>">
          <div class="col-md-3">
            <label for="prefix" class="form-label">Prefix</label>
            <select class="form-select" name="prefix" required>
              <option value="Mr." <?php if($prefix == "Mr.") echo "selected"; ?>>Mr.</option>
              <option value="Ms." <?php if($prefix == "Ms.") echo "selected"; ?>>Ms.</option>
              <option value="Jr." <?php if($prefix == "Jr.") echo "selected"; ?>>Jr.</option>
              <option value="Sr." <?php if($prefix == "Sr.") echo "selected"; ?>>Sr.</option>
              <option value="II" <?php if($prefix == "II") echo "selected"; ?>>II</option>
              <option value="III" <?php if($prefix == "III") echo "selected"; ?>>III</option>
              <option value="IV" <?php if($prefix == "IV") echo "selected"; ?>>IV</option>
              <option value="Mrs." <?php if($prefix == "Mrs.") echo "selected"; ?>>Mrs.</option>
              <option value="Dr." <?php if($prefix == "Dr.") echo "selected"; ?>>Dr.</option>
              <option value="Rev." <?php if($prefix == "Rev.") echo "selected"; ?>>Rev.</option>
              <option value="None" <?php if($prefix == "None") echo "selected"; ?>>None</option>
            </select>
          </div>

          <div class="col-md-3">
            <label for="first_name" class="form-label">First Name</label>
            <input type="text" class="form-control" id="first_name" name="first_name" value="<?php echo $first_name;?>" readonly>
          </div>

          <div class="col-md-3">
            <label for="last_name" class="form-label">Last Name</label>
            <input type="text" class="form-control" id="last_name" name="last_name" value="<?php echo $lastname;?>" readonly>
          </div>

          <div class="col-md-3">
            <label for="middle_name" class="form-label">Middle Name</label>
            <input type="text" class="form-control" id="middle_name" name="middle_name" value="<?php echo $middlename;?>" readonly>
          </div>

          <div class="col-md-3">
            <label for="nickname" class="form-label">Nickname</label>
            <input type="text" class="form-control" id="nickname" name="nickname" value="<?php echo $nickname;?>" readonly>
          </div>

          <div class="col-md-3">
            <label for="gender" class="form-label">Gender</label>
            <select class="form-select" name="gender" readonly>
              <option value="Male" <?php if($gender == "Male") echo "selected"; ?>>Male</option>
              <option value="Female" <?php if($gender == "Female") echo "selected"; ?>>Female</option>
            </select>
          </div>

          <div class="col-md-3">
            <label for="religion" class="form-label">Religion</label>
            <input type="text" class="form-control" id="religion" name="religion" value="<?php echo $religion;?>" readonly>
          </div>

          <div class="col-md-3">
            <label for="civil_status" class="form-label">Civil Status</label>
            <select class="form-select" name="civil_status" readonly>
              <option value="Single" <?php if($civilstatus == "Single") echo "selected"; ?>>Single</option>
              <option value="Married" <?php if($civilstatus == "Married") echo "selected"; ?>>Married</option>
              <option value="Widowed" <?php if($civilstatus == "Widowed") echo "selected"; ?>>Widowed</option>
              <option value="Separated" <?php if($civilstatus == "Separated") echo "selected"; ?>>Separated</option>
              <option value="Divorced" <?php if($civilstatus == "Divorced") echo "selected"; ?>>Divorced</option>
            </select>
          </div>

          <div class="col-md-3">
            <label for="citizenship" class="form-label">Citizenship</label>
            <input type="text" class="form-control" id="citizenship" name="citizenship" value="<?php echo $citizenship;?>" readonly>
          </div>

          <div class="col-md-3">
            <label for="birthday" class="form-label">Birthday</label>
            <input type="date" class="form-control" id="birthday" name="birthday" value="<?php echo $birthday;?>" readonly>
          </div>

          <div class="col-md-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="<?php echo $email;?>" readonly>
          </div>

          <div class="col-md-3">
            <label for="phone_number" class="form-label">Phone Number</label>
            <input type="text" class="form-control" id="phone_number" name="phone_number" value="<?php echo $phonenumber;?>" readonly>
          </div>

          <div class="col-md-3">
            <label for="department" class="form-label">Department</label>
            <input type="text" class="form-control" id="department" name="department" value="<?php echo $department;?>" readonly>
          </div>

          <div class="col-md-3">
            <label for="position" class="form-label">Position</label>
            <input type="text" class="form-control" id="position" name="position" value="<?php echo $position;?>" readonly>
          </div>

          <div class="col-md-3">
            <label for="employee_id" class="form-label">Employee ID</label>
            <input type="text" class="form-control" id="employee_id" name="employee_id" value="<?php echo $employeeid;?>" readonly>
          </div>

          <div class="col-12">
            <button type="submit" class="btn btn-primary">Update Profile</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
</body>
</html>

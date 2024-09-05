<?php
require_once('process/dbh.php');

$id = isset($_GET['id']) ? $_GET['id'] : '';
$sql = "SELECT * FROM employee WHERE id='$id'";
$result = mysqli_query($conn, $sql);
$prefix = "";
$first_name = "";
$nickname = "";
$last_name = "";
$middle_name = "";
$gender = "";
$religion = "";
$civil_status = "";
$citizenship = "";
$birthday = "";
$email = "";
$phone_number = "";
$department = "";
$position = "";
$employee_id = "";

if ($result) {
  while ($res = mysqli_fetch_assoc($result)) {
    $prefix = $res['prefix'];
    $first_name = $res['first_name'];
    $last_name = $res['last_name'];
    $middle_name = $res['middle_name'];
    $nickname = $res['nickname'];
    $gender = $res['gender'];
    $religion = $res['religion'];
    $civil_status = $res['civil_status'];
    $citizenship = $res['citizenship'];
    $birthday = $res['birthday'];
    $email = $res['email'];
    $phone_number = $res['phone_number'];
    $department = $res['department'];
    $position = $res['position'];
    $employee_id = $res['employee_id'];
  }
}

if (isset($_POST['update'])) {
  $prefix = $_POST['prefix'];
  $first_name = $_POST['first_name'];
  $last_name = $_POST['last_name'];
  $middle_name = $_POST['middle_name'];
  $nickname = $_POST['nickname'];
  $gender = $_POST['gender'];
  $religion = $_POST['religion'];
  $civil_status = $_POST['civil_status'];
  $citizenship = $_POST['citizenship'];
  $birthday = $_POST['birthday'];
  $email = $_POST['email'];
  $phone_number = $_POST['phone_number'];
  $department = $_POST['department'];
  $position = $_POST['position'];
  $employee_id = $_POST['employee_id'];

  $update_query = "UPDATE employee SET prefix='$prefix', first_name='$first_name', last_name='$last_name', middle_name='$middle_name', nickname='$nickname', gender='$gender', religion='$religion', civil_status='$civil_status', citizenship='$citizenship', birthday='$birthday', email='$email', phone_number='$phone_number', department='$department', position='$position', employee_id='$employee_id' WHERE id='$id'";

  if (mysqli_query($conn, $update_query)) {
    echo "<script>alert('Successfully Updated');</script>";
    echo "<script>window.location.href='myprofile.php';</script>";
    exit;
  } else {
    echo "Error updating record: " . mysqli_error($conn);
  }
}
?>

<!-- Rest of your HTML code -->

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Employee Profile Form</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="styles.css" />
  <style>
    h2 { text-align: center; }
    div { border-radius: 5px; padding: 20px; }
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
        <form class="row g-3" method="POST" action="myprofileup.php?id=<?php echo $id; ?>">
          <div class="col-md-3">
            <label for="prefix" class="form-label">Prefix</label>
            <select class="form-select" name="prefix" required>
            <option value="mr.">Mr.</option>
            <option value="ms.">Ms</option>              
            <option value="jr.">Jr.</option>              
            <option value="sr.">Sr.</option>              
            <option value="ii">II</option>              
            <option value="iii">iii</option>              
            <option value="iv">IV</option>            
            <option value="mrs.">Mrs.</option>              
            <option value="dr.">Dr.</option>              
            <option value="rev.">Rev.</option>              
            <option value="none">None</option>            
        </select>
        </div>

        <div class="col-md-3">
  <label for="first_name" class="form-label">First Name</label>
  <input type="text" class="form-control" id="first_name" name="first_name" value="<?php echo $first_name; ?>" readonly>
</div>

          <div class="col-md-3">
            <label for="last_name" class="form-label">Last Name</label>
            <input type="text" class="form-control" id="last_name" name="last_name" value="<?php echo $last_name;?>" >
          </div>

          <div class="col-md-3">
            <label for="middle_name" class="form-label">Middle Name</label>
            <input type="text" class="form-control" id="middle_name" name="middle_name" value="<?php echo $middle_name;?>" required>
          </div>

          <div class="col-md-3">
            <label for="nickname" class="form-label">Nickname</label>
            <input type="text" class="form-control" id="nickname" name="nickname" value="<?php echo $nickname;?>" required>
          </div>

          <div class="col-md-3">
            <label for="gender" class="form-label">Gender</label>
            <select class="form-select" name="gender" required>
              <option value="Male" <?php if($gender == "Male") echo "selected"; ?>>Male</option>
              <option value="Female" <?php if($gender == "Female") echo "selected"; ?>>Female</option>
            </select>
          </div>

          <div class="col-md-3">
            <label for="religion" class="form-label">Religion</label>
            <input type="text" class="form-control" id="religion" name="religion" value="<?php echo $religion;?>" required>
          </div>

          <div class="col-md-3">
            <label for="civil_status" class="form-label">Civil Status</label>
            <select class="form-select" name="civil_status" required>
            <option value="single">Single</option>   
            <option value="married">Married</option>   
            <option value="widowed">Widowed</option>
            <option value="separated">Separated</option>
            <option value="divorced">Divorced</option>               
        </select>
          </div>

          <div class="col-md-3">
            <label for="citizenship" class="form-label">Citizenship</label>
            <input type="text" class="form-control" id="citizenship" name="citizenship" value="<?php echo $citizenship;?>" required>
          </div>

          <div class="col-md-3">
            <label for="birthday" class="form-label">Birthday</label>
            <input type="date" class="form-control" id="birthday" name="birthday" value="<?php echo $birthday;?>" required>
          </div>

          <div class="col-md-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="<?php echo $email;?>" required>
          </div>

          <div class="col-md-3">
            <label for="phone_number" class="form-label">Phone Number</label>
            <input type="text" class="form-control" id="phone_number" name="phone_number" value="<?php echo $phone_number;?>" required>
          </div>

          <div class="col-md-3">
            <label for="department" class="form-label">Department</label>
            <input type="text" class="form-control" id="department" name="department" value="<?php echo $department;?>" >
          </div>

          <div class="col-md-3">
            <label for="position" class="form-label">Position</label>
            <input type="text" class="form-control" id="position" name="position" value="<?php echo $position;?>" >
          </div>

          <div class="col-md-3">
            <label for="employee_id" class="form-label">Employee ID</label>
            <input type="text" class="form-control" id="employee_id" name="employee_id" value="<?php echo $employee_id;?>" >
          </div>

         <div class="col-md-6">
            <label for="placeofbirth" class="form-label"><strong>Place of Birth</strong></label>
            <input type="text"  class="form-control" id="placeofbirth" name="placeofbirth" value="<?php echo $placeofbirth;?>" required>
         </div>

          <input type="hidden" name="id" value="<?php echo $id; ?>">

          <div class="col-12">
            <button type="submit" class="btn btn-primary" name="update">Save</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
</body>
</html>
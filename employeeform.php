<?php
require_once ('process/dbh.php');

if(isset($_POST['update'])) {
  $id = mysqli_real_escape_string($conn, $_POST['id']);
  $prefix = mysqli_real_escape_string($conn, $_POST['prefix']);
  $last_name = mysqli_real_escape_string($conn, $_POST['last_name']);
  $middle_name = mysqli_real_escape_string($conn, $_POST['middle_name']);
  $department = mysqli_real_escape_string($conn, $_POST['department']);
  $position = mysqli_real_escape_string($conn, $_POST['position']);
  $date_started = mysqli_real_escape_string($conn, $_POST['date_started']);
  $nickname = mysqli_real_escape_string($conn, $_POST['nickname']);
  $religion = mysqli_real_escape_string($conn, $_POST['religion']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $employee_id = mysqli_real_escape_string($conn, $_POST['employee_id']);
  $phone_number = mysqli_real_escape_string($conn, $_POST['phone_number']);
  $gender = mysqli_real_escape_string($conn, $_POST['gender']);
  $civil_status = mysqli_real_escape_string($conn, $_POST['civil_status']);
  $citizenship = mysqli_real_escape_string($conn, $_POST['citizenship']);
  $birthday = mysqli_real_escape_string($conn, $_POST['birthday']);
  $place_of_birth = mysqli_real_escape_string($conn, $_POST['place_of_birth']);
  $present_street = mysqli_real_escape_string($conn, $_POST['present_street']);
  $present_barangay = mysqli_real_escape_string($conn, $_POST['present_barangay']);
  $present_city = mysqli_real_escape_string($conn, $_POST['present_city']);
  $present_province = mysqli_real_escape_string($conn, $_POST['present_province']);
  $present_zip = mysqli_real_escape_string($conn, $_POST['present_zip']);
  $permanent_street = mysqli_real_escape_string($conn, $_POST['permanent_street']);
  $permanent_barangay = mysqli_real_escape_string($conn, $_POST['permanent_barangay']);
  $permanent_city = mysqli_real_escape_string($conn, $_POST['permanent_city']);
  $permanent_province = mysqli_real_escape_string($conn, $_POST['permanent_province']);
  $permanent_zip = mysqli_real_escape_string($conn, $_POST['permanent_zip']);
  $provincial_street = mysqli_real_escape_string($conn, $_POST['provincial_street']);
  $provincial_barangay = mysqli_real_escape_string($conn, $_POST['provincial_barangay']);
  $provincial_city = mysqli_real_escape_string($conn, $_POST['provincial_city']);
  $provincial_province = mysqli_real_escape_string($conn, $_POST['provincial_province']);
  $provincial_zip = mysqli_real_escape_string($conn, $_POST['provincial_zip']);
  $phil_no = mysqli_real_escape_string($conn, $_POST['phil_no']);
  $pagibig_no = mysqli_real_escape_string($conn, $_POST['pagibig_no']);
  $tin = mysqli_real_escape_string($conn, $_POST['tin']);
  $sss_no = mysqli_real_escape_string($conn, $_POST['sss_no']);
  $prc = mysqli_real_escape_string($conn, $_POST['prc']);
  $father_name = mysqli_real_escape_string($conn, $_POST['father_name']);
  $f_occupation = mysqli_real_escape_string($conn, $_POST['f_occupation']);
  $f_date_of_birth = mysqli_real_escape_string($conn, $_POST['f_date_of_birth']);
  $f_contact_number = mysqli_real_escape_string($conn, $_POST['f_contact_number']);
  $mother_name = mysqli_real_escape_string($conn, $_POST['mother_name']);
  $m_occupation = mysqli_real_escape_string($conn, $_POST['m_occupation']);
  $m_date_of_birth = mysqli_real_escape_string($conn, $_POST['m_date_of_birth']);
  $m_contact_number = mysqli_real_escape_string($conn, $_POST['m_contact_number']);
  $spouse_name = mysqli_real_escape_string($conn, $_POST['spouse_name']);
  $spouse_occupation = mysqli_real_escape_string($conn, $_POST['spouse_occupation']);
  $spouse_date_of_birth = mysqli_real_escape_string($conn, $_POST['spouse_date_of_birth']);
  $spouse_contact_number = mysqli_real_escape_string($conn, $_POST['spouse_contact_number']);
  $contact_name = mysqli_real_escape_string($conn, $_POST['contact_name']);
  $contact_add = mysqli_real_escape_string($conn, $_POST['contact_add']);
  $contact_number = mysqli_real_escape_string($conn, $_POST['contact_number']);
  $contact_relationship = mysqli_real_escape_string($conn, $_POST['contact_relationship']);
  $dependents_name = mysqli_real_escape_string($conn, $_POST['dependents_name']);
  $dependents_age = mysqli_real_escape_string($conn, $_POST['dependents_age']);
  $dependents_relationship = mysqli_real_escape_string($conn, $_POST['dependents_relationship']);
  $dependentsb_name = mysqli_real_escape_string($conn, $_POST['dependentsb_name']);
  $dependentsb_age = mysqli_real_escape_string($conn, $_POST['dependentsb_age']);
  $dependentsb_relationship = mysqli_real_escape_string($conn, $_POST['dependentsb_relationship']);
  $weight = mysqli_real_escape_string($conn, $_POST['weight']);
  $height = mysqli_real_escape_string($conn, $_POST['height']);
  $blood_type = mysqli_real_escape_string($conn, $_POST['blood_type']);
  $xray_date = mysqli_real_escape_string($conn, $_POST['xray_date']);
  $xray_result = mysqli_real_escape_string($conn, $_POST['xray_result']);
  $hs_school = mysqli_real_escape_string($conn, $_POST['hs_school']);
  $hs_attainment = mysqli_real_escape_string($conn, $_POST['hs_attainment']);
  $hs_started = mysqli_real_escape_string($conn, $_POST['hs_started']);
  $hs_ended = mysqli_real_escape_string($conn, $_POST['hs_ended']);
  $v_school = mysqli_real_escape_string($conn, $_POST['v_school']);
  $v_course = mysqli_real_escape_string($conn, $_POST['v_course']);
  $v_attainment = mysqli_real_escape_string($conn, $_POST['v_attainment']);
  $v_started = mysqli_real_escape_string($conn, $_POST['v_started']);
  $v_ended = mysqli_real_escape_string($conn, $_POST['v_ended']);
  $college_school = mysqli_real_escape_string($conn, $_POST['college_school']);
  $college_course = mysqli_real_escape_string($conn, $_POST['college_course']);
  $college_attainment = mysqli_real_escape_string($conn, $_POST['college_attainment']);
  $college_started = mysqli_real_escape_string($conn, $_POST['college_started']);
  $college_ended = mysqli_real_escape_string($conn, $_POST['college_ended']);
  $research_name = mysqli_real_escape_string($conn, $_POST['research_name']);
  $research_date = mysqli_real_escape_string($conn, $_POST['research_date']);
  $research_nametwo = mysqli_real_escape_string($conn, $_POST['research_nametwo']);
  $research_datetwo = mysqli_real_escape_string($conn, $_POST['research_datetwo']);
  $seminar_name = mysqli_real_escape_string($conn, $_POST['seminar_name']);
  $seminar_role = mysqli_real_escape_string($conn, $_POST['seminar_sponsor']);
  $seminar_sponsor = mysqli_real_escape_string($conn, $_POST['seminar_sponsor']);
  $seminar_date = mysqli_real_escape_string($conn, $_POST['seminar_date']);
  $seminar_nametwo = mysqli_real_escape_string($conn, $_POST['seminar_nametwo']);
  $seminar_roletwo = mysqli_real_escape_string($conn, $_POST['seminar_roletwo']);
  $seminar_sponsortwo = mysqli_real_escape_string($conn, $_POST['seminar_sponsortwo']);
  $seminar_datetwo = mysqli_real_escape_string($conn, $_POST['seminar_datetwo']);


  $sql = "UPDATE `employee` SET 
  `prefix` = '$prefix',
  `last_name` = '$last_name',
  `middle_name` = '$middle_name',
  `department` = '$department',
  `position` = '$position',
  `date_started` = '$date_started',
  `nickname` = '$nickname',
  `religion` = '$religion',
  `email` = '$email',
  `employee_id` = '$employee_id',
  `gender` = '$gender',
  `phone_number` = '$phone_number',
  `civil_status` = '$civil_status',
  `citizenship` = '$citizenship',
  `birthday` = '$birthday',
  `place_of_birth` = '$place_of_birth',
  `present_street` = '$present_street',
  `present_barangay` = '$present_barangay',
  `present_city` = '$present_city',
  `present_province` = '$present_province',
  `present_zip` = '$present_zip',
  `permanent_street` = '$permanent_street',
  `permanent_barangay` = '$permanent_barangay',
  `permanent_city` = '$permanent_city',
  `permanent_province` = '$permanent_province',
  `permanent_zip` = '$permanent_zip',
  `provincial_street` = '$provincial_street',
  `provincial_barangay` = '$provincial_barangay',
  `provincial_city` = '$provincial_city',
  `provincial_province` = '$provincial_province',
  `provincial_zip` = '$provincial_zip',
  `phil_no` = '$phil_no',
  `pagibig_no` = '$pagibig_no',
  `tin` = '$tin',
  `sss_no` = '$sss_no',
  `prc` = '$prc',
  `father_name` = '$father_name',
  `f_occupation` = '$f_occupation',
  `f_date_of_birth` = '$f_date_of_birth',
  `f_contact_number` = '$f_contact_number',
  `mother_name` = '$mother_name',
  `m_occupation` = '$m_occupation',
  `m_date_of_birth` = '$m_date_of_birth',
  `m_contact_number` = '$m_contact_number',
  `spouse_name` = '$spouse_name',
  `spouse_occupation` = '$spouse_occupation',
  `spouse_date_of_birth` = '$spouse_date_of_birth',
  `spouse_contact_number` = '$spouse_contact_number',
  `contact_name` = '$contact_name',
  `contact_add` = '$contact_add',
  `contact_number` = '$contact_number',
  `contact_relationship` = '$contact_relationship',
  `dependents_name` = '$dependents_name',
  `dependents_age` = '$dependents_age',
  `dependents_relationship` = '$dependents_relationship',
  `dependentsb_name` = '$dependentsb_name',
  `dependentsb_age` = '$dependentsb_age',
  `dependentsb_relationship` = '$dependentsb_relationship',
  `weight` = '$weight',
  `height` = '$height',
  `blood_type` = '$blood_type',
  `xray_date` = '$xray_date',
  `xray_result` = '$xray_result',
  `hs_school` = '$hs_school',
  `hs_attainment` = '$hs_attainment',
  `hs_started` = '$hs_started',
  `hs_ended` = '$hs_ended',
  `v_school` = '$v_school',
  `v_course` = '$v_course',
  `v_attainment` = '$v_attainment',
  `v_started` = '$v_started',
  `v_ended` = '$v_ended',
  `college_school` = '$college_school',
  `college_course` = '$college_course',
  `college_attainment` = '$college_attainment',
  `college_started` = '$college_started',
  `college_ended` = '$college_ended',
  `research_name` = '$research_name',
  `research_date` = '$research_date',
  `research_nametwo` = '$research_nametwo',
  `research_datetwo` = '$research_datetwo',
  `seminar_name` = '$seminar_name',
  `seminar_role` = '$seminar_role',
  `seminar_sponsor` = '$seminar_sponsor',
  `seminar_date` = '$seminar_date',
  `seminar_nametwo` = '$seminar_nametwo',
  `seminar_roletwo` = '$seminar_roletwo',
  `seminar_sponsortwo` = '$seminar_sponsortwo',
  `seminar_datetwo` = '$seminar_datetwo',
  `profile_completed` = TRUE
  WHERE `id` = '$id'";
  

  $result = mysqli_query($conn, $sql);

  if($result) {
    echo "<script>
            alert('Successfully Saved');
           window.location.href='employeehomepage.php?id=$id';
          </script>";
  } else {
    echo "Error: " . mysqli_error($conn);
  }
}

$id = (isset($_GET['id']) ? $_GET['id'] : '');
$sql = "SELECT * FROM `employee` WHERE id= '$id'";
$result = mysqli_query($conn, $sql);
if($result){
  while($res = mysqli_fetch_assoc($result)){
    $id = $res['id'];
    $prefix = $res['prefix'];
    $first_name = $res['first_name'];
    $last_name = $res['last_name'];
    $middle_name = $res['middle_name'];
    $department = $res['department'];
    $position = $res['position'];
    $date_started = $res['date_started'];
    $nickname = $res['nickname'];
    $religion = $res['religion'];
    $citizenship = $res['citizenship'];
    $email = $res['email'];
    $employee_id = $res['employee_id'];
    $gender = $res['gender'];
    $phone_number = $res['phone_number'];
    $civil_status = $res['civil_status'];
    $birthday = $res['birthday'];
    $place_of_birth = $res['place_of_birth'];
    $present_street = $res['present_street'];
    $present_barangay = $res['present_barangay'];
    $present_city = $res['present_city'];
    $present_province = $res['present_province'];
    $present_zip = $res['present_zip'];
    $permanent_street = $res['permanent_street'];
    $permanent_barangay = $res['permanent_barangay'];
    $permanent_city = $res['permanent_city'];
    $permanent_province = $res['permanent_province'];
    $permanent_zip = $res['permanent_zip'];
    $provincial_street = $res['provincial_street'];
    $provincial_barangay = $res['provincial_barangay'];
    $provincial_city = $res['provincial_city'];
    $provincial_province = $res['provincial_province'];
    $provincial_zip = $res['provincial_zip'];
    $phil_no = $res['phil_no'];
    $pagibig_no = $res['pagibig_no'];
    $tin = $res['tin'];
    $sss_no = $res['sss_no'];
    $prc = $res['prc'];
    $father_name = $res['father_name'];
    $f_occupation = $res['f_occupation'];
    $f_date_of_birth = $res['f_date_of_birth'];
    $f_contact_number = $res['f_contact_number'];
    $mother_name = $res['mother_name'];
    $m_occupation = $res['m_occupation'];
    $m_date_of_birth = $res['m_date_of_birth'];
    $m_contact_number = $res['m_contact_number'];
    $spouse_name = $res['spouse_name'];
    $spouse_occupation = $res['spouse_occupation'];
    $spouse_date_of_birth = $res['spouse_date_of_birth'];
    $spouse_contact_number = $res['spouse_contact_number'];
    $contact_name = $res['contact_name'];
    $contact_add = $res['contact_add'];
    $contact_number = $res['contact_number'];
    $contact_relationship = $res['contact_relationship'];
    $dependents_name = $res['dependents_name'];
    $dependents_age = $res['dependents_age'];
    $dependents_relationship = $res['dependents_relationship'];
    $dependentsb_name = $res['dependentsb_name'];
    $dependentsb_age = $res['dependentsb_age'];
    $dependentsb_relationship = $res['dependentsb_relationship'];
    $weight = $res['weight'];
    $height = $res['height'];
    $blood_type = $res['blood_type'];
    $xray_date = $res['xray_date'];
    $xray_result = $res['xray_result'];
    $hs_school = $res['hs_school'];
    $hs_attainment = $res['hs_attainment'];
    $hs_started = $res['hs_started'];
    $hs_ended = $res['hs_ended'];
    $v_school = $res['v_school'];
    $v_course = $res['v_course'];
    $v_attainment = $res['v_attainment'];
    $v_started = $res['v_started'];
    $v_ended = $res['v_ended'];
    $college_school = $res['college_school'];
    $college_course = $res['college_course'];
    $college_attainment = $res['college_attainment'];
    $college_started = $res['college_started'];
    $college_ended = $res['college_ended'];
    $research_name = $res['research_name'];
    $research_date = $res['research_date'];
    $research_nametwo = $res['research_nametwo'];
    $research_datetwo = $res['research_datetwo'];
    $seminar_name = $res['seminar_name'];
    $seminar_role = $res['seminar_sponsor'];
    $seminar_sponsor = $res['seminar_sponsor'];
    $seminar_date = $res['seminar_date'];
    $seminar_nametwo = $res['seminar_nametwo'];
    $seminar_roletwo = $res['seminar_roletwo'];
    $seminar_sponsortwo = $res['seminar_sponsortwo'];
    $seminar_datetwo = $res['seminar_datetwo'];
  }
}
?>

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
    div { border-radius: 5px; padding: 5px; }
    .required::after { content: " *"; color: red; }
  </style>
  
</head>
<body>
  <?php include 'navbar-user.html'; ?>
  <div class="container">
  <br>
<h2>MY PROFILE</h2>

      <div class="accordion accordion-flush" id="accordionFlushExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingOne">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
        <strong>PERSONAL INFORMATION</strong> 
      </button>
    </h2>
    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">

        <form class="row g-3" method="POST" action="employeeform.php?id=<?php echo $id?>">

        <div class="col-md-3">
            <label for="employee_id" class="form-label">Employee ID</label>
            <input type="text" class="form-control" id="employee_id" name="employee_id" value="<?php echo $employee_id;?>" readonly>
          </div>

          <div class="col-md-3">
            <label for="date_started" class="form-label">Date Started</label>
            <input type="date" class="form-control" id="date_started" name="date_started" value="<?php echo $date_started;?>" readonly>
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
            <label for="first_name" class="form-label">First Name</label>
            <input type="text" class="form-control" id="first_name" name="first_name" value="<?php echo $first_name;?>" readonly>
          </div>

          <div class="col-md-3">
            <label for="last_name" class="form-label">Last Name</label>
            <input type="text" class="form-control" id="last_name" name="last_name" value="<?php echo $last_name;?>" readonly>
          </div>

          <div class="col-md-3">
            <label for="middle_name" class="form-label">Middle Name</label>
            <input type="text" class="form-control" id="middle_name" name="middle_name" value="<?php echo $middle_name;?>" readonly>
          </div>

          <div class="col-md-3">
            <label for="prefix" class="form-label required">Prefix</label>
            <select class="form-select" name="prefix" required>
            <option value="" disabled selected>Prefix</option>  
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
            </select>
          </div>

          <div class="col-md-3">
            <label for="nickname" class="form-label required">Nickname</label>
            <input type="text" class="form-control" id="nickname" name="nickname" value="<?php echo $nickname;?>" required>
          </div>

          <div class="col-md-3">
            <label for="gender" class="form-label required">Gender</label>
            <select class="form-select" name="gender" required>
            <option value="" disabled selected>Gender</option>  
              <option value="Male" <?php if($gender == "Male") echo "selected"; ?>>Male</option>
              <option value="Female" <?php if($gender == "Female") echo "selected"; ?>>Female</option>
            </select>
          </div>

          <div class="col-md-3">
            <label for="religion" class="form-label required">Religion</label>
            <input type="text" class="form-control" id="religion" name="religion" value="<?php echo $religion;?>" required>
          </div>

          <div class="col-md-3">
            <label for="civil_status" class="form-label required">Civil Status</label>
            <select class="form-select" name="civil_status" required>
            <option value="" disabled selected>Civil Status</option>  
              <option value="Single" <?php if($civil_status == "Single") echo "selected"; ?>>Single</option>
              <option value="Married" <?php if($civil_status == "Married") echo "selected"; ?>>Married</option>
              <option value="Widowed" <?php if($civil_status == "Widowed") echo "selected"; ?>>Widowed</option>
              <option value="Separated" <?php if($civil_status == "Separated") echo "selected"; ?>>Separated</option>
              <option value="Divorced" <?php if($civil_status == "Divorced") echo "selected"; ?>>Divorced</option>
            </select>
          </div>

          <div class="col-md-3">
            <label for="citizenship" class="form-label required">Citizenship</label>
            <input type="text" class="form-control" id="citizenship" name="citizenship" value="<?php echo $citizenship;?>" required>
          </div>

          <div class="col-md-3">
            <label for="birthday" class="form-label required">Birthday</label>
            <input type="date" class="form-control" id="birthday" name="birthday" value="<?php echo $birthday;?>" required>
          </div>

          <div class="col-md-3">
            <label for="email" class="form-label required">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="<?php echo $email;?>" required>
          </div>

          <div class="col-md-3">
            <label for="phone_number" class="form-label required">Phone Number</label>
            <input type="text" class="form-control" id="phone_number" name="phone_number" placeholder="+63" maxLength="10" value="<?php echo $phone_number;?>" required>
            <small class="text-muted">The phone number should start with the digit 9 and be exactly 10 digits long.</small>
          </div>

          <h7><strong>Present Address</strong></h7>
               <div class="col-md-3">
                  <label for="present_street" class="form-label required">Street Number</label>
                  <input type="text"  class="form-control" id="present_street" name="present_street" value="<?php echo $present_street;?>"required>
               </div>
               <div class="col-md-3">
                  <label for="present_barangay" class="form-label required">Barangay</label>
                  <input type="text"  class="form-control" id="present_barangay" name="present_barangay" value="<?php echo $present_barangay;?>"required>
               </div>
               <div class="col-md-3">
                  <label for="present_city" class="form-label required">City</label>
                  <input type="text"  class="form-control" id="present_city" name="present_city" value="<?php echo $present_city;?>"required>
               </div>
               <div class="col-md-3">
                  <label for="present_province" class="form-label required">Province</label>
                  <input type="text"  class="form-control" id="present_province" name="present_province" value="<?php echo $present_province;?>"required>
               </div>
               <div class="col-md-3">
                  <label for="present_zip" class="form-label required">ZIP</label>
                  <input type="text"  class="form-control" id="present_zip" name="present_zip" value="<?php echo $present_zip;?>"required>
               </div>
               <h7><strong>Permanent Address</strong></h7>
               <div class="col-md-3">
                  <label for="permanent_street" class="form-label required">Street Number</label>
                  <input type="text"  class="form-control" id="permanent_street" name="permanent_street" value="<?php echo $permanent_street;?>"required>
               </div>
               <div class="col-md-3">
                  <label for="permanent_barangay" class="form-label required">Barangay</label>
                  <input type="text"  class="form-control" id="permanent_barangay" name="permanent_barangay" value="<?php echo $permanent_barangay;?>"required>
               </div>
               <div class="col-md-3">
                  <label for="permanent_city" class="form-label required">City</label>
                  <input type="text"  class="form-control" id="permanent_city" name="permanent_city" value="<?php echo $permanent_city;?>"required>
               </div>
               <div class="col-md-3">
                  <label for="permanent_province" class="form-label required">Province</label>
                  <input type="text"  class="form-control" id="permanent_province" name="permanent_province" value="<?php echo $permanent_province;?>"required>
               </div>
               <div class="col-md-3">
                  <label for="permanent_zip" class="form-label required">ZIP</label>
                  <input type="text"  class="form-control" id="permanent_zip" name="permanent_zip" value="<?php echo $permanent_zip;?>"required>
               </div>
               <h7><strong>Provincial Address</strong></h7>
               <div class="col-md-3">
                  <label for="provincial_street" class="form-label">Street Number</label>
                  <input type="text"  class="form-control" id="provincial_street" name="provincial_street" value="<?php echo $provincial_street;?>">
               </div>
               <div class="col-md-3">
                  <label for="provincial_barangay" class="form-label">Barangay</label>
                  <input type="text"  class="form-control" id="provincial_barangay" name="provincial_barangay" value="<?php echo $provincial_barangay;?>">
               </div>
               <div class="col-md-3">
                  <label for="provincial_city" class="form-label">City</label>
                  <input type="text"  class="form-control" id="provincial_city" name="provincial_city" value="<?php echo $provincial_city;?>">
               </div>
               <div class="col-md-3">
                  <label for="provincial_province" class="form-label">Province</label>
                  <input type="text"  class="form-control" id="provincial_province" name="provincial_province" value="<?php echo $provincial_province;?>">
               </div>
               <div class="col-md-3">
                  <label for="provincial_zip" class="form-label">ZIP</label>
                  <input type="text"  class="form-control" id="provincial_zip" name="provincial_zip" value="<?php echo $provincial_zip;?>">
               </div>


        <strong>Place of Birth</strong>
         <div class="col-md-3">
            <label for="place_of_birth" class="form-label required">Place of Birth</label>
            <input type="text"  class="form-control" id="place_of_birth" name="place_of_birth" value="<?php echo $place_of_birth;?>" required>
         </div>

         <h7><strong>Government Identification Number</strong></h7>
          <div class="col-md-3">
          <label for="phil_no" class="form-label required">Phil Health No.</label>
            <input type="text" class="form-control" id="phil_no" name="phil_no" placeholder="####-#####-###" maxLength="12" value="<?php echo $phil_no;?>" required>
          </div>

          <div class="col-md-3">
          <label for="pagibig_no" class="form-label required">Pag-Ibig No.</label>
            <input type="text" class="form-control" id="pagibig_no" name="pagibig_no" placeholder="####-####-####" maxLength="12" value="<?php echo $pagibig_no;?>" required>
          </div>

          <div class="col-md-3">
          <label for="tin" class="form-label required">TIN</label>
            <input type="text" class="form-control" id="tin" name="tin" placeholder="###-###-###" value="<?php echo $tin;?>" required>
          </div>

          <div class="col-md-3">
          <label for="sss_no" class="form-label required">SSS No.</label>
            <input type="text" class="form-control" id="sss_no" name="sss_no" placeholder="##-#######-#" maxLength="10" value="<?php echo $sss_no;?>" required>
          </div>

          <div class="col-md-3">
          <label for="prc" class="form-label">PRC ID</label>
            <input type="text" class="form-control" id="prc" name="prc" placeholder="#######" value="<?php echo $prc;?>" >
            </div>
            </div>
            </div>
            </div>


            <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
        <strong>FAMILY BACKGROUND</strong>
      </button>
    </h2>
    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">
      <div class="row g-3">
                  
                  <p><strong>A. Father's Information</strong></p>
                  <div class="col-md-3">
                    <label for="father_name" class="form-label">Name</label>
                    <input type="text" class="form-control" name="father_name" value="<?php echo $father_name; ?>" >
                  </div>
                  <div class="col-md-3">
                    <label for="f_occupation" class="form-label">Occupation</label>
                    <input type="text" class="form-control" name="f_occupation" value="<?php echo $f_occupation; ?>" >
                  </div>
                  <div class="col-md-3">
                    <label for="f_date_of_birth" class="form-label">Date of Birth</label>
                    <input type="date" class="form-control" name="f_date_of_birth" value="<?php echo $f_date_of_birth; ?>">
                  </div>
                  <div class="col-md-3">
                    <label for="f_contact_number" class="form-label">Contact Number</label>
                    <input type="text" class="form-control" name="f_contact_number" placeholder="+63" maxLength="10" value="<?php echo $f_contact_number; ?>" >
                    <small class="text-muted">The phone number should start with the digit 9 and be exactly 10 digits long.</small>
                  </div>

                  <p><strong>B. Mother's Information</strong></p>
                  <div class="col-md-3">
                    <label for="mother_name" class="form-label">Name</label>
                    <input type="text" class="form-control" name="mother_name" value="<?php echo $mother_name; ?>" >
                  </div>
                  <div class="col-md-3">
                    <label for="m_occupation" class="form-label">Occupation</label>
                    <input type="text" class="form-control" name="m_occupation" value="<?php echo $m_occupation; ?>" >
                  </div>
                  <div class="col-md-3">
                    <label for="m_date_of_birth" class="form-label">Date of Birth</label>
                    <input type="date" class="form-control" name="m_date_of_birth" value="<?php echo $m_date_of_birth; ?>" >
                  </div>
                  <div class="col-md-3">
                    <label for="m_contact_number" class="form-label">Contact Number</label>
                    <input type="text" class="form-control" name="m_contact_number" placeholder="+63" maxLength="10" value="<?php echo $m_contact_number; ?>" >
                    <small class="text-muted">The phone number should start with the digit 9 and be exactly 10 digits long.</small>
                  </div>

                  <p><strong>C. Spouse Information</strong></p>
                  <div class="col-md-3">
                    <label for="spouse_name" class="form-label">Name</label>
                    <input type="text" class="form-control" name="spouse_name" value="<?php echo $spouse_name; ?>" >
                  </div>
                  <div class="col-md-3">
                    <label for="spouse_occupation" class="form-label">Occupation</label>
                    <input type="text" class="form-control" name="spouse_occupation" value="<?php echo $spouse_occupation; ?>" >
                  </div>
                  <div class="col-md-3">
                    <label for="spouse_date_of_birth" class="form-label">Date of Birth</label>
                    <input type="date" class="form-control" name="spouse_date_of_birth" value="<?php echo $spouse_date_of_birth; ?>" >
                  </div>
                  <div class="col-md-3">
                    <label for="spouse_contact_number" class="form-label">Contact Number</label>
                    <input type="text" class="form-control" name="spouse_contact_number" placeholder="+63" maxLength="10" value="<?php echo $spouse_contact_number; ?>" >
                    <small class="text-muted">The phone number should start with the digit 9 and be exactly 10 digits long.</small>
                  </div>

            <strong>D. In Case of Emergency</strong>
            <p>Person To Contact</p>
            <br>
            <div class="col-md-3">
               <label for="contact_name" class="form-label required">Name</label>
               <input type="text"  class="form-control" id="contact_name" name="contact_name" value="<?php echo $contact_name; ?>"required>
            </div>
            <div class="col-md-3">
               <label for="contact_add" class="form-label required">Address</label>
               <input type="text"  class="form-control" id="contact_add" name="contact_add" value="<?php echo $contact_add; ?>"required>
            </div>
            <div class="col-md-3">
               <label for="contact_number" class="form-label required">Contact Number</label>
               <input type="text" class="form-control" name="contact_number" placeholder="+63" maxLength="10" value="<?php echo $contact_number; ?>" required>
                    <small class="text-muted">The phone number should start with the digit 9 and be exactly 10 digits long.</small>
                  </div>
            <div class="col-md-3">
               <label for="contact_relationship" class="form-label required">Relationship</label>
               <select class="form-select" name="contact_relationship" required>
               <option value="" disabled selected>Relationship</option>  
                  <option value="Spouse" <?php if($contact_relationship == "Spouse") echo "selected"; ?>>Spouse</option>
                  <option value="Parent" <?php if($contact_relationship == "Parent") echo "selected"; ?>>Parent</option>
                  <option value="Sibling" <?php if($contact_relationship == "Sibling") echo "selected"; ?>>Sibling</option>
                  <option value="Partner" <?php if($contact_relationship == "Cousin") echo "selected"; ?>>Cousin</option>
                  <option value="Partner" <?php if($contact_relationship == "Partner") echo "selected"; ?>>Partner</option>
                  <option value="Friend" <?php if($contact_relationship == "Friend") echo "selected"; ?>>Friend</option>
                  <option value="Colleague" <?php if($contact_relationship == "Colleague") echo "selected"; ?>>Colleague</option>
                  <option value="Other" <?php if($contact_relationship == "Other") echo "selected"; ?>>Other</option>
               </select>
</div>
            </div>
            </div>
            </div>
</div>
            <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
        <strong>DEPENDENTS</strong>
      </button>
    </h2>
    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">

<div class="row g-3">
    <div class="col-md-3">
        <strong>1.</strong>
        <label for="dependents_name" class="form-label">Name</label>
        <input type="text" class="form-control" id="dependents_name" name="dependents_name" value="<?php echo $dependents_name;?>">
    </div>

    <div class="col-md-3">
        <label for="dependents_age" class="form-label">Age</label>
        <input type="text" class="form-control" id="dependents_age" name="dependents_age" value="<?php echo $dependents_age;?>">
    </div>

    <div class="col-md-3">
        <label for="dependents_relationship" class="form-label">Relationship</label>
        <select class="form-select" id="dependents_relationship" name="dependents_relationship" value="<?php echo $dependents_relationship; ?>">
        <option value="" disabled selected>Relationship</option>  
            <option value="Spouse" <?php if($dependents_relationship == "Spouse") echo "selected"; ?>>Spouse</option>
            <option value="Son" <?php if($dependents_relationship == "Son") echo "selected"; ?>>Son</option>
            <option value="Daughter" <?php if($dependents_relationship == "Daughter") echo "selected"; ?>>Daughter</option>
            <option value="Father" <?php if($dependents_relationship == "Father") echo "selected"; ?>>Father</option>
            <option value="Mother" <?php if($dependents_relationship == "Mother") echo "selected"; ?>>Mother</option>
            <option value="Sister" <?php if($dependents_relationship == "Sister") echo "selected"; ?>>Sister</option>
            <option value="Brother" <?php if($dependents_relationship == "Brother") echo "selected"; ?>>Brother</option>
            <option value="Aunt" <?php if($dependents_relationship == "Aunt") echo "selected"; ?>>Aunt</option>
            <option value="Uncle" <?php if($dependents_relationship == "Uncle") echo "selected"; ?>>Uncle</option>
            <option value="Cousin" <?php if($dependents_relationship == "Cousin") echo "selected"; ?>>Cousin</option>
            <option value="Grandfather" <?php if($dependents_relationship == "Grandfather") echo "selected"; ?>>Grandfather</option>
            <option value="Grandmother" <?php if($dependents_relationship == "Grandmother") echo "selected"; ?>>Grandmother</option>
            <option value="Godfather" <?php if($dependents_relationship == "Godfather") echo "selected"; ?>>Godfather</option>
            <option value="Godmother" <?php if($dependents_relationship == "Godmother") echo "selected"; ?>>Godmother</option>
        </select>
    </div>
</div>

<div class="row g-3">
    <div class="col-md-3">
        <strong>2.</strong>
        <label for="dependentsb_name" class="form-label">Name</label>
        <input type="text" class="form-control" id="dependentsb_name" name="dependentsb_name" value="<?php echo $dependentsb_name;?>" >
    </div>

    <div class="col-md-3">
        <label for="dependentsb_age" class="form-label">Age</label>
        <input type="text" class="form-control" id="dependentsb_age" name="dependentsb_age" value="<?php echo $dependentsb_age;?>" >
    </div>

    <div class="col-md-3">
        <label for="dependentsb_relationship" class="form-label">Relationship</label>
        <select class="form-select" id="dependentsb_relationship" name="dependentsb_relationship" value="<?php echo $dependentsb_relationship; ?>" >
        <option value="" disabled selected>Relationship</option>  
            <option value="Spouse" <?php if($dependentsb_relationship == "Spouse") echo "selected"; ?>>Spouse</option>
            <option value="Son" <?php if($dependentsb_relationship == "Son") echo "selected"; ?>>Son</option>
            <option value="Daughter" <?php if($dependentsb_relationship == "Daughter") echo "selected"; ?>>Daughter</option>
            <option value="Father" <?php if($dependentsb_relationship == "Father") echo "selected"; ?>>Father</option>
            <option value="Mother" <?php if($dependentsb_relationship == "Mother") echo "selected"; ?>>Mother</option>
            <option value="Sister" <?php if($dependentsb_relationship == "Sister") echo "selected"; ?>>Sister</option>
            <option value="Brother" <?php if($dependentsb_relationship == "Brother") echo "selected"; ?>>Brother</option>
            <option value="Aunt" <?php if($dependentsb_relationship == "Aunt") echo "selected"; ?>>Aunt</option>
            <option value="Uncle" <?php if($dependentsb_relationship == "Uncle") echo "selected"; ?>>Uncle</option>
            <option value="Cousin" <?php if($dependentsb_relationship == "Cousin") echo "selected"; ?>>Cousin</option>
            <option value="Grandfather" <?php if($dependentsb_relationship == "Grandfather") echo "selected"; ?>>Grandfather</option>
            <option value="Grandmother" <?php if($dependentsb_relationship == "Grandmother") echo "selected"; ?>>Grandmother</option>
            <option value="Godfather" <?php if($dependentsb_relationship == "Godfather") echo "selected"; ?>>Godfather</option>
            <option value="Godmother" <?php if($dependentsb_relationship == "Godmother") echo "selected"; ?>>Godmother</option>
        </select>
    </div>
</div>
</div>
</div>
</div>

<div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingFour">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
        <strong>HEALTH DETAILS</strong>
      </button>
    </h2>
    <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">
        <div class="row g-3">

            <div class="col-md-2">
          <label for="weight" class="form-label required">Weight</label>
            <input type="text" class="form-control" id="weight" name="weight" placeholder="kg" value="<?php echo $weight;?>" required>
          </div>

          <div class="col-md-2">
          <label for="height" class="form-label required">Height</label>
            <input type="text" class="form-control" id="height" name="height" placeholder="cm" value="<?php echo $height;?>" required>
          </div>
                <div class="col-md-3">
                    <label for="blood_type" class="form-label required">What is your blood type?</label>
                    <select class="form-select" id="blood_type" name="blood_type" value="<?php echo $blood_type; ?>" required>
                        <option value="" disabled selected>Blood Type</option>  
                        <option value="A">A</option>
                        <option value="A+">A+</option>
                        <option value="A-">A-</option>
                        <option value="B">B</option>
                        <option value="B+">B+</option>
                        <option value="B-">B-</option>
                        <option value="AB">AB</option>
                        <option value="AB+">AB+</option>
                        <option value="AB-">AB-</option>
                        <option value="O">O</option>
                        <option value="O+">O+</option>
                        <option value="O-">O-</option>
                    </select>
                </div>

                <div class="col-md-4">
                    <label for="xray_date" class="form-label required">When was your last chest x-ray?</label>
                    <input type="date" class="form-control" id="xray_date" name="xray_date" value="<?php echo $xray_date;?>" required>
                </div>

                <div class="col-md-12 ">
                    <label for="xray_result" class="form-label required">What was the result?</label>
                    <input type="text" class="form-control" id="xray_result" name="xray_result" value="<?php echo $xray_result;?>" required>
                </div>
</div>
</div>
</div>
</div>

<div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingFive">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
        <strong>EDUCATIONAL BACKGROUND</strong>
      </button>
    </h2>
    <div id="flush-collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">
        <div class="row g-3">
                
                <strong>High School</strong>
                  <div class="col-md-6">
                    <label for="hs_school" class="form-label">Name of School</label>
                    <input type="text" class="form-control" id="hs_school" name="hs_school"  value="<?php echo $hs_school;?>">
                </div>
                <div class="col-md-6">
                    <label for="hs_attainment" class="form-label">Highest Attainment</label>
                    <input type="text" class="form-control" id="hs_attainment" name="hs_attainment"  value="<?php echo $hs_attainment;?>">
                </div>

                <div class="col-md-3">
                <label for="hs_started" class="form-label">Year Started</label>
                    <input type="number" class="form-control" id="hs_started" name="hs_started"  value="<?php echo $hs_started;?>">
                </div>
                <div class="col-md-3">
                    <label for="hs_ended" class="form-label">Year Ended</label>
                        <input type="number" class="form-control" id="hs_ended" name="hs_ended"  value="<?php echo $hs_ended;?>">
                    </div>

                    <strong>Vocational School</strong>
                    <div class="col-md-6">
                    <label for="v_school" class="form-label">Name of School</label>
                    <input type="text" class="form-control" id="v_school" name="v_school" value="<?php echo $v_school;?>">
                </div>
                    <div class="col-md-6">
                    <label for="v_course" class="form-label">Course</label>
                    <input type="text" class="form-control" id="v_course" name="v_course" value="<?php echo $v_course;?>">
                </div>
                <div class="col-md-6">
                    <label for="v_attainment" class="form-label">Highest Attainment</label>
                    <input type="text" class="form-control" id="v_attainment" name="v_attainment" value="<?php echo $v_attainment;?>">
                </div>
                <div class="col-md-3">
                    <label for="v_started" class="form-label">Year Started</label>
                        <input type="number" class="form-control" id="v_started" name="v_started" value="<?php echo $v_started;?>">
                    </div>
                    <div class="col-md-3">
                        <label for="v_ended" class="form-label">Year Ended</label>
                            <input type="number" class="form-control" id="v_ended" name="v_ended" value="<?php echo $v_ended;?>">
                    </div>
                    <strong>College</strong>
                  <div class="col-md-6">
                    <label for="college_school" class="form-label">Name of School</label>
                    <input type="text" class="form-control" id="college_school" name="college_school" value="<?php echo $college_school;?>">
                </div>
                <div class="col-md-6">
                    <label for="college_course" class="form-label">Course</label>
                    <input type="text" class="form-control" id="college_course" name="college_course" value="<?php echo $college_course;?>">
                </div>
                <div class="col-md-6">
                    <label for="college_attainment" class="form-label">Highest Attainment</label>
                    <input type="text" class="form-control" id="college_attainment" name="college_attainment" value="<?php echo $college_attainment;?>">
                </div>

                <div class="col-md-3">
                <label for="college_started" class="form-label">Year Started</label>
                    <input type="number" class="form-control" id="college_started" name="college_started" value="<?php echo $college_started;?>">
                </div>
                <div class="col-md-3">
                    <label for="college_ended" class="form-label">Year Ended</label>
                        <input type="number" class="form-control" id="college_ended" name="college_ended" value="<?php echo $college_ended;?>">
                    </div>
</div>
</div>
</div>
</div>

<div class="accordion-item">
   <h2 class="accordion-header">
     <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
      <strong>RESEARCH & PUBLICATION</strong> 
     </button>
   </h2>
   <div id="collapseSeven" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
     <div class="accordion-body">

<div class="row g-3">
    <div class="col-md-6">
        <strong>1.</strong>
        <label for="research_name" class="form-label">Research Title</label>
        <input type="text" class="form-control" id="research_name" name="research_name" value="<?php echo $research_name;?>">
    </div>

    <div class="col-md-6">
        <label for="research_date" class="form-label">Date Published</label>
        <input type="date" class="form-control" id="research_date" name="research_date" value="<?php echo $research_date;?>">
    </div>
</div>

<div class="row g-3">
    <div class="col-md-6">
        <strong>2.</strong>
        <label for="research_nametwo" class="form-label">Research Title</label>
        <input type="text" class="form-control" id="research_nametwo" name="research_nametwo" value="<?php echo $research_nametwo;?>">
    </div>

    <div class="col-md-6">
        <label for="research_datetwo" class="form-label">Date Published</label>
        <input type="date" class="form-control" id="research_datetwo" name="research_datetwo" value="<?php echo $research_datetwo;?>">
    </div>
</div>
</div>
</div>
</div>

<div class="accordion-item">
   <h2 class="accordion-header" id="flush-headingSix">
     <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
      <strong>SEMINARS/TRAININGS</strong> 
     </button>
   </h2>
   <div id="flush-collapseSix" class="accordion-collapse collapse" aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample">
     <div class="accordion-body">

<div class="row g-3">
    <div class="col-md-6">
        <strong>1.</strong>
        <label for="seminar_name" class="form-label">Title of Seminar/Training</label>
        <input type="text" class="form-control" id="seminar_name" name="seminar_name" value="<?php echo $seminar_name;?>">
    </div>

    <div class="col-md-6">
        <label for="seminar_role" class="form-label">Role</label>
        <input type="text" class="form-control" id="seminar_role" name="seminar_role" value="<?php echo $seminar_role;?>">
    </div>

    <div class="col-md-6">
        <label for="seminar_sponsor" class="form-label">Sponsor</label>
        <input type="text" class="form-control" id="seminar_sponsor" name="seminar_sponsor" value="<?php echo $seminar_sponsor;?>">
    </div>

    <div class="col-md-6">
        <label for="seminar_date" class="form-label">Date</label>
        <input type="date" class="form-control" id="seminar_date" name="seminar_date" value="<?php echo $seminar_date;?>">
    </div>
</div>

<div class="row g-3">
    <div class="col-md-6">
        <strong>2.</strong>
        <label for="seminar_nametwo" class="form-label">Title of Seminar/Training</label>
        <input type="text" class="form-control" id="seminar_nametwo" name="seminar_nametwo" value="<?php echo $seminar_nametwo;?>">
    </div>

    <div class="col-md-6">
        <label for="seminar_roletwo" class="form-label">Role</label>
        <input type="text" class="form-control" id="seminar_roletwo" name="seminar_roletwo" value="<?php echo $seminar_roletwo;?>">
    </div>

    <div class="col-md-6">
        <label for="seminar_sponsortwo" class="form-label">Sponsor</label>
        <input type="text" class="form-control" id="seminar_sponsortwo" name="seminar_sponsortwo" value="<?php echo $seminar_sponsortwo;?>">
    </div>

    <div class="col-md-6">
        <label for="seminar_datetwo" class="form-label">Date</label>
        <input type="date" class="form-control" id="seminar_datetwo" name="seminar_datetwo" value="<?php echo $seminar_datetwo;?>">
    </div>
</div>
</div>
</div>
</div>

        

          <input type="hidden" name="id" value="<?php echo $id; ?>">

          <div class="col-12 text-right">
  <button type="submit" class="btn btn-primary" name="update">Save Profile</button>
  <a class="btn btn-danger" href="employeehomepage.php?id=<?php echo $id?>">Cancel</a>
</div>
        </form>
        
      </div>
    </div>
  </div>
</div>
</body>
</html>

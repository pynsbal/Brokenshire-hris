<?php
session_start();

require_once('process/dbh.php');

// Fetch the employee ID from the URL
$employee_id = (isset($_GET['id']) ? $_GET['id'] : '');

// Fetch employee data based on the employee ID
if ($employee_id) {
    $sql = "SELECT * FROM employee WHERE employee_id = '$employee_id'";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $employee = mysqli_fetch_assoc($result);
        $id = $employee['id'];
        $employee_id = $employee['employee_id'];
        $date_started = $employee['date_started'];
        $position = $employee['position'];
        $department = $employee['department'];
        $prefix = $employee['prefix'];
        $first_name = $employee['first_name'];
        $middle_name = $employee['middle_name'];
        $last_name = $employee['last_name'];
        $nickname = $employee['nickname'];
        $gender = $employee['gender'];
        $religion = $employee['religion'];
        $civil_status = $employee['civil_status'];
        $citizenship = $employee['citizenship'];
        $birthday = $employee['birthday'];
        $place_of_birth = $employee['place_of_birth'];
        $email = $employee['email'];
        $phone_number = $employee['phone_number'];
        $present_street = $employee['present_street'];
        $present_barangay = $employee['present_barangay'];
        $present_city = $employee['present_city'];
        $present_province = $employee['present_province'];
        $present_zip = $employee['present_zip'];
        $permanent_street = $employee['permanent_street'];
        $permanent_barangay = $employee['permanent_barangay'];
        $permanent_city = $employee['permanent_city'];
        $permanent_province = $employee['permanent_province'];
        $permanent_zip = $employee['permanent_zip'];
        $provincial_street = $employee['provincial_street'];
        $provincial_barangay = $employee['provincial_barangay'];
        $provincial_city = $employee['provincial_city'];
        $provincial_province = $employee['provincial_province'];
        $provincial_zip = $employee['provincial_zip'];
        $phil_no = $employee['phil_no'];
        $pagibig_no = $employee['pagibig_no'];
        $tin = $employee['tin'];
        $sss_no = $employee['sss_no'];
        $prc = $employee['prc'];
        $father_name = $employee['father_name'];
        $f_occupation = $employee['f_occupation'];
        $f_date_of_birth = $employee['f_date_of_birth'];
        $f_contact_number = $employee['f_contact_number'];
        $mother_name = $employee['mother_name'];
        $m_date_of_birth = $employee['m_date_of_birth'];
        $m_occupation = $employee['m_occupation'];
        $m_contact_number = $employee['m_contact_number'];
        $spouse_name = $employee['spouse_name'];
        $spouse_occupation = $employee['spouse_occupation'];
        $spouse_date_of_birth = $employee['spouse_date_of_birth'];
        $spouse_contact_number = $employee['spouse_contact_number'];
        $contact_name = $employee['contact_name'];
        $contact_add = $employee['contact_add'];
        $contact_number = $employee['contact_number'];
        $dependents_name = $employee['dependents_name'];
        $dependents_age = $employee['dependents_age'];
        $dependents_relationship = $employee['dependents_relationship'];
        $dependentsb_name = $employee['dependentsb_name'];
        $dependentsb_age = $employee['dependentsb_age'];
        $dependentsb_relationship = $employee['dependentsb_relationship'];
        $weight = $employee['weight'];
        $height = $employee['height'];
        $blood_type = $employee['blood_type'];
        $xray_date = $employee['xray_date'];
        $xray_result = $employee['xray_result'];
        $hs_school = $employee['hs_school'];
        $hs_attainment = $employee['hs_attainment'];
        $hs_started = $employee['hs_started'];
        $hs_ended = $employee['hs_ended'];
        $v_school = $employee['v_school'];
        $v_course = $employee['v_course'];
        $v_attainment = $employee['v_attainment'];
        $v_started = $employee['v_started'];
        $v_ended = $employee['v_ended'];
        $college_school = $employee['college_school'];
        $college_course = $employee['college_course'];
        $college_attainment = $employee['college_attainment'];
        $college_started = $employee['college_started'];
        $college_ended = $employee['college_ended'];
        $research_name = $employee['research_name'];
        $research_date = $employee['research_date'];
        $research_nametwo = $employee['research_nametwo'];
        $research_datetwo = $employee['research_datetwo'];
        $seminar_name = $employee['seminar_name'];
        $seminar_role = $employee['seminar_role'];
        $seminar_sponsor = $employee['seminar_sponsor'];
        $seminar_date = $employee['seminar_date'];
        $seminar_nametwo = $employee['seminar_nametwo'];
        $seminar_roletwo = $employee['seminar_roletwo'];
        $seminar_sponsortwo = $employee['seminar_sponsortwo'];
        $seminar_datetwo = $employee['seminar_datetwo'];
        $contact_relationship = $employee['contact_relationship'];
    } else {
        echo "Employee data not found. Please check the employee details.";
        exit;
    }
} else {
    echo "Employee ID not provided.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Update Employee Information</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="styles.css" />
    <link rel="stylesheet" href="employee_profile.css"><style>
        h2 {
        text-align: center;
    }
    .form-group {
            margin-bottom: 15px; /* Add spacing below each form group */
        }

        /* Ensure proper alignment of form controls */
        .form-row::after {
            content: "";
            display: table;
            clear: both;
        }

        /* Update form control styling */
        .form-control {
            display: block;
            width: 100%; /* Full width for form controls */
            padding: 0.375rem 0.75rem;
            font-size: 1rem;
            line-height: 1.5;
            color: #495057;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid #ced4da;
            border-radius: 0.25rem;
        }
</style>
</head>
<body>

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
        <li class="nav-item">
          <a class="nav-link text-light" href="settings.php">Settings</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="logout.php">Logout</a>
        </li>
      </ul>
      </div>
  </div>
</nav>

<div class="container mt-3">
    <h2>Update Employee Information</h2>
    <form action="process/update.php" method="POST">
        <?php if(isset($employee) && is_array($employee)) { ?>
            <!-- Display employee details in input fields for updating -->
            
            <div class="container custom-container">
   <div class="card custom-card">
      <div class="card-body">
            <form>
            <div class="form-row">
            <div class="form-group col-md-3">
                        <label for="employee_id">Employee ID</label>
                        <span class="form-control"><?php echo $employee['employee_id']; ?></span>
                    </div>

                <div class="form-group col-md-3">
                        <label for="date_staretd">Date Started</label>
                        <span class="form-control"><?php echo $employee['date_started']; ?></span>
                    </div>

                <div class="col">
                    <label for="position">Position</label>
                    <input type="text" class="form-control" id="position" name="position" value="<?php echo $employee['position']; ?>">
                </div>

                <div class="col">
                    <label for="department">Department</label>
                    <input type="text"class="form-control"  id="department" name="department" value="<?php echo $employee['department']; ?>">
                </div>
            </div>

                <div class="form-row">
                    <div class="col-md-3">
                        <label for="prefix">Prefix</label>
                        <select class="form-select" name="prefix">
                            <option value="Mr." <?php if($employee['prefix'] == "Mr.") echo "selected"; ?>>Mr.</option>
                            <option value="Ms." <?php if($employee['prefix'] == "Ms.") echo "selected"; ?>>Ms.</option>
                            <option value="Jr." <?php if($employee['prefix'] == "Jr.") echo "selected"; ?>>Jr.</option>
                            <option value="Sr." <?php if($employee['prefix'] == "Sr.") echo "selected"; ?>>Sr.</option>
                            <option value="II" <?php if($employee['prefix'] == "II") echo "selected"; ?>>II</option>
                            <option value="III" <?php if($employee['prefix'] == "III") echo "selected"; ?>>III</option>
                            <option value="IV" <?php if($employee['prefix'] == "IV") echo "selected"; ?>>IV</option>
                            <option value="Mrs." <?php if($employee['prefix'] == "Mrs.") echo "selected"; ?>>Mrs.</option>
                            <option value="Dr." <?php if($employee['prefix'] == "Dr.") echo "selected"; ?>>Dr.</option>
                            <option value="Rev." <?php if($employee['prefix'] == "Rev.") echo "selected"; ?>>Rev.</option>
                            <option value="None" <?php if($employee['prefix'] == "None") echo "selected"; ?>>None</option>
                        </select>
                    </div>

                    <div class="form-group col-md-3">
                        <label for="first_name">Firstname</label>
                        <span class="form-control"><?php echo $employee['first_name']; ?></span>
                    </div>

                    <div class="form-group col-md-3">
                        <label for="last_name">Lastname</label>
                        <input type="text" class="form-control" id="last_name" name="last_name" value="<?php echo $employee['last_name']; ?>"><br><br>
                    </div>

                <div class="form-group col-md-3">
                    <label for="middle_name">Middle Name</label>
                    <input type="text" class="form-control" id="middle_name" name="middle_name" value="<?php echo $employee['middle_name']; ?>"><br><br>
                </div>
            </div>

                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label for="nickname">Nickame</label>
                        <input type="text" class="form-control" id="nickname" name="nickname" value="<?php echo $employee['nickname']; ?>"><br><br>
                    </div>

                    <div class="form-group col-md-3">
                        <label for="gender">Gender</label>
                        <select class="form-select" name="gender">
                            <option value="Male" <?php if($employee['gender'] == "Male") echo "selected"; ?>>Male</option>
                            <option value="Female" <?php if($employee['gender'] == "Female") echo "selected"; ?>>Female</option>
                        </select>
                    </div>

                    <div class="form-group col-md-3">
                        <label for="religion">Religion</label>
                        <input type="text" class="form-control" id="religion" name="religion" value="<?php echo $employee['religion']; ?>"><br><br>
                     </div>

                     <div class="form-group col-md-3">
                        <label for="civil_status">Civil Status</label>
                        <select class="form-select" name="civil_status">
                            <option value="Single" <?php if($employee['civil_status'] == "Single") echo "selected"; ?>>Single</option>
                            <option value="Married" <?php if($employee['civil_status'] == "Married") echo "selected"; ?>>Married</option>
                            <option value="Widowed" <?php if($employee['civil_status'] == "Widowed") echo "selected"; ?>>Widowed</option>
                            <option value="Divorced" <?php if($employee['civil_status'] == "Divorced") echo "selected"; ?>>Divorced</option>
                            <option value="Separated" <?php if($employee['civil_status'] == "Separated") echo "selected"; ?>>Separated</option>
                        </select>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label for="citizenship">Citizenship</label>
                        <input type="text" class="form-control" id="citizenship" name="citizenship" value="<?php echo $employee['citizenship']; ?>"><br><br>
                    </div>

                    <div class="form-group col-md-3">
                         <label for="birthday">Birthday</label>
                         <input type="date" class="form-control" id="birthday" name="birthday" value="<?php echo $employee['birthday']; ?>"><br><br>
                    </div>

                    <div class="form-group col-md-3">
                         <label for="place_of_birth">Place of Birth</label>
                         <input type="text" class="form-control" id="place_of_birth" name="place_of_birth" value="<?php echo $employee['place_of_birth']; ?>"><br><br>
                    </div>

                    <div class="form-group col-md-3">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" id="email" name="email" value="<?php echo $employee['email']; ?>"><br><br>
                    </div>
                </div>

                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label for="phone_number" class="form-label required">Phone Number</label>
                            <input type="text" class="form-control" id="phone_number" name="phone_number" placeholder="+63" maxLength="10" value="<?php echo $phone_number;?>">
                            <small class="text-muted">The phone number should start with the digit 9 and be exactly 10 digits long.</small>
                        </div>
                    </div>
                    <h6><strong>PRESENT ADDRESS</strong></h6>
                <div class="form-row">
                     <div class="form-group col-md-3">
                        <label for="present_street">Street</label>
                        <input type="text" class="form-control" id="present_street" name="present_street" value="<?php echo $employee['present_street']; ?>"><br><br>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="present_barangay">Barangay</label>
                        <input type="text" class="form-control" id="present_barangay" name="present_barangay" value="<?php echo $employee['present_barangay']; ?>"><br><br>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="present_city">City</label>
                        <input type="text" class="form-control" id="present_city" name="present_city" value="<?php echo $employee['present_city']; ?>"><br><br>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="present_province">Province</label>
                        <input type="text" class="form-control" id="present_province" name="present_province" value="<?php echo $employee['present_province']; ?>"><br><br>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="present_zip">ZIP</label>
                        <input type="text" class="form-control" id="present_zip" name="present_zip" value="<?php echo $employee['present_zip']; ?>"><br><br>
                    </div>
                </div>

                <h6><strong>PERMANENT ADDRESS</strong></h6>
                <div class="form-row">
                     <div class="form-group col-md-3">
                        <label for="permanent_street">Street</label>
                        <input type="text" class="form-control" id="permanent_street" name="permanent_street" value="<?php echo $employee['permanent_street']; ?>"><br><br>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="permanent_barangay">Barangay</label>
                        <input type="text" class="form-control" id="permanent_barangay" name="permanent_barangay" value="<?php echo $employee['permanent_barangay']; ?>"><br><br>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="permanent_city">City</label>
                        <input type="text" class="form-control" id="permanent_city" name="permanent_city" value="<?php echo $employee['permanent_city']; ?>"><br><br>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="permanent_province">Province</label>
                        <input type="text" class="form-control" id="permanent_province" name="permanent_province" value="<?php echo $employee['permanent_province']; ?>"><br><br>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="permanent_zip">ZIP</label>
                        <input type="text" class="form-control" id="permanent_zip" name="permanent_zip" value="<?php echo $employee['permanent_zip']; ?>"><br><br>
                    </div>
                </div>

                <h6><strong>PROVINCIAL ADDRESS</strong></h6>
                <div class="form-row">
                     <div class="form-group col-md-3">
                        <label for="provincial_street">Street</label>
                        <input type="text" class="form-control" id="provincial_street" name="provincial_street" value="<?php echo $employee['provincial_street']; ?>"><br><br>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="provincial_barangay">Barangay</label>
                        <input type="text" class="form-control" id="provincial_barangay" name="provincial_barangay" value="<?php echo $employee['provincial_barangay']; ?>"><br><br>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="provincial_city">City</label>
                        <input type="text" class="form-control" id="provincial_city" name="provincial_city" value="<?php echo $employee['provincial_city']; ?>"><br><br>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="provincial_province">Province</label>
                        <input type="text" class="form-control" id="provincial_province" name="provincial_province" value="<?php echo $employee['provincial_province']; ?>"><br><br>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="provincial_zip">ZIP</label>
                        <input type="text" class="form-control" id="provincial_zip" name="provincial_zip" value="<?php echo $employee['provincial_zip']; ?>"><br><br>
                    </div>
                </div>

                <h6><strong>GOVERNMENT IDENTIFICATION NUMBER</strong></h6>
                <div class="form-row">
                     <div class="form-group col-md-3">
                        <label for="phil_no">Phil Health No.</label>
                        <input type="text" class="form-control" id="phil_no" name="phil_no" value="<?php echo $employee['phil_no']; ?>"><br><br>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="provincial_barangay">Barangay</label>
                        <input type="text" class="form-control" id="provincial_barangay" name="provincial_barangay" value="<?php echo $employee['provincial_barangay']; ?>"><br><br>
                    </div>
                    <div class="form-group col-md-3">
                    <label for="pagibig_no">Pag-Ibig No.</label>
                        <input type="text" class="form-control" id="pagibig_no" name="pagibig_no" value="<?php echo $employee['pagibig_no']; ?>"><br><br>
                    </div>
                    <div class="form-group col-md-3">
                    <label for="tin">TIN</label>
                        <input type="text" class="form-control" id="tin" name="tin" value="<?php echo $employee['tin']; ?>"><br><br>
                    </div>
                    <div class="form-group col-md-3">
                    <label for="sss_no">SSS No.</label>
                        <input type="text" class="form-control" id="sss_no" name="sss_no" value="<?php echo $employee['sss_no']; ?>"><br><br>
                    </div>
                    <div class="form-group col-md-3">
                    <label for="prc">PRC ID</label>
                        <input type="text" class="form-control" id="prc" name="prc" value="<?php echo $employee['prc']; ?>"><br><br>
                    </div>
                </div>

                <h6><strong>FAMILY BACKGROUND</strong></h6>
                <h6>A. Father's Information</h6>
                <div class="form-row">
                     <div class="form-group col-md-3">
                     <label for="father_name">Name</label>
                        <input type="text" class="form-control" id="father_name" name="father_name" value="<?php echo $employee['father_name']; ?>"><br><br>
                    </div>
                    <div class="form-group col-md-3">
                    <label for="f_occupation">Occupation</label>
                        <input type="text" class="form-control" id="f_occupation" name="f_occupation" value="<?php echo $employee['f_occupation']; ?>"><br><br>
                    </div>
                    <div class="form-group col-md-3">
                    <label for="f_date_of_birth">Date of Birth</label>
                        <input type="text" class="form-control" id="f_date_of_birth" name="f_date_of_birth" value="<?php echo $employee['f_date_of_birth']; ?>"><br><br>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="f_contact_number" class="form-label">Contact Number</label>
                        <input type="text" class="form-control" name="f_contact_number" placeholder="+63" maxLength="10" value="<?php echo $f_contact_number; ?>" >
                        <small class="text-muted">The phone number should start with the digit 9 and be exactly 10 digits long.</small>
                    </div>
                </div>

                <h6>A. Mother's Information</h6>                
                <div class="form-row">
                     <div class="form-group col-md-3">
                     <label for="mother_name">Name</label>
                        <input type="text" class="form-control" id="mother_name" name="mother_name" value="<?php echo $employee['mother_name']; ?>"><br><br>
                    </div>
                    <div class="form-group col-md-3">
                    <label for="m_occupation">Occupation</label>
                        <input type="text" class="form-control" id="m_occupation" name="m_occupation" value="<?php echo $employee['m_occupation']; ?>"><br><br>
                    </div>
                    <div class="form-group col-md-3">
                    <label for="m_date_of_birth">Date of Birth</label>
                        <input type="text" class="form-control" id="m_date_of_birth" name="m_date_of_birth" value="<?php echo $employee['m_date_of_birth']; ?>"><br><br>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="m_contact_number" class="form-label">Contact Number</label>
                        <input type="text" class="form-control" name="m_contact_number" placeholder="+63" maxLength="10" value="<?php echo $m_contact_number; ?>" >
                        <small class="text-muted">The phone number should start with the digit 9 and be exactly 10 digits long.</small>
                    </div>
                </div>

                <h6>C. Spouse Information</h6>
                <div class="form-row">
                     <div class="form-group col-md-3">
                     <label for="spouse_name">Name</label>
                        <input type="text" class="form-control" id="spouse_name" name="spouse_name" value="<?php echo $employee['spouse_name']; ?>"><br><br>
                    </div>
                    <div class="form-group col-md-3">
                    <label for="spouse_occupation">Occupation</label>
                        <input type="text" class="form-control" id="spouse_occupation" name="spouse_occupation" value="<?php echo $employee['spouse_occupation']; ?>"><br><br>
                    </div>
                    <div class="form-group col-md-3">
                    <label for="spouse_date_of_birth">Date of Birth</label>
                        <input type="text" class="form-control" id="spouse_date_of_birth" name="spouse_date_of_birth" value="<?php echo $employee['spouse_date_of_birth']; ?>"><br><br>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="spouse_contact_number" class="form-label">Contact Number</label>
                        <input type="text" class="form-control" name="spouse_contact_number" placeholder="+63" maxLength="10" value="<?php echo $spouse_contact_number; ?>" >
                        <small class="text-muted">The phone number should start with the digit 9 and be exactly 10 digits long.</small>
                    </div>
                </div>

                <h6><strong>IN CASE OF EMERGENCY</strong></h6>
                <h6>Person to Contact</h6>
                <div class="form-row">
                     <div class="form-group col-md-3">
                     <label for="contact_name">Name</label>
                        <input type="text" class="form-control" id="contact_name" name="contact_name" value="<?php echo $employee['contact_name']; ?>"><br><br>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="contact_number" class="form-label required">Contact Number</label>
                        <input type="text" class="form-control" name="contact_number" placeholder="+63" maxLength="10" value="<?php echo $contact_number; ?>">
                        <small class="text-muted">The phone number should start with the digit 9 and be exactly 10 digits long.</small>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="contact_relationship">Contact Relationship</label>
                        <select class="form-select" name="contact_relationship">
                        <option value="" disabled selected>Relationship</option>   
                        <option value="Spouse" <?php if($employee['contact_relationship'] == "Spouse") echo "selected"; ?>>Spouse</option>
                        <option value="Parent" <?php if($employee['contact_relationship'] == "Parent") echo "selected"; ?>>Parent</option>
                        <option value="Sibling" <?php if($employee['contact_relationship'] == "Sibling") echo "selected"; ?>>Sibling</option>
                        <option value="Partner" <?php if($employee['contact_relationship'] == "Partner") echo "selected"; ?>>Partner</option>
                        <option value="Friend" <?php if($employee['contact_relationship'] == "Friend") echo "selected"; ?>>Friend</option>
                        <option value="Colleague" <?php if($employee['contact_relationship'] == "Colleague") echo "selected"; ?>>Colleague</option>
                        <option value="Other" <?php if($employee['contact_relationship'] == "Other") echo "selected"; ?>>Other</option>
                        </select>               
                    </div>
                </div>

                <h6><strong>DEPENDENTS</strong></h6>
                <h6>1.</h6>
                <div class="form-row">
                     <div class="form-group col-md-3">
                     <label for="dependents_name">Name</label>
                        <input type="text" class="form-control" id="dependents_name" name="dependents_name" value="<?php echo $employee['dependents_name']; ?>"><br><br>
                    </div>
                    <div class="form-group col-md-3">
                    <label for="dependents_age">Age</label>
                        <input type="text" class="form-control" id="dependents_age" name="dependents_age" value="<?php echo $employee['dependents_age']; ?>"><br><br>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="dependents_relationship">Dependents Relationship</label>    
                        <select class="form-select" name="dependents_relationship">
                        <option value="" disabled selected>Relationship</option>   
                        <option value="Spouse" <?php if($employee['dependentsb_relationship'] == "Spouse") echo "selected"; ?>>Spouse</option>
                        <option value="Son" <?php if($employee['dependentsb_relationship'] == "Son") echo "selected"; ?>>Son</option>
                        <option value="Daughter" <?php if($employee['dependentsb_relationship'] == "Daughter") echo "selected"; ?>>Daughter</option>
                        <option value="Father" <?php if($employee['dependentsb_relationship'] == "Father") echo "selected"; ?>>Father</option>
                        <option value="Mother" <?php if($employee['dependentsb_relationship'] == "Mother") echo "selected"; ?>>Mother</option>
                        <option value="Sister" <?php if($employee['dependentsb_relationship'] == "Sister") echo "selected"; ?>>Sister</option>
                        <option value="Brother" <?php if($employee['dependentsb_relationship'] == "Brother") echo "selected"; ?>>Brother</option>
                        <option value="Aunt" <?php if($employee['dependentsb_relationship'] == "Aunt") echo "selected"; ?>>Aunt</option>
                        <option value="Uncle" <?php if($employee['dependentsb_relationship'] == "Uncle") echo "selected"; ?>>Uncle</option>
                        <option value="Cousin" <?php if($employee['dependentsb_relationship'] == "Cousin") echo "selected"; ?>>Cousin</option>
                        <option value="Grandfather" <?php if($employee['dependentsb_relationship'] == "Grandfather") echo "selected"; ?>>Grandfather</option>
                        <option value="Grandmother" <?php if($employee['dependentsb_relationship'] == "Grandmother") echo "selected"; ?>>Grandmother</option>
                        <option value="Godfather" <?php if($employee['dependentsb_relationship'] == "Godfather") echo "selected"; ?>>Godfather</option>
                        <option value="Godmother" <?php if($employee['dependentsb_relationship'] == "Godmother") echo "selected"; ?>>Godmother</option>
                        </select>
                    </div>
                </div>

                <h6>2.</h6>
                <div class="form-row">
                     <div class="form-group col-md-3">
                     <label for="dependentsb_name">Name</label>
                        <input type="text" class="form-control" id="dependentsb_name" name="dependentsb_name" value="<?php echo $employee['dependentsb_name']; ?>"><br><br>
                    </div>
                    <div class="form-group col-md-3">
                    <label for="dependentsb_age">Age</label>
                        <input type="text" class="form-control" id="dependentsb_age" name="dependentsb_age" value="<?php echo $employee['dependentsb_age']; ?>"><br><br>
                    </div>
                    <div class="form-group col-md-3">
                    <label for="dependentsb_relationship">Contact Relationship</label>
                        <select class="form-select" name="dependentsb_relationship">
                        <option value="" disabled selected>Relationship</option>   
                        <option value="Spouse" <?php if($employee['dependentsb_relationship'] == "Spouse") echo "selected"; ?>>Spouse</option>
                        <option value="Son" <?php if($employee['dependentsb_relationship'] == "Son") echo "selected"; ?>>Son</option>
                        <option value="Daughter" <?php if($employee['dependentsb_relationship'] == "Daughter") echo "selected"; ?>>Daughter</option>
                        <option value="Father" <?php if($employee['dependentsb_relationship'] == "Father") echo "selected"; ?>>Father</option>
                        <option value="Mother" <?php if($employee['dependentsb_relationship'] == "Mother") echo "selected"; ?>>Mother</option>
                        <option value="Sister" <?php if($employee['dependentsb_relationship'] == "Sister") echo "selected"; ?>>Sister</option>
                        <option value="Brother" <?php if($employee['dependentsb_relationship'] == "Brother") echo "selected"; ?>>Brother</option>
                        <option value="Aunt" <?php if($employee['dependentsb_relationship'] == "Aunt") echo "selected"; ?>>Aunt</option>
                        <option value="Uncle" <?php if($employee['dependentsb_relationship'] == "Uncle") echo "selected"; ?>>Uncle</option>
                        <option value="Cousin" <?php if($employee['dependentsb_relationship'] == "Cousin") echo "selected"; ?>>Cousin</option>
                        <option value="Grandfather" <?php if($employee['dependentsb_relationship'] == "Grandfather") echo "selected"; ?>>Grandfather</option>
                        <option value="Grandmother" <?php if($employee['dependentsb_relationship'] == "Grandmother") echo "selected"; ?>>Grandmother</option>
                        <option value="Godfather" <?php if($employee['dependentsb_relationship'] == "Godfather") echo "selected"; ?>>Godfather</option>
                        <option value="Godmother" <?php if($employee['dependentsb_relationship'] == "Godmother") echo "selected"; ?>>Godmother</option>
                        </select>                     
                    </div>
                </div>

                <h6><strong>HEALTH DETAILS</strong></h6>
                <div class="form-row">
                     <div class="form-group col-md-3">
                     <label for="weight">Weight</label>
                        <input type="text" class="form-control" id="weight" name="weight" value="<?php echo $employee['weight']; ?>"><br><br>
                    </div>
                    <div class="form-group col-md-3">
                    <label for="height">Height</label>
                        <input type="text" class="form-control" id="height" name="height" value="<?php echo $employee['height']; ?>"><br><br>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="blood_type">What is your blood type?</label>
                        <select class="form-select" name="blood_type">
                            <option value="A+" <?php if($employee['blood_type'] == "A+") echo "selected"; ?>>A+</option>
                            <option value="A-" <?php if($employee['blood_type'] == "A-") echo "selected"; ?>>A-</option>
                            <option value="B+" <?php if($employee['blood_type'] == "B+") echo "selected"; ?>>B+</option>
                            <option value="B-" <?php if($employee['blood_type'] == "B-") echo "selected"; ?>>B-</option>
                            <option value="AB+" <?php if($employee['blood_type'] == "AB+") echo "selected"; ?>>AB+</option>
                            <option value="AB-" <?php if($employee['blood_type'] == "AB-") echo "selected"; ?>>AB-</option>
                            <option value="O+" <?php if($employee['blood_type'] == "O+") echo "selected"; ?>>O+</option>
                            <option value="O-" <?php if($employee['blood_type'] == "O-") echo "selected"; ?>>O-</option>
                        </select>                      
                    </div>
                    <div class="form-group col-md-3">
                    <label for="xray_date">When was your last xray?</label>
                        <input type="date" class="form-control" id="xray_date" name="xray_date" value="<?php echo $employee['xray_date']; ?>"><br><br>
                    </div>
                    <div class="form-group col-md-3">
                    <label for="xray_result">What was the result?</label>
                        <input type="text" class="form-control" id="xray_result" name="xray_result" value="<?php echo $employee['xray_result']; ?>"><br><br>
                    </div>
                </div>

                
                <h6><strong>EDUCATIONAL BACKGROUND</strong></h6>
                    <h6>High School</h6>
                    <div class="form-row">
                    <div class="form-group col-md-3">
                    <label for="hs_school">Name of School</label>
                        <input type="text" class="form-control" id="hs_school" name="hs_school" value="<?php echo $employee['hs_school']; ?>"><br><br>
                    </div>
                     <div class="form-group col-md-3">
                     <label for="hs_attainment">Highest Attainment</label>
                        <input type="text" class="form-control" id="hs_attainment" name="hs_attainment" value="<?php echo $employee['hs_attainment']; ?>"><br><br>
                    </div>
                    <div class="form-group col-md-3">
                    <label for="hs_started">Year Started</label>
                        <input type="text" class="form-control" id="hs_started" name="hs_started" value="<?php echo $employee['hs_started']; ?>"><br><br>
                    </div>
                    <div class="form-group col-md-3">
                    <label for="hs_ended">Year Ended</label>
                        <input type="text" class="form-control" id="hs_ended" name="hs_ended" value="<?php echo $employee['hs_ended']; ?>"><br><br>
                    </div>
                </div>

                <h6>Vocational School</h6>
                <div class="form-row">
                     <div class="form-group col-md-3">
                     <label for="v_course">Course</label>
                        <input type="text" class="form-control" id="v_course" name="v_course" value="<?php echo $employee['v_course']; ?>"><br><br>
                    </div>
                    <div class="form-group col-md-3">
                    <label for="v_attainment">Highest Attainment</label>
                        <input type="text" class="form-control" id="v_attainment" name="v_attainment" value="<?php echo $employee['v_attainment']; ?>"><br><br>
                    </div>
                    <div class="form-group col-md-3">
                    <label for="v_started">Year Started</label>
                        <input type="text" class="form-control" id="v_started" name="v_started" value="<?php echo $employee['v_started']; ?>"><br><br>
                    </div>
                    <div class="form-group col-md-3">
                    <label for="v_ended">Year Ended</label>
                        <input type="text" class="form-control" id="v_ended" name="v_ended" value="<?php echo $employee['v_ended']; ?>"><br><br>
                    </div>
                </div>

                <h6>College</h6>
                <div class="form-row">
                     <div class="form-group col-md-3">
                     <label for="college_school">Name of School</label>
                        <input type="text" class="form-control" id="college_school" name="college_school" value="<?php echo $employee['college_school']; ?>"><br><br>
                    </div>
                    <div class="form-group col-md-3">
                    <label for="college_course">Course</label>
                        <input type="text" class="form-control" id="college_course" name="college_course" value="<?php echo $employee['college_course']; ?>"><br><br>
                    </div>
                    <div class="form-group col-md-3">
                    <label for="college_started">Year Started</label>
                        <input type="text" class="form-control" id="college_started" name="college_started" value="<?php echo $employee['college_started']; ?>"><br><br>
                    </div>
                    <div class="form-group col-md-3">
                    <label for="college_ended">Year Ended</label>
                        <input type="text" class="form-control" id="college_ended" name="college_ended" value="<?php echo $employee['college_ended']; ?>"><br><br>
                    </div>
                </div>
                
                <h6>RESEARCH & PUBLICATION</h6>
                <h6>1.</h6>
                <div class="form-row">
                     <div class="form-group col-md-3">
                     <label for="research_name">Research Title</label>
                        <input type="text" class="form-control" id="research_name" name="research_name" value="<?php echo $employee['research_name']; ?>"><br><br>
                    </div>
                    <div class="form-group col-md-3">
                    <label for="research_date">Date Published</label>
                        <input type="date" class="form-control" id="research_date" name="research_date" value="<?php echo $employee['research_date']; ?>"><br><br>
                    </div>
                </div>

                <h6>2.</h6>
                <div class="form-row">
                    <div class="form-group col-md-3">
                    <label for="research_nametwo">Research Title</label>
                        <input type="text" class="form-control" id="research_nametwo" name="research_nametwo" value="<?php echo $employee['research_nametwo']; ?>"><br><br>
                    </div>
                    <div class="form-group col-md-3">
                    <label for="research_datetwo">Date Published</label>
                        <input type="date" class="form-control" id="research_datetwo" name="research_datetwo" value="<?php echo $employee['research_datetwo']; ?>"><br><br>
                    </div>
                </div>

                <h6><strong>SEMINARS/TRAININGS</strong></h6>
                <h6>1.</h6>
                <div class="form-row">
                     <div class="form-group col-md-3">
                     <label for="seminar_name">Title of Seminar/Training</label>
                        <input type="text" class="form-control" id="seminar_name" name="seminar_name" value="<?php echo $employee['seminar_name']; ?>"><br><br>
                    </div>
                    <div class="form-group col-md-3">
                    <label for="seminar_role">Role</label>
                        <input type="text" class="form-control" id="seminar_role" name="seminar_role" value="<?php echo $employee['seminar_role']; ?>"><br><br>
                    </div>
                    <div class="form-group col-md-3">
                     <label for="seminar_sponsor">Sponsor</label>
                        <input type="text" class="form-control" id="seminar_sponsor" name="seminar_sponsor" value="<?php echo $employee['seminar_sponsor']; ?>"><br><br>
                    </div>
                    <div class="form-group col-md-3">
                    <label for="seminar_date">Date</label>
                        <input type="date" class="form-control" id="seminar_date" name="seminar_date" value="<?php echo $employee['seminar_date']; ?>"><br><br>
                    </div>
                </div>

                <h6>2.</h6>
                <div class="form-row">
                     <div class="form-group col-md-3">
                     <label for="seminar_nametwo">Title of Seminar/Training</label>
                        <input type="text" class="form-control" id="seminar_nametwo" name="seminar_nametwo" value="<?php echo $employee['seminar_nametwo']; ?>"><br><br>
                    </div>
                    <div class="form-group col-md-3">
                    <label for="seminar_roletwo">Role</label>
                        <input type="text" class="form-control" id="seminar_roletwo" name="seminar_roletwo" value="<?php echo $employee['seminar_roletwo']; ?>"><br><br>
                    </div>
                    <div class="form-group col-md-3">
                     <label for="seminar_sponsortwo">Sponsor</label>
                        <input type="text" class="form-control" id="seminar_sponsortwo" name="seminar_sponsortwo" value="<?php echo $employee['seminar_sponsortwo']; ?>"><br><br>
                    </div>
                    <div class="form-group col-md-3">
                    <label for="seminar_datetwo">Date</label>
                        <input type="date" class="form-control" id="seminar_datetwo" name="seminar_datetwo" value="<?php echo $employee['seminar_datetwo']; ?>"><br><br>
                    </div>
                </div>

                </div>

                    <input type="hidden" name="employee_id" value="<?php echo $employee_id; ?>">
                    <div class="form-row justify-content-end">
                        <div class="form-group col-md-3">
                            <button type="submit" class="btn btn-primary" style="color: white;">Save</button>
                            <a class="btn btn-danger" href="admin_homepage.php">Cancel</a> <!-- Add this line -->
                        </div>
                    </div>
                        
        <?php } else { ?>
            <p>Employee data not found. Please check the employee details.</p>
        <?php } ?>
      </div>
   </div>
            </div>
    </form>
</div>
</div>
</body>
</html>
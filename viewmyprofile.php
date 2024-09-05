<?php
session_start();

// Check if the user is not logged in
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
    // Redirect to the login page or display an error
    header('Location: myprofile.php');
    exit;
}

require_once('process/dbh.php');

$id = isset($_GET['id']) ? $_GET['id'] : '';
$sql = "SELECT * FROM employee WHERE id=$id";
$result = mysqli_query($conn, $sql);

if (!$result) {
    echo "Error: " . mysqli_error($conn);
    exit;
}

if ($result instanceof mysqli_result && mysqli_num_rows($result) > 0) {
    $res = mysqli_fetch_assoc($result);

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
    $gender = $res['gender']; // Add this
    $civil_status = $res['civil_status']; // Add this
    $birthday = $res['birthday']; // Add this
    $phone_number = $res['phone_number']; // Add this
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

} else {
    echo "No employee found with the given ID.";
    exit;
}
?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>My Profile | BCHRIS</title>
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
      padding: 5px;
    }
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

        <form class="row g-3" method="POST" action="myprofileup.php?id=<?php echo $id?>">

        <div class="col-md-3">
            <label for="employee_id" class="form-label">Employee ID</label>
            <input type="text" class="form-control" id="employee_id" name="employee_id" value="<?php echo $employee_id;?>" readonly>
          </div>

          <div class="col-md-3">
            <label for="date_started" class="form-label">Date Started</label>
            <input type="text" class="form-control" id="date_started" name="date_started" value="<?php echo $date_started;?>" readonly>
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
            <label for="prefix" class="form-label">Prefix</label>
            <input type="text" class="form-control" id="prefix" name="prefix" value="<?php echo $prefix;?>" readonly>
          </div>

          <div class="col-md-3">
            <label for="nickname" class="form-label">Nickname</label>
            <input type="text" class="form-control" id="nickname" name="nickname" value="<?php echo $nickname;?>" readonly>
          </div>

          <div class="col-md-3">
            <label for="gender" class="form-label">Gender</label>
            <input type="text" class="form-control" id="gender" name="gender" value="<?php echo $gender;?>" readonly>
          </div>

          <div class="col-md-3">
            <label for="religion" class="form-label">Religion</label>
            <input type="text" class="form-control" id="religion" name="religion" value="<?php echo $religion;?>" readonly>
          </div>

          <div class="col-md-3">
            <label for="civil_status" class="form-label">Civil Status</label>
            <input type="text" class="form-control" id="civil_status" name="civil_status" value="<?php echo $civil_status;?>" readonly>
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
            <input type="email" class="form-control" id="email" name="email" value="<?php echo $email;?>"readonly >
          </div>

          <div class="col-md-3">
            <label for="phone_number" class="form-label">Phone Number</label>
            <input type="text" class="form-control" id="phone_number" name="phone_number" placeholder="+63" maxLength="10" value="<?php echo $phone_number;?>" readonly>
          </div>

          <h7><strong>Present Address</strong></h7>
               <div class="col-md-3">
                  <label for="present_street" class="form-label">Street Number</label>
                  <input type="text"  class="form-control" id="present_street" name="present_street" value="<?php echo $present_street;?>"readonly>
               </div>
               <div class="col-md-3">
                  <label for="present_barangay" class="form-label">Barangay</label>
                  <input type="text"  class="form-control" id="present_barangay" name="present_barangay" value="<?php echo $present_barangay;?>"readonly>
               </div>
               <div class="col-md-3">
                  <label for="present_city" class="form-label">City</label>
                  <input type="text"  class="form-control" id="present_city" name="present_city" value="<?php echo $present_city;?>"readonly>
               </div>
               <div class="col-md-3">
                  <label for="present_province" class="form-label">Province</label>
                  <input type="text"  class="form-control" id="present_province" name="present_province" value="<?php echo $present_province;?>"readonly>
               </div>
               <div class="col-md-3">
                  <label for="present_zip" class="form-label">ZIP</label>
                  <input type="text"  class="form-control" id="present_zip" name="present_zip" value="<?php echo $present_zip;?>"readonly>
               </div>
               <h7><strong>Permanent Address</strong></h7>
               <div class="col-md-3">
                  <label for="permanent_street" class="form-label">Street Number</label>
                  <input type="text"  class="form-control" id="permanent_street" name="permanent_street" value="<?php echo $permanent_street;?>"readonly>
               </div>
               <div class="col-md-3">
                  <label for="permanent_barangay" class="form-label">Barangay</label>
                  <input type="text"  class="form-control" id="permanent_barangay" name="permanent_barangay" value="<?php echo $permanent_barangay;?>"readonly>
               </div>
               <div class="col-md-3">
                  <label for="permanent_city" class="form-label">City</label>
                  <input type="text"  class="form-control" id="permanent_city" name="permanent_city" value="<?php echo $permanent_city;?>"readonly>
               </div>
               <div class="col-md-3">
                  <label for="permanent_province" class="form-label">Province</label>
                  <input type="text"  class="form-control" id="permanent_province" name="permanent_province" value="<?php echo $permanent_province;?>"readonly>
               </div>
               <div class="col-md-3">
                  <label for="permanent_zip" class="form-label">ZIP</label>
                  <input type="text"  class="form-control" id="permanent_zip" name="permanent_zip" value="<?php echo $permanent_zip;?>"readonly>
               </div>
               <h7><strong>Provincial Address</strong></h7>
               <div class="col-md-3">
                  <label for="provincial_street" class="form-label">Street Number</label>
                  <input type="text"  class="form-control" id="provincial_street" name="provincial_street" value="<?php echo $provincial_street;?>"readonly>
               </div>
               <div class="col-md-3">
                  <label for="provincial_barangay" class="form-label">Barangay</label>
                  <input type="text"  class="form-control" id="provincial_barangay" name="provincial_barangay" value="<?php echo $provincial_barangay;?>"readonly>
               </div>
               <div class="col-md-3">
                  <label for="provincial_city" class="form-label">City</label>
                  <input type="text"  class="form-control" id="provincial_city" name="provincial_city" value="<?php echo $provincial_city;?>"readonly>
               </div>
               <div class="col-md-3">
                  <label for="provincial_province" class="form-label">Province</label>
                  <input type="text"  class="form-control" id="provincial_province" name="provincial_province" value="<?php echo $provincial_province;?>"readonly>
               </div>
               <div class="col-md-3">
                  <label for="provincial_zip" class="form-label">ZIP</label>
                  <input type="text"  class="form-control" id="provincial_zip" name="provincial_zip" value="<?php echo $provincial_zip;?>"readonly>
               </div>


        <strong>Place of Birth</strong>
         <div class="col-md-3">
            <label for="place_of_birth" class="form-label">Place of Birth</label>
            <input type="text"  class="form-control" id="place_of_birth" name="place_of_birth" value="<?php echo $place_of_birth;?>" readonly>
         </div>

         <h7><strong>Government Identification Number</strong></h7>
          <div class="col-md-3">
          <label for="phil_no" class="form-label">Phil Health No.</label>
            <input type="text" class="form-control" id="phil_no" name="phil_no" value="<?php echo $phil_no;?>" readonly>
          </div>

          <div class="col-md-3">
          <label for="pagibig_no" class="form-label">Pag-Ibig No.</label>
            <input type="text" class="form-control" id="pagibig_no" name="pagibig_no" value="<?php echo $pagibig_no;?>" readonly>
          </div>

          <div class="col-md-3">
          <label for="tin" class="form-label">TIN</label>
            <input type="text" class="form-control" id="tin" name="tin" value="<?php echo $tin;?>" readonly>
          </div>

          <div class="col-md-3">
          <label for="sss_no" class="form-label">SSS No.</label>
            <input type="text" class="form-control" id="sss_no" name="sss_no" value="<?php echo $sss_no;?>" readonly>
          </div>

          <div class="col-md-3">
          <label for="prc" class="form-label">PRC ID</label>
            <input type="text" class="form-control" id="prc" name="prc" value="<?php echo $prc;?>" readonly>
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
                  
                  <p>A. Father's Information</p>
                  <div class="col-md-3">
                    <label for="father_name" class="form-label">Name</label>
                    <input type="text" class="form-control" name="father_name" value="<?php echo $father_name; ?>" readonly>
                  </div>
                  <div class="col-md-3">
                    <label for="f_occupation" class="form-label">Occupation</label>
                    <input type="text" class="form-control" name="f_occupation" value="<?php echo $f_occupation; ?>" readonly>
                  </div>
                  <div class="col-md-3">
                    <label for="f_date_of_birth" class="form-label">Date of Birth</label>
                    <input type="date" class="form-control" name="f_date_of_birth" value="<?php echo $f_date_of_birth; ?>"readonly>
                  </div>
                  <div class="col-md-3">
                    <label for="f_contact_number" class="form-label">Contact Number</label>
                    <input type="text" class="form-control" name="f_contact_number" value="<?php echo $f_contact_number; ?>" readonly>
                  </div>

                  <p>B. Mother's Information</p>
                  <div class="col-md-3">
                    <label for="mother_name" class="form-label">Name</label>
                    <input type="text" class="form-control" name="mother_name" value="<?php echo $mother_name; ?>" readonly>
                  </div>
                  <div class="col-md-3">
                    <label for="m_occupation" class="form-label">Occupation</label>
                    <input type="text" class="form-control" name="m_occupation" value="<?php echo $m_occupation; ?>" readonly>
                  </div>
                  <div class="col-md-3">
                    <label for="m_date_of_birth" class="form-label">Date of Birth</label>
                    <input type="date" class="form-control" name="m_date_of_birth" value="<?php echo $m_date_of_birth; ?>" readonly>
                  </div>
                  <div class="col-md-3">
                    <label for="m_contact_number" class="form-label">Contact Number</label>
                    <input type="text" class="form-control" name="m_contact_number" value="<?php echo $m_contact_number; ?>" readonly>
                  </div>

                  <p>B. Spouse Information</p>
                  <div class="col-md-3">
                    <label for="spouse_name" class="form-label">Name</label>
                    <input type="text" class="form-control" name="spouse_name" value="<?php echo $spouse_name; ?>" readonly>
                  </div>
                  <div class="col-md-3">
                    <label for="spouse_occupation" class="form-label">Occupation</label>
                    <input type="text" class="form-control" name="spouse_occupation" value="<?php echo $spouse_occupation; ?>" readonly>
                  </div>
                  <div class="col-md-3">
                    <label for="spouse_date_of_birth" class="form-label">Date of Birth</label>
                    <input type="date" class="form-control" name="spouse_date_of_birth" value="<?php echo $spouse_date_of_birth; ?>" readonly>
                  </div>
                  <div class="col-md-3">
                    <label for="spouse_contact_number" class="form-label">Contact Number</label>
                    <input type="text" class="form-control" name="spouse_contact_number" value="<?php echo $spouse_contact_number; ?>" readonly>
                  </div>

            <strong>In Case of Emergency</strong>
            <p>Person To Contact</p>
            <br>
            <div class="col-md-3">
               <label for="contact_name" class="form-label">Name</label>
               <input type="text"  class="form-control" id="contact_name" name="contact_name" value="<?php echo $contact_name; ?>"readonly>
            </div>
            <div class="col-md-3">
               <label for="contact_add" class="form-label">Address</label>
               <input type="text"  class="form-control" id="contact_add" name="contact_add" value="<?php echo $contact_add; ?>"readonly>
            </div>
            <div class="col-md-3">
               <label for="contact_number" class="form-label">Contact Number</label>
               <input type="number" class="form-control" id="contact_number" name="contact_number" value="<?php echo $contact_number; ?>"readonly>
            </div>
            <div class="col-md-3">
               <label for="contact_relationship" class="form-label">Relationship</label>
               <input type="text" class="form-control" id="contact_relationship" name="contact_relationship" value="<?php echo $contact_relationship; ?>" readonly>
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
        <input type="text" class="form-control" id="dependents_name" name="dependents_name" value="<?php echo $dependents_name;?>"readonly>
    </div>

    <div class="col-md-3">
        <label for="dependents_age" class="form-label">Age</label>
        <input type="text" class="form-control" id="dependents_age" name="dependents_age" value="<?php echo $dependents_age;?>"readonly>
    </div>

    <div class="col-md-3">
        <label for="dependents_relationship" class="form-label">Relationship</label>
        <input type="text" class="form-control" id="dependents_relationship" name="dependents_relationship" value="<?php echo $dependents_relationship; ?>"readonly>
    </div>
</div>

<div class="row g-3">
    <div class="col-md-3">
        <strong>2.</strong>
        <label for="dependentsb_name" class="form-label">Name</label>
        <input type="text" class="form-control" id="dependentsb_name" name="dependentsb_name" value="<?php echo $dependentsb_name;?>" readonly>
    </div>

    <div class="col-md-3">
        <label for="dependentsb_age" class="form-label">Age</label>
        <input type="text" class="form-control" id="dependentsb_age" name="dependentsb_age" value="<?php echo $dependentsb_age;?>" readonly>
    </div>

    <div class="col-md-3">
        <label for="dependentsb_relationship" class="form-label">Relationship</label>
        <input type="text" class="form-control" id="dependentsb_relationship" name="dependentsb_relationship" value="<?php echo $dependentsb_relationship; ?>" readonly>
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

            <div class="col-md-3">
          <label for="weight" class="form-label">Weight</label>
            <input type="text" class="form-control" id="weight" name="weight" value="<?php echo $weight;?>" readonly>
          </div>

          <div class="col-md-3">
          <label for="height" class="form-label">Height</label>
            <input type="text" class="form-control" id="height" name="height" value="<?php echo $height;?>" readonly>
          </div>
                <div class="col-md-3">
                    <label for="blood_type" class="form-label">What is your blood type?</label>
                    <input type="text" class="form-control" id="blood_type" name="blood_type" value="<?php echo $blood_type; ?>" readonly>
                </div>

                <div class="col-md-3">
                    <label for="xray_date" class="form-label">When was your last chest x-ray?</label>
                    <input type="date" class="form-control" id="xray_date" name="xray_date" value="<?php echo $xray_date;?>" readonly>
                </div>

                <div class="col-md-12 ">
                    <label for="xray_result" class="form-label">What was the result?</label>
                    <input type="text" class="form-control" id="xray_result" name="xray_result" value="<?php echo $xray_result;?>"readonly>
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
                  <div class="col-md-3">
                    <label for="hs_school" class="form-label">Name of School</label>
                    <input type="text" class="form-control" id="hs_school" name="hs_school"  value="<?php echo $hs_school;?>"readonly>
                </div>
                <div class="col-md-3">
                    <label for="hs_attainment" class="form-label">Highest Attainment</label>
                    <input type="text" class="form-control" id="hs_attainment" name="hs_attainment"  value="<?php echo $hs_attainment;?>"readonly>
                </div>

                <div class="col-md-3">
                <label for="hs_started" class="form-label">Year Started</label>
                    <input type="number" class="form-control" id="hs_started" name="hs_started"  value="<?php echo $hs_started;?>"readonly>
                </div>
                <div class="col-md-3">
                    <label for="hs_ended" class="form-label">Year Ended</label>
                        <input type="number" class="form-control" id="hs_ended" name="hs_ended"  value="<?php echo $hs_ended;?>"readonly>
                    </div>

                    <strong>Vocational School</strong>
                    <div class="col-md-3">
                    <label for="v_school" class="form-label">Name of School</label>
                    <input type="text" class="form-control" id="v_school" name="v_school" value="<?php echo $v_school;?>"readonly>
                </div>
                    <div class="col-md-3">
                    <label for="v_course" class="form-label">Course</label>
                    <input type="text" class="form-control" id="v_course" name="v_course" value="<?php echo $v_course;?>"readonly>
                </div>
                <div class="col-md-3">
                    <label for="v_attainment" class="form-label">Highest Attainment</label>
                    <input type="text" class="form-control" id="v_attainment" name="v_attainment" value="<?php echo $v_attainment;?>"readonly>
                </div>
                <div class="col-md-3">
                    <label for="v_started" class="form-label">Year Started</label>
                        <input type="number" class="form-control" id="v_started" name="v_started" value="<?php echo $v_started;?>"readonly>
                    </div>
                    <div class="col-md-3">
                        <label for="v_ended" class="form-label">Year Ended</label>
                            <input type="number" class="form-control" id="v_ended" name="v_ended" value="<?php echo $v_ended;?>"readonly>
                    </div>
                    <strong>College</strong>
                  <div class="col-md-3">
                    <label for="college_school" class="form-label">Name of School</label>
                    <input type="text" class="form-control" id="college_school" name="college_school" value="<?php echo $college_school;?>"readonly>
                </div>
                <div class="col-md-3">
                    <label for="college_course" class="form-label">Course</label>
                    <input type="text" class="form-control" id="college_course" name="college_course" value="<?php echo $college_course;?>"readonly>
                </div>
                <div class="col-md-3">
                    <label for="college_attainment" class="form-label">Highest Attainment</label>
                    <input type="text" class="form-control" id="college_attainment" name="college_attainment" value="<?php echo $college_attainment;?>"readonly>
                </div>

                <div class="col-md-3">
                <label for="college_started" class="form-label">Year Started</label>
                    <input type="number" class="form-control" id="college_started" name="college_started" value="<?php echo $college_started;?>"readonly>
                </div>
                <div class="col-md-3">
                    <label for="college_ended" class="form-label">Year Ended</label>
                        <input type="number" class="form-control" id="college_ended" name="college_ended" value="<?php echo $college_ended;?>"readonly>
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
    <div class="col-md-3">
        <strong>1.</strong>
        <label for="research_name" class="form-label">Research Title</label>
        <input type="text" class="form-control" id="research_name" name="research_name" value="<?php echo $research_name;?>"readonly>
    </div>

    <div class="col-md-3">
        <label for="research_date" class="form-label">Date Published</label>
        <input type="date" class="form-control" id="research_date" name="research_date" value="<?php echo $research_date;?>"readonly>
    </div>
</div>

<div class="row g-3">
    <div class="col-md-3">
        <strong>2.</strong>
        <label for="research_nametwo" class="form-label">Research Title</label>
        <input type="text" class="form-control" id="research_nametwo" name="research_nametwo" value="<?php echo $research_nametwo;?>"readonly>
    </div>

    <div class="col-md-3">
        <label for="research_datetwo" class="form-label">Date Published</label>
        <input type="date" class="form-control" id="research_datetwo" name="research_datetwo" value="<?php echo $research_datetwo;?>"readonly>
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
    <div class="col-md-3">
        <strong>1.</strong>
        <label for="seminar_name" class="form-label">Title of Seminar/Training</label>
        <input type="text" class="form-control" id="seminar_name" name="seminar_name" value="<?php echo $seminar_name;?>"readonly>
    </div>

    <div class="col-md-3">
        <label for="seminar_role" class="form-label">Role</label>
        <input type="text" class="form-control" id="seminar_role" name="seminar_role" value="<?php echo $seminar_role;?>"readonly>
    </div>

    <div class="col-md-3">
        <label for="seminar_sponsor" class="form-label">Sponsor</label>
        <input type="text" class="form-control" id="seminar_sponsor" name="seminar_sponsor" value="<?php echo $seminar_sponsor;?>"readonly>
    </div>

    <div class="col-md-3">
        <label for="seminar_date" class="form-label">Date</label>
        <input type="date" class="form-control" id="seminar_date" name="seminar_date" value="<?php echo $seminar_date;?>"readonly>
    </div>
</div>

<div class="row g-3">
    <div class="col-md-3">
        <strong>2.</strong>
        <label for="seminar_nametwo" class="form-label">Title of Seminar/Training</label>
        <input type="text" class="form-control" id="seminar_nametwo" name="seminar_nametwo" value="<?php echo $seminar_nametwo;?>"readonly>
    </div>

    <div class="col-md-3">
        <label for="seminar_roletwo" class="form-label">Role</label>
        <input type="text" class="form-control" id="seminar_roletwo" name="seminar_roletwo" value="<?php echo $seminar_roletwo;?>"readonly>
    </div>

    <div class="col-md-3">
        <label for="seminar_sponsortwo" class="form-label">Sponsor</label>
        <input type="text" class="form-control" id="seminar_sponsortwo" name="seminar_sponsortwo" value="<?php echo $seminar_sponsortwo;?>"readonly>
    </div>

    <div class="col-md-3">
        <label for="seminar_datetwo" class="form-label">Date</label>
        <input type="date" class="form-control" id="seminar_datetwo" name="seminar_datetwo" value="<?php echo $seminar_datetwo;?>"readonly>
    </div>
</div>
</div>
</div>
</div>


    <input type="hidden" name="id" value="<?php echo $id; ?>">
  </form>
</div>

<div class="text-right mt-3">
  <a href="updatemyprofile.php?id=<?php echo $id?>" class="btn btn-primary">Update</a>
  <a class="btn btn-danger" href="employeehomepage.php?id=<?php echo $id?>">Cancel</a>
</div>
</body>
</html>

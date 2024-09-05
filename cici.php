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
    <title>Employee Information</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <style>
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
    <?php include 'anavbar.html'; ?>
    
    <div class="container mt-3">
        <div class="accordion accordion-flush" id="personalInfoAccordion">
            <div class="accordion-item">
                <h2 class="accordion-header" id="personalInfoAccordion">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#personalInfoCollapse" aria-expanded="false" aria-controls="personalInfoCollapse">
                        <strong>Personal Information</strong>
                    </button>
                </h2>
            
                <div id="personalInfoCollapse" class="collapse show" aria-labelledby="personalInfoHeading" data-parent="#personalInfoAccordion">
                    <div class="card-body">
                        <?php
                            // Display employee information if available
                            if(isset($employee)) {
                        ?>
                    
                        <h6><strong>A. Personal Information</strong></h6>
                            <div class="container">
                                <div class="form-row">
                                <div class="form-group col-md-3">
                                    <label for="employee_id">Employee ID</label>
                                    <input type="text" class="form-control" id="employee_id" name="employee_id" value="<?php echo $employee['employee_id']; ?>" readonly> 
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

                                    <div class="form-group col-md-3">
                                        <label for="phone_number" class="form-label">Phone Number</label>
                                        <input type="text" class="form-control" id="phone_number" name="phone_number" placeholder="+63" maxLength="10" value="<?php echo $phone_number;?>" readonly>
                                    </div>
                                </div>
                                <br>

                                <h6><strong>B. Present Address</strong></h6>
                        
                                <div class="form-row">
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
                                    </div>
                                    <br>
                                </div>

                                <h6><strong>C. Permanent Address</strong></h6>
                                <div class="form-row">
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
                                </div>
                                <br>

                                <h6><strong>D. Provincial Address</strong></h6>
                                <div class="form-row">
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
                                </div>
                                <br>

                                <div class="col-md-3">
                                    <label for="place_of_birth" class="form-label">Place of Birth</label>
                                    <input type="text"  class="form-control" id="place_of_birth" name="place_of_birth" value="<?php echo $place_of_birth;?>" readonly>
                                </div>

                                <h6><strong>E. Government Identification Number</strong></h6>
                                <div class="form-row">
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
            </div>
        </div>
    </div>

    <div class="container mt-3">
        <div class="accordion accordion-flush" id="familyBackgroundAccordion">
            <div class="accordion-item">
                <h2 class="accordion-header" id="familyBackgroundAccordion">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#familyBackgroundCollapse" aria-expanded="false" aria-controls="familyBackgroundCollapse">
                        <strong>Family Background</strong>
                    </button>
                </h2>
                        
                <div id="familyBackgroundCollapse" class="collapse" aria-labelledby="familyBackgroundHeading" data-parent="#familyBackgroundAccordion">
                    <div class="card-body">
                        <h6><strong>A. Father's Information</strong></h6>
                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <label for="father_name" class="form-label">Name</label>
                                <input type="text" class="form-control" name="father_name" value="<?php echo $father_name; ?>" readonly>
                            </div>

                            <div class="form-group col-md-3">
                                <label for="f_occupation" class="form-label">Occupation</label>
                                <input type="text" class="form-control" name="f_occupation" value="<?php echo $f_occupation; ?>" readonly>
                            </div>

                            <div class="form-group col-md-3">
                                <label for="f_date_of_birth" class="form-label">Date of Birth</label>
                                <input type="date" class="form-control" name="f_date_of_birth" value="<?php echo $f_date_of_birth; ?>"readonly>
                            </div>

                            <div class="form-group col-md-3">
                                <label for="f_contact_number" class="form-label">Contact Number</label>
                                <input type="text" class="form-control" name="f_contact_number" value="<?php echo $f_contact_number; ?>" readonly>
                            </div>
                        </div>
                        <br>
                                    
                        <h6><strong>B. Mother's Information</strong></h6>
                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <label for="mother_name" class="form-label">Name</label>
                                <input type="text" class="form-control" name="mother_name" value="<?php echo $mother_name; ?>" readonly>
                            </div>

                            <div class="form-group col-md-3">
                                <label for="m_occupation" class="form-label">Occupation</label>
                                <input type="text" class="form-control" name="m_occupation" value="<?php echo $m_occupation; ?>" readonly>
                            </div>

                            <div class="form-group col-md-3">
                                <label for="m_date_of_birth" class="form-label">Date of Birth</label>
                                <input type="date" class="form-control" name="m_date_of_birth" value="<?php echo $m_date_of_birth; ?>" readonly>
                            </div>

                            <div class="form-group col-md-3">
                                <label for="m_contact_number" class="form-label">Contact Number</label>
                                <input type="text" class="form-control" name="m_contact_number" value="<?php echo $m_contact_number; ?>" readonly>
                            </div>
                        </div>
                        <br>

                        <h6><strong>C. Spouse Information</strong></h6>
                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <label for="spouse_name" class="form-label">Name</label>
                                <input type="text" class="form-control" name="spouse_name" value="<?php echo $spouse_name; ?>" readonly>
                            </div>

                            <div class="form-group col-md-3">
                                <label for="spouse_occupation" class="form-label">Occupation</label>
                                <input type="text" class="form-control" name="spouse_occupation" value="<?php echo $spouse_occupation; ?>" readonly>
                            </div>

                            <div class="form-group col-md-3">
                                <label for="spouse_date_of_birth" class="form-label">Date of Birth</label>
                                <input type="date" class="form-control" name="spouse_date_of_birth" value="<?php echo $spouse_date_of_birth; ?>" readonly>
                            </div>

                            <div class="form-group col-md-3">
                                <label for="spouse_contact_number" class="form-label">Contact Number</label>
                                <input type="text" class="form-control" name="spouse_contact_number" value="<?php echo $spouse_contact_number; ?>" readonly>
                            </div>
                        </div>
                        <br>

                        <h6><strong>D. In Case of Emergency</strong></h6>
                        <h6>Person to Contact</h6>
                        <div class="form-row">
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
        </div>
    </div>

    <div class="container mt-3">
        <div class="accordion accordion-flush" id="dependentsAccordion">
            <div class="accordion-item">
                <h2 class="accordion-header" id="dependentsAccordion">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#dependentsCollapse" aria-expanded="false" aria-controls="dependentsCollapse">
                        <strong>Dependents</strong>
                    </button>
                </h2>

                <div id="dependentsCollapse" class="collapse" aria-labelledby="dependentsHeading" data-parent="#dependentsAccordion">
                    <div class="card-body">
                        <h6>1.</h6>
                        <div class="form-row">
                            <div class="col-md-3">
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

                         <h6>2.</h6>
                        <div class="form-row">
                            <div class="col-md-3">
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
        </div>
    </div>

    <div class="container mt-3">
        <div class="accordion accordion-flush" id="healthDetailsAccordion">
            <div class="accordion-item">
                <h2 class="accordion-header" id="healthDetailsAccordion">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#healthDetailsCollapse" aria-expanded="false" aria-controls="healthDetailsCollapse">
                        <strong>Health Details</strong>
                    </button>
                </h2>

                <div id="healthDetailsCollapse" class="collapse" aria-labelledby="healthDetailsHeading" data-parent="#healthDetailsAccordion">
                    <div class="card-body">
                        <div class="form-row">
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

                            <div class="col-md-3">
                                <label for="xray_result" class="form-label">What was the result?</label>
                                <input type="text" class="form-control" id="xray_result" name="xray_result" value="<?php echo $xray_result;?>"readonly>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-3">
        <div class="accordion accordion-flush" id="educationalBackgroundAccordion">
            <div class="accordion-item">
                <h2 class="accordion-header" id="educationalBackgroundAccordion">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#educationalBackgroundCollapse" aria-expanded="false" aria-controls="educationalBackgroundCollapse">
                        <strong>Educational Background</strong>
                    </button>
                </h2>

                <div id="educationalBackgroundCollapse" class="collapse" aria-labelledby="educationalBackgroundHeading" data-parent="#educationalBackgroundAccordion">
                    <div class="card-body">
                        <h6><strong>A. High School</strong></h6>
                        <div class="form-row">
                            <div class="col-md-3">
                                <label for="hs_school" class="form-label">Name of School</label>
                                <input type="text" class="form-control" id="hs_school" name="hs_school"  value="<?php echo $hs_school;?>"readonly>
                            </div>

                            <div class="col-md-3">
                                <label for="hs_attainment" class="form-label">Highest Attainment</label>
                                <input type="text" class="form-control" id="hs_attainment" name="hs_attainment"  value="<?php echo $hs_attainment;?>"readonly>
                            </div>

                            <div class="col-md-2">
                                <label for="hs_started" class="form-label">Year Started</label>
                                <input type="number" class="form-control" id="hs_started" name="hs_started"  value="<?php echo $hs_started;?>"readonly>
                            </div>

                            <div class="col-md-2">
                                <label for="hs_ended" class="form-label">Year Ended</label>
                                <input type="number" class="form-control" id="hs_ended" name="hs_ended"  value="<?php echo $hs_ended;?>"readonly>
                            </div>
                        </div>
                        <br>

                        <h6><strong>B. Vocational School</strong></h6>
                        <div class="form-row">
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

                            <div class="col-md-2">
                                <label for="v_started" class="form-label">Year Started</label>
                                <input type="number" class="form-control" id="v_started" name="v_started" value="<?php echo $v_started;?>"readonly>
                            </div>

                            <div class="col-md-2">
                                <label for="v_ended" class="form-label">Year Ended</label>
                                <input type="number" class="form-control" id="v_ended" name="v_ended" value="<?php echo $v_ended;?>"readonly>
                            </div>
                        </div>
                        <br>

                        <h6><strong>C. College</strong></h6>
                        <div class="form-row">
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

                            <div class="col-md-2">
                                <label for="college_started" class="form-label">Year Started</label>
                                <input type="number" class="form-control" id="college_started" name="college_started" value="<?php echo $college_started;?>"readonly>
                            </div>
                
                            <div class="col-md-2">
                                <label for="college_ended" class="form-label">Year Ended</label>
                                <input type="number" class="form-control" id="college_ended" name="college_ended" value="<?php echo $college_ended;?>"readonly>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-3">
        <div class="accordion accordion-flush" id="researchPublicationAccordion">
            <div class="accordion-item">
                <h2 class="accordion-header" id="researchPublicationAccordion">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#researchPublicationCollapse" aria-expanded="false" aria-controls="researchPublicationCollapse">
                        <strong>Research & Publication</strong>
                    </button>
                </h2>
            
                <div id="researchPublicationCollapse" class="collapse" aria-labelledby="researchPublicationHeading" data-parent="#researchPublicationAccordion">
                    <div class="card-body">
                        <form>
                            <h6><strong>A. Research 1</strong></h6>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="research_name" class="form-label">Research Title</label>
                                    <input type="text" class="form-control" id="research_name" name="research_name" value="<?php echo $research_name;?>"readonly>
                                </div>
                                <div class="col-md-6">
                                    <label for="research_date" class="form-label">Date Published</label>
                                    <input type="date" class="form-control" id="research_date" name="research_date" value="<?php echo $research_date;?>"readonly>
                                </div>
                            </div>
                            <br>

                            <h6><strong>B. Research 2</strong></h6>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="research_nametwo" class="form-label">Research Title</label>
                                    <input type="text" class="form-control" id="research_nametwo" name="research_nametwo" value="<?php echo $research_nametwo;?>"readonly>
                                </div>
                                <div class="col-md-6">
                                    <label for="research_datetwo" class="form-label">Date Published</label>
                                    <input type="date" class="form-control" id="research_datetwo" name="research_datetwo" value="<?php echo $research_datetwo;?>"readonly>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-3">
        <div class="accordion accordion-flush" id="seminarsTrainingsAccordion">
            <div class="accordion-item">
                <h2 class="accordion-header" id="seminarsTrainingsAccordion">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#seminarsTrainingsCollapse" aria-expanded="false" aria-controls="seminarsTrainingsCollapse">
                        <strong>Seminar/Trainings</strong>
                    </button>
                </h2>

                <div id="seminarsTrainingsCollapse" class="collapse" aria-labelledby="seminarsTrainingsHeading" data-parent="#seminarsTrainingsAccordion">
                    <div class="card-body">
                        <h6><strong>A. Seminar/Training</strong></h6>
                        <form>
                            <div class="row">
                                <div class="col-sm-6">
                                    <label for="seminar_name" class="form-label">Title of Seminar/Training</label>
                                    <input type="text" class="form-control" id="seminar_name" name="seminar_name" value="<?php echo $seminar_name;?>"readonly>
                                </div>
                                <div class="col-sm-6">
                                    <label for="seminar_role" class="form-label">Role</label>
                                    <input type="text" class="form-control" id="seminar_role" name="seminar_role" value="<?php echo $seminar_role;?>"readonly>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-6">
                                    <label for="seminar_sponsor" class="form-label">Sponsor</label>
                                    <input type="text" class="form-control" id="seminar_sponsor" name="seminar_sponsor" value="<?php echo $seminar_sponsor;?>"readonly>
                                </div>
                                <div class="col-sm-6">
                                    <label for="seminar_date" class="form-label">Date</label>
                                    <input type="date" class="form-control" id="seminar_date" name="seminar_date" value="<?php echo $seminar_date;?>"readonly>
                                </div>
                            </div>
                        </form>
                        <br>

                        <form>
                            <h6><strong>B. Seminar/Training</strong></h6>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="seminar_nametwo" class="form-label">Title of Seminar/Training</label>
                                    <input type="text" class="form-control" id="seminar_nametwo" name="seminar_nametwo" value="<?php echo $seminar_nametwo;?>"readonly>
                                </div>
                                <div class="col-md-6">
                                    <label for="seminar_roletwo" class="form-label">Role</label>
                                    <input type="text" class="form-control" id="seminar_roletwo" name="seminar_roletwo" value="<?php echo $seminar_roletwo;?>"readonly>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="seminar_sponsortwo" class="form-label">Sponsor</label>
                                    <input type="text" class="form-control" id="seminar_sponsortwo" name="seminar_sponsortwo" value="<?php echo $seminar_sponsortwo;?>"readonly>
                                </div>
                                <div class="col-md-6">
                                    <label for="seminar_datetwo" class="form-label">Date</label>
                                    <input type="date" class="form-control" id="seminar_datetwo" name="seminar_datetwo" value="<?php echo $seminar_datetwo;?>"readonly>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-3">
        <!-- Add more form fields for other employee details here -->
        <div class="d-flex justify-content-end">
            <div class="col-auto">
                <button type="button" class="btn btn-primary" onclick="location.href='admin_update.php?id=<?php echo $employee_id; ?>'">Update Info</button>
                <a class="btn btn-danger" href="admin_homepage.php">Cancel</a> <!-- Add this line -->
            </div>
        </div>
        <?php
            } else {
            echo "<p>Employee data not found.</p>";
            }
        ?>
    </div>
</body>
</html>
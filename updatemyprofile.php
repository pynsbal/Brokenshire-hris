<?php
require_once('process/dbh.php');

if(isset($_POST['update'])) {
  $id = mysqli_real_escape_string($conn, $_POST['id']);

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
  $research_name = mysqli_real_escape_string($conn, $_POST['research_name']);
  $research_date = mysqli_real_escape_string($conn, $_POST['research_date']);
  $seminar_name = mysqli_real_escape_string($conn, $_POST['seminar_name']);
  $seminar_date = mysqli_real_escape_string($conn, $_POST['seminar_date']);
  $seminar_role = mysqli_real_escape_string($conn, $_POST['seminar_role']);
  $seminar_sponsor = mysqli_real_escape_string($conn, $_POST['seminar_sponsor']);
  $research_nametwo = mysqli_real_escape_string($conn, $_POST['research_nametwo']);
  $research_datetwo = mysqli_real_escape_string($conn, $_POST['research_datetwo']);
  $seminar_nametwo = mysqli_real_escape_string($conn, $_POST['seminar_nametwo']);
  $seminar_datetwo = mysqli_real_escape_string($conn, $_POST['seminar_datetwo']);
  $seminar_roletwo = mysqli_real_escape_string($conn, $_POST['seminar_roletwo']);
  $seminar_sponsortwo = mysqli_real_escape_string($conn, $_POST['seminar_sponsortwo']);

  $sql = "UPDATE employee SET 
          `contact_name`='$contact_name',
          `contact_add`='$contact_add',
          `contact_number`='$contact_number',
          `contact_relationship`='$contact_relationship',
          `dependents_name`='$dependents_name',
          `dependents_age`='$dependents_age',
          `dependents_relationship`='$dependents_relationship',
          `dependentsb_name`='$dependentsb_name',
          `dependentsb_age`='$dependentsb_age',
          `dependentsb_relationship`='$dependentsb_relationship',
          `research_name`='$research_name',
          `research_date`='$research_date',
          `research_nametwo`='$research_nametwo',
          `research_datetwo`='$research_datetwo',
          `seminar_name`='$seminar_name',
          `seminar_date`='$seminar_date',
          `seminar_nametwo`='$seminar_nametwo',
          `seminar_datetwo`='$seminar_datetwo',
          `seminar_role`='$seminar_role',
          `seminar_sponsor`='$seminar_sponsor',
          `seminar_roletwo`='$seminar_roletwo',
          `seminar_sponsortwo`='$seminar_sponsortwo'
          WHERE id=$id";

  $result = mysqli_query($conn, $sql);

  if($result) {
    echo "<script>
            alert('Successfully Updated');
            window.location.href='viewmyprofile.php?id=$id';
          </script>";
  } else {
    echo "Error: " . mysqli_error($conn);
  }
}

$id = (isset($_GET['id']) ? $_GET['id'] : '');
$sql = "SELECT * FROM employee WHERE id= '$id'";
$result = mysqli_query($conn, $sql);
if($result){
  while($res = mysqli_fetch_assoc($result)){
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
    $research_name = $res['research_name'];
    $research_date = $res['research_date'];
    $seminar_name = $res['seminar_name'];
    $seminar_date = $res['seminar_date'];
    $seminar_role = $res['seminar_role'];
    $seminar_sponsor = $res['seminar_sponsor'];
    $research_nametwo = $res['research_nametwo'];
    $research_datetwo = $res['research_datetwo'];
    $seminar_nametwo = $res['seminar_nametwo'];
    $seminar_datetwo = $res['seminar_datetwo'];
    $seminar_roletwo = $res['seminar_roletwo'];
    $seminar_sponsortwo = $res['seminar_sponsortwo'];
  }
}
?>


<!DOCTYPE html>
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
    .required::after { content: " *"; color: red; }
  </style>
</head>
<body>
  <?php include 'navbar-user.html'; ?>
  <br>
  <h2>UPDATE EMERGENCY CONTACT AND CREDENTIALS</h2>
  <div class="container custom-container">
   <div class="card custom-card">
      <div class="card-body">
        <form class="row g-3" method="POST" action="updatemyprofile.php?id=<?php echo $id?>">


            <strong>In Case of Emergency</strong>
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
               <input type="text" class="form-control" id="contact_number" name="contact_number" minimumLength="10" maxLength="10" value="<?php echo $contact_number; ?>"required>
            </div>
            <div class="col-md-3">
               <label for="contact_relationship" class="form-label required">Relationship</label>
               <select class="form-control" id="contact_relationship" name="contact_relationship" value="<?php echo $contact_relationship; ?>"required>
                  <option selected>Select Relationship</option>
                  <option value="Spouse" <?php if($contact_relationship == "Spouse") echo "selected"; ?>>Spouse</option>
                  <option value="Parent" <?php if($contact_relationship == "Parent") echo "selected"; ?>>Parent</option>
                  <option value="Sibling" <?php if($contact_relationship == "Sibling") echo "selected"; ?>>Sibling</option>
                  <option value="Partner" <?php if($contact_relationship == "Partner") echo "selected"; ?>>Partner</option>
                  <option value="Friend" <?php if($contact_relationship == "Friend") echo "selected"; ?>>Friend</option>
                  <option value="Colleague" <?php if($contact_relationship == "Colleague") echo "selected"; ?>>Colleague</option>
                  <option value="Other" <?php if($contact_relationship == "Other") echo "selected"; ?>>Other</option>
               </select>
            </div>

            
            <strong>Dependents</strong>

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
        <select class="form-control" id="dependents_relationship" name="dependents_relationship">
            <option selected>Select Relationship</option>
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
        <input type="text" class="form-control" id="dependentsb_name" name="dependentsb_name" value="<?php echo $dependentsb_name;?>">
    </div>

    <div class="col-md-3">
        <label for="dependentsb_age" class="form-label">Age</label>
        <input type="text" class="form-control" id="dependentsb_age" name="dependentsb_age" value="<?php echo $dependentsb_age;?>">
    </div>

    <div class="col-md-3">
        <label for="dependentsb_relationship" class="form-label">Relationship</label>
        <select class="form-control" id="dependentsb_relationship" name="dependentsb_relationship">
            <option selected>Select Relationship</option>
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

<strong>RESEARCH & PUBLICATION</strong>

<div class="row g-3">
    <div class="col-md-3">
        <strong>1.</strong>
        <label for="research_name" class="form-label">Research Title</label>
        <input type="text" class="form-control" id="research_name" name="research_name" value="<?php echo $research_name;?>" >
    </div>

    <div class="col-md-3">
        <label for="research_date" class="form-label">Date Published</label>
        <input type="date" class="form-control" id="research_date" name="research_date" value="<?php echo $research_date;?>" >
    </div>
</div>

<div class="row g-3">
    <div class="col-md-3">
        <strong>2.</strong>
        <label for="research_nametwo" class="form-label">Research Title</label>
        <input type="text" class="form-control" id="research_nametwo" name="research_nametwo" value="<?php echo $research_nametwo;?>" >
    </div>

    <div class="col-md-3">
        <label for="research_datetwo" class="form-label">Date Published</label>
        <input type="date" class="form-control" id="research_datetwo" name="research_datetwo" value="<?php echo $research_datetwo;?>" >
    </div>
</div>

<strong>SEMINARS/TRAININGS</strong>

<div class="row g-3">
    <div class="col-md-3">
        <strong>1.</strong>
        <label for="seminar_name" class="form-label">Title of Seminar/Training</label>
        <input type="text" class="form-control" id="seminar_name" name="seminar_name" value="<?php echo $seminar_name;?>" >
    </div>

    <div class="col-md-3">
        <label for="seminar_role" class="form-label">Role</label>
        <input type="text" class="form-control" id="seminar_role" name="seminar_role" value="<?php echo $seminar_role;?>" >
    </div>

    <div class="col-md-3">
        <label for="seminar_sponsor" class="form-label">Sponsor</label>
        <input type="text" class="form-control" id="seminar_sponsor" name="seminar_sponsor" value="<?php echo $seminar_sponsor;?>" >
    </div>

    <div class="col-md-3">
        <label for="seminar_date" class="form-label">Date</label>
        <input type="date" class="form-control" id="seminar_date" name="seminar_date" value="<?php echo $seminar_date;?>" >
    </div>
</div>

<div class="row g-3">
    <div class="col-md-3">
        <strong>2.</strong>
        <label for="seminar_nametwo" class="form-label">Title of Seminar/Training</label>
        <input type="text" class="form-control" id="seminar_nametwo" name="seminar_nametwo" value="<?php echo $seminar_nametwo;?>" >
    </div>

    <div class="col-md-3">
        <label for="seminar_roletwo" class="form-label">Role</label>
        <input type="text" class="form-control" id="seminar_roletwo" name="seminar_roletwo" value="<?php echo $seminar_roletwo;?>" >
    </div>

    <div class="col-md-3">
        <label for="seminar_sponsortwo" class="form-label">Sponsor</label>
        <input type="text" class="form-control" id="seminar_sponsortwo" name="seminar_sponsortwo" value="<?php echo $seminar_sponsortwo;?>" >
    </div>

    <div class="col-md-3">
        <label for="seminar_datetwo" class="form-label">Date</label>
        <input type="date" class="form-control" id="seminar_datetwo" name="seminar_datetwo" value="<?php echo $seminar_datetwo;?>" >
    </div>
</div>
          <input type="hidden" name="id" value="<?php echo $id; ?>">

          <div class="col-12 text-right">
  <button type="submit" class="btn btn-primary" name="update">Save</button>
  <a class="btn btn-danger" href="employeehomepage.php?id=<?php echo $id?>">Cancel</a>
</div>
        </form>
        
      </div>
    </div>
  </div>
</div>
</body>
</html>
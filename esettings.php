<?php

require_once ('process/dbh.php');
$sql = "SELECT * FROM `employee` WHERE 1";

//echo "$sql";
$result = mysqli_query($conn, $sql);
if(isset($_POST['update']))
{

  $id = $_POST['id'];
  $old = $_POST['oldpass'];
  $new = $_POST['newpass'];
  
  $result = mysqli_query($conn, "select employee.password from employee WHERE id = $id");
     $employee = mysqli_fetch_assoc($result);
          if($old == $employee['password']){
            $sql = "UPDATE `employee` SET `password`='$new' WHERE id = $id";
            mysqli_query($conn, $sql);
             echo ("<SCRIPT LANGUAGE='JavaScript'>
                  window.alert('Password Updated')
                window.location.href='myprofile.php?id=$id';</SCRIPT>"); 
          
        }

        else{
          echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Failed to Update Password')
    window.location.href='javascript:history.go(-1)';
    </SCRIPT>");
        }

  
}
?>

<!-- <?php
  $id = (isset($_GET['id']) ? $_GET['id'] : '');
  $sql = "SELECT * from `employee` WHERE id=$id";
  $result = mysqli_query($conn, $sql);
  if($result){
  while($res = mysqli_fetch_assoc($result)){
  $old = $res['password'];
  echo "$old";
}
}

?> -->

<!DOCTYPE html>
<html>
<head>
  <title>Change Password</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <style>
    h3 {
      text-align: center;
    }
    body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
    }
    .w3-container {
      max-width: 600px;
      margin: auto;
    }
    .form-group {
      margin-bottom: 15px;
    }
    .form-group label {
      display: inline-block;
      width: 30%; /* Adjust as needed */
    }
    .form-group input[type="text"],
    .form-group input[type="number"],
    .form-group select,
    .form-group input[type="date"] {
      width: 65%; /* Adjust as needed */
      padding: 10px 15px;
      border: 1px solid #ced4da;
      border-radius: 4px;
      box-sizing: border-box;
      transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
    }
    .form-group input[type="text"]:focus,
    .form-group input[type="number"]:focus,
    .form-group select:focus,
    .form-group input[type="date"]:focus {
      border-color: #86b7fe;
      outline: 0;
      box-shadow: 0 0 0 0.25rem rgb(13 110 253 / 25%);
    }
    input[type=submit] {
      width: 100%;
      background-color: #4CAF50;
      color: white;
      padding: 14px 20px;
      margin: 8px 0;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }
    input[type=submit]:hover {
      background-color: #45a049;
    }
    div.w3-panel {
      border-radius: 5px;
      background-color: #f2f2f2;
      padding: 20px;
    }

  </style>
</head>
<body>
<?php include 'navbar-user.html'; ?>
    <!-- form  -->
<div class="w3-container">
  <div class="w3-panel w3-card">


    
    <h3>Reset Password</h3>
    <form id = "registration" action="settings.php" method="POST">

      <div class="form-group">
        <label for="oldpass">Old Password</label>
        <input type="Password" id="oldpass" name="oldpass" required>
      </div>

      <div class="form-group">
        <label for="newpass">New Password</label>
        <input type="Password" id="newpass" name="newpass" required>
      </div>
      
      <input type="hidden" name="id" id="textField" value="<?php echo $id;?>" required="required"><br><br>
                        <div class="p-t-20">
                            <button class="btn btn--radius btn--green" type="submit" name="update">Submit</button>
                        </div>

    </form>
  </div>
</div>
</body>
</html>

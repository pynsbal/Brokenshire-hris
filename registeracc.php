
<?php
require_once('process/dbh.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST['employee_id']) && isset($_POST['first_name']) && isset($_POST['last_name']) && isset($_POST['position']) && isset($_POST['department']) && isset($_POST['date_started']) && isset($_POST['username']) && isset($_POST['password'])) {
        
        $employee_id = $_POST['employee_id'];
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $middle_name = isset($_POST['middle_name']) ? $_POST['middle_name'] : '';
        $position = $_POST['position'];
        $department = $_POST['department'];
        $date_started = $_POST['date_started'];
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Insert the data using prepared statement
        $sql = "INSERT INTO employee (employee_id, first_name, last_name, middle_name, position, department, date_started, username, password) 
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "issssssss", $employee_id, $first_name, $last_name, $middle_name, $position, $department, $date_started, $username, $password);

        if (mysqli_stmt_execute($stmt)) {
            echo "Employee registered successfully.";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

        mysqli_stmt_close($stmt);
    } else {
        echo "All fields are required.";
    }
}
?>

<!doctype html>
<html lang="en">
   <head>
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

   <script>
function generateUsername() {
    var first_name = document.getElementById("first_name").value;
    var last_name = document.getElementById("last_name").value;
    var middle_name = document.getElementById("middle_name").value;
    
    if (first_name && last_name) {
        var username = (first_name.charAt(0) + middle_name.charAt(0) + "." + last_name).toLowerCase();
        document.getElementById("username").value = username;
    } else {
        document.getElementById("username").value = "";
    }
}

function generatePassword() {
    var first_name = document.getElementById("first_name").value;
    var last_name = document.getElementById("last_name").value;
    var middle_name = document.getElementById("middle_name").value;
    
    if (first_name && last_name) {
        var password = (first_name.charAt(0) + middle_name.charAt(0) + "." + last_name).toLowerCase();
        document.getElementById("Password").value = password;
    } else {
        document.getElementById("Password").value = "";
    }
}
</script>

      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Employee Register</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
      <link rel="stylesheet" href="styles.css" />
      <link rel="stylesheet" href="css/test.css">
      <style>
         h2 {
         text-align: center;
         }
         .custom-container {
         margin-top: 50px; /* Adjust as needed */
         }
         .custom-card {
         border-radius: 15px;
         padding: 20px;
         }
         /* Add space between email and above */
         .form-group-email {
         margin-top: 20px; /* Adjust as needed */
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

   <div class="container custom-container">
   <div class="card custom-card">
      <div class="card-body">
         <h2>EMPLOYEE REGISTRATION</h2>
         <form action="process/register.php" method="POST">
            
               <div class="row">
                  <div class="col">
                     <label for="last_name" class="form-label">Lastname</label>
                     <input type="text"  class="form-control" id="last_name" placeholder="Lastname" name="last_name" required>
                  </div>

               <div class="col">
                  <label for="first_name">Firstname</label>
                  <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Firstname" required>
               </div>

               <div class="col">
                  <label for="middle_name">Middle name</label>
                  <input type="text" class="form-control" id="middle_name" placeholder="Middle name" name="middle_name" required>
               </div>
            </div>
            

            
               <div class="row">
                  <div class="col">
                     <label for="employee_id" class="form-label">Employee ID</label>
                     <input type="number"  class="form-control" id="employee_id"  placeholder="Employee ID" name="employee_id" required>
                  </div>
                  <div class="col">
                     <label for="position" class="form-label">Position</label>
                     <select class="form-select" name = "position" required>
                     <option value="" disabled selected>Position</option>                      
                     <option value="Admin">Admin</option>
                     <option value="Faculty">Faculty</option>
                     <option value="Staff">Staff</option>
                     </select>
                  </div>


                  <div class="col">
                     <label for="department" class="form-label">Department</label>
                     <select class="form-select" name = "department" required>
                     <option value="" disabled selected>Department</option>                      
                     <option value="Accounting/CMD">Accounting/CMD</option>
                     <option value="ADMIN/HRMD">ADMIN/HRMD</option>
                     <option value="Alumni">Alumni</option>
                     <option value="ASBM">ASBM</option>
                     <option value="BED">BED</option>
                     <option value="Chaplaincy">Chaplaincy</option>
                     <option value="CED/PRADO">CED/PRADO</option>
                     <option value="CPWC">CPWC</option>
                     <option value="GSD">GSD</option>
                     <option value="HAW">HAW</option>
                     <option value="LRMC">LRMC</option>
                     <option value="GAD/NSTP">GAD/NSTP</option>
                     <option value="Marketing">Marketing</option>
                     <option value="MIS">MIS</option>
                     <option value="Nursing">Nursing</option>
                     <option value="OSA">OSA</option>
                     <option value="RPO">RPO</option>
                     <option value="School of Medicine">School of Medicine</option>
                     <option value="Student Records">Student Records</option>
                     <option value="Allied Health">Allied Health</option>
                     <option value="Security Dept">Security Dept</option>
                     </select>
                  </div>
               </div>
            

            
               <div class="form-row">
                  <div class="col">
                     <label for="date_started" class="form-label">Date Started</label>
                     <input type="date" class="form-control" id="date_started" name="date_started" required>
                  </div>
               
                  <div class="col">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" required name="username" oninput="generateUsername()">
                     </div>
                     
                     <div class="col">
                        <label for="username" class="form-label">Password</label>
                        <input type="password" class="form-control" id="Password" required name="password" oninput="generatePassword()">
                     </div>
                  </div>
            
            
            <div class="row justify-content-end">
               <div class="col-auto">
                  <button class="btn btn-primary" href="admin_homepage.php"type="submit">Register</button>
                     <a class="btn btn-danger" href="admin_homepage.php">Cancel</a> <!-- Add this line -->
               </div>
            </div>
         </form>
      </div>
   </div>
   </div>
   </body>
</html>
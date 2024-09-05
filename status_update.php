<?php
session_start();
require_once('process/dbh.php');

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header('Location: login.php');
    exit;
}

if (isset($_GET['id']) && isset($_GET['status'])) {
    $id = mysqli_real_escape_string($conn, $_GET['id']);
    $status = mysqli_real_escape_string($conn, $_GET['string']);

    $sql = "UPDATE employee SET status = '$status' WHERE employee_id = '$id'";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        header('Location: admin_homepage.php');
        exit;
    } else {
        echo "Failed to update employee status";
    }
} else {
    echo "Invalid request";
}

mysqli_close($conn);
?>
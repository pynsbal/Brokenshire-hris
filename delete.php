<?php
require_once('process/dbh.php');

// Check if the ID parameter is provided in the query string
if (!empty($_GET['id'])) {
    $id = $_GET['id'];

    // Soft delete the employee by updating the 'is_deleted' column to 1
    $softDeleteQuery = "UPDATE employee SET is_deleted = 1 WHERE employee_id = '$id'";
    
    if (mysqli_query($conn, $softDeleteQuery)) {
        echo "<script>alert('Employee soft deleted successfully');</script>";
        echo "<script>window.location.href='admin_homepage.php';</script>";
        exit;
    } else {
        echo "Error soft deleting employee: " . mysqli_error($conn);
    }
} else {
    echo "Invalid request. Employee ID not provided.";
}
?>

<?php
include 'conf.php';

$index_number = $_POST["index_number"];
    $student_name = $_POST["student_name"];
    $enrolled_courses = $_POST["enrolled_courses"];
    $applied_date = $_POST["applied_date"];
    $status = $_POST["status"];

    // SQL query to insert data into the table
    $sql = "INSERT INTO student_info (index_number, student_name, enrolled_courses, applied_date, status) VALUES ('$index_number', '$student_name', '$enrolled_courses', '$applied_date', '$status')";

    if ($con->query($sql) === TRUE) {
        echo "Record inserted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
?>
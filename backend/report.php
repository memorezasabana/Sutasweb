<?php
include "../config/connection.php"; // Include your database connection file
session_start();

// Check if the user is logged in
if(isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];

    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve form data
        $title = $_POST['title'];
        $description = $_POST['description'];
        $latitude = $_POST['latitude'];
        $longitude = $_POST['longitude'];

        // Get type_id based on the selected title
        $query = "SELECT type_id FROM types WHERE name = '$title'";
        $result = mysqli_query($connection, $query);
        $row = mysqli_fetch_assoc($result);
        $type_id = $row['type_id'];

        // File upload
        $image_name = $_FILES['image']['name'];
        $image_tmp = $_FILES['image']['tmp_name'];
        $image_path = '../uploads/' . $image_name;
        move_uploaded_file($image_tmp, $image_path);

        // Insert data into the report table
        $sql = "INSERT INTO reports (user_id, type_id, description, latitude, longitude, status, created_at, updated_at) VALUES ('$user_id', '$type_id', '$description', '$latitude', '$longitude', 'pending', NOW(), NOW())";

        if (mysqli_query($connection, $sql)) {
            // Get the report_id of the inserted report
            $report_id = mysqli_insert_id($connection);

            // Insert the image path into the report_file table
            $file_sql = "INSERT INTO report_files (report_id, img_path) VALUES ('$report_id', '$image_path')";
            if (mysqli_query($connection, $file_sql)) {
                // Redirect to success page if the insertion is successful
                header("Location: ../dashboard/succes-report.php");
                exit;
            } else {
                // Redirect to error page if there's an error with inserting image path
                echo "Error: " . $sql . "<br>" . mysqli_error($connection);
                exit;
            }
        } else {
            // Redirect to error page if there's an error with the insertion into the report table
            echo "Error: " . $sql . "<br>" . mysqli_error($connection);
            exit;
        }
    }
} else {
    // If user is not logged in, redirect to index.php or login page
    header("Location: ../index.php");
    exit;
}
?>

<?php
include "../config/connection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $hashed_password = md5($password); 

    $role = "USER";

    $sql = "INSERT INTO users (name, email, username, password, role) VALUES ('$name', '$email', '$username', '$hashed_password', '$role')";
    if (mysqli_query($connection, $sql)) {
        header("Location: ../auth/success-register.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($connection);
    }
} else {
    header("Location: ../index.php");
    exit();
}
?>

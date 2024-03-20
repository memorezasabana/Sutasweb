<?php
include "../config/connection.php";
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($connection, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);
        if ($user['password'] == md5($password)) {
            $_SESSION['user_id'] = $user['user_id'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['role'] = $user['role'];
            
            header("Location: ../dashboard/user-home.php");
            exit();
        } else {
            echo '<script>alert("Password is incorrect"); window.location.href = "../auth/form-login.php";</script>';
        }
    } else {
        echo '<script>alert("User does not exist"); window.location.href = "../auth/form-login.php";</script>';
    }
}
?>

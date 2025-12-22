<?php
session_start();
include "db.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = hash('sha256', $_POST['password']); // SHA256 for now
    $role = mysqli_real_escape_string($conn, $_POST['role']);

    // Check if email already exists
    $check = mysqli_query($conn, "SELECT * FROM users WHERE email='$email'");
    if (mysqli_num_rows($check) > 0) {
        echo "Email already registered. <a href='signup.php'>Try again</a>";
        exit;
    }

    // Insert new user
    $insert = "INSERT INTO users (name, email, password, role) VALUES ('$name','$email','$password','$role')";
    if (mysqli_query($conn, $insert)) {
        echo "Sign up successful! <a href='login.php'>Login now</a>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

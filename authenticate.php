<?php
session_start();
include "db.php";

$email = $_POST['email'];
$password = hash('sha256', $_POST['password']);

$query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) == 1) {

    $user = mysqli_fetch_assoc($result);

    $_SESSION['user_id'] = $user['id'];
    $_SESSION['role'] = $user['role'];
    $_SESSION['name'] = $user['name'];

    if ($user['role'] == 'admin') {
        header("Location: dashboards/admin.php");
    } elseif ($user['role'] == 'doctor') {
        header("Location: dashboards/doctor.php");
    } else {
        header("Location: dashboards/patient.php");
    }

} else {
    echo "Invalid email or password 😢";
}
?>

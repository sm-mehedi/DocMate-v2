<?php
session_start();

if (!isset($_SESSION['role']) || $_SESSION['role'] != 'doctor') {
    header("Location: ../login.php");
}
?>

<h1>Doctor Dashboard</h1>
<p>Welcome Dr. <?php echo $_SESSION['name']; ?></p>

<a href="../logout.php">Logout</a>

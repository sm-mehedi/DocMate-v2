<?php
session_start();

if (!isset($_SESSION['role']) || $_SESSION['role'] != 'patient') {
    header("Location: ../login.php");
}
?>

<h1>Patient Dashboard</h1>
<p>Welcome <?php echo $_SESSION['name']; ?></p>

<a href="../logout.php">Logout</a>

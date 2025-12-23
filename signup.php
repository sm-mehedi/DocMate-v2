<!DOCTYPE html>
<html>
<head>
    <title>DocMate Sign Up</title>
    <link rel="stylesheet" href="./dashboards/CSS/signup.css">
</head>
<body>

<video class="video-bg" autoplay muted loop>
    <source src="./images/5234724-hd_1920_1080_25fps.mp4" type="video/mp4">
    Your browser does not support HTML5 video.
</video>

<div class="signup-container">
    <img src="./images/ebd9c9f1-6c88-4993-90da-cd1b04d39f7e-removebg-preview.png" alt="DocMate Logo">
    <h2>Sign Up</h2>
    <form action="signup_process.php" method="POST">
        <input type="text" name="name" placeholder="Full Name" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>
        <select name="role" required>
            <option value="">Select Role</option>
            <option value="doctor">Doctor</option>
            <option value="patient">Patient</option>
        </select>
        <button type="submit">Sign Up</button>
    </form>
    <p>Already have an account? <a href="login.php">Login here</a></p>
</div>

</body>
</html>

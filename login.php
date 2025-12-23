<!DOCTYPE html>
<html>
<head>
    <title>DocMate Login</title>
<link rel="stylesheet" href="./dashboards/CSS/login.css">
</head>
<body>

<video class="video-bg" autoplay muted loop>
    <source src="./images/5234724-hd_1920_1080_25fps.mp4" type="video/mp4">
    Your browser does not support HTML5 video.
</video>

<div class="login-container">
    <img src="./images/ebd9c9f1-6c88-4993-90da-cd1b04d39f7e-removebg-preview.png" alt="DocMate Logo">

    <form action="authenticate.php" method="POST">
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Login</button>
    </form>

    <p>Welcome to DocMate portal</p>
    <p>Don't have an account? <a href="signup.php">Sign Up</a></p>
</div>

</body>
</html>

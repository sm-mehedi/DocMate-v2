<!DOCTYPE html>
<html>
<head>
    <title>DocMate Sign Up</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body, html {
            height: 100%;
            width: 100%;
        }

        .video-bg {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: -1;
        }

        .signup-container {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: rgba(255,255,255,0.95);
            padding: 40px 50px;
            border-radius: 12px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.3);
            width: 400px;
            text-align: center;
        }

        .signup-container img {
            width: 150px;
            height: auto;
            margin-bottom: 20px;
        }

        .signup-container h2 {
            margin-bottom: 20px;
            color: #333;
        }

        .signup-container input, .signup-container select {
            width: 100%;
            padding: 12px 15px;
            margin: 10px 0;
            border-radius: 8px;
            border: 1px solid #ccc;
            font-size: 16px;
        }

        .signup-container button {
            width: 100%;
            padding: 12px;
            margin-top: 20px;
            border: none;
            border-radius: 8px;
            background-color: #6c63ff;
            color: #fff;
            font-size: 18px;
            cursor: pointer;
            transition: 0.3s;
        }

        .signup-container button:hover {
            background-color: #5751d6;
        }

        .signup-container p {
            margin-top: 15px;
            color: #666;
            font-size: 14px;
        }

        .signup-container a {
            color: #6c63ff;
            text-decoration: none;
        }

        .signup-container a:hover {
            text-decoration: underline;
        }
    </style>
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

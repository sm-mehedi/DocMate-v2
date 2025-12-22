<!DOCTYPE html>
<html>
<head>
    <title>DocMate Login</title>
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

        /* Video background */
        .video-bg {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: -1;
        }

        /* Center login box */
        .login-container {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: rgba(255,255,255,0.9);
            padding: 40px 50px;
            border-radius: 12px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.3);
            width: 350px;
            text-align: center;
        }

        .login-container img {
            width: 150px;
            height: auto;
            margin-bottom: 30px;
        }

        .login-container input {
            width: 100%;
            padding: 12px 15px;
            margin: 10px 0;
            border-radius: 8px;
            border: 1px solid #ccc;
            font-size: 16px;
        }

        .login-container button {
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

        .login-container button:hover {
            background-color: #5751d6;
        }

        .login-container p {
            margin-top: 15px;
            color: #666;
            font-size: 14px;
        }

        .login-container a {
            color: #6c63ff;
            text-decoration: none;
            font-weight: bold;
        }

        .login-container a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<!-- Background video -->
<video class="video-bg" autoplay muted loop>
    <source src="./images/5234724-hd_1920_1080_25fps.mp4" type="video/mp4">
    Your browser does not support HTML5 video.
</video>

<div class="login-container">
    <!-- Logo -->
    <img src="./images/ebd9c9f1-6c88-4993-90da-cd1b04d39f7e-removebg-preview.png" alt="DocMate Logo">

    <form action="authenticate.php" method="POST">
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Login</button>
    </form>

    <p>Welcome to DocMate Portal</p>
    <p>Don't have an account? <a href="signup.php">Sign Up</a></p>
</div>

</body>
</html>

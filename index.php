<?php
// Start session if needed
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <style>
        /* General Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background: url('background.jpg') no-repeat center center fixed;
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        /* Main Container */
        .container {
            text-align: center;
            background: rgba(255, 255, 255, 0.9);
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
        }

        .container h1 {
            color: #6a0dad;
            margin-bottom: 20px;
        }

        /* Button Styles */
        .btn {
            display: inline-block;
            width: 150px;
            padding: 12px;
            margin: 10px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            font-weight: bold;
            color: #fff;
            cursor: pointer;
            transition: background 0.3s;
            text-decoration: none;
            text-align: center;
        }

        .btn-login {
            background-color: #6a0dad;
        }

        .btn-login:hover {
            background-color: #5c0dad;
        }

        .btn-register {
            background-color: #ff6600;
        }

        .btn-register:hover {
            background-color: #cc5500;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Welcome to Our Website</h1>
        <a href="login.php" class="btn btn-login">Login</a>
        <a href="register.php" class="btn btn-register">Register</a>
    </div>

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - HEALTHRWANDA</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="styles.css">
<style>
    body {
    background: url('background.jpg') no-repeat center center fixed;
    background-size: cover;
}

.card {
    background: rgba(255, 255, 255, 0.9);
    border-radius: 10px;
}

.btn-purple {
    background-color: #6a0dad;
    color: #fff;
    font-weight: bold;
}

.btn-purple:hover {
    background-color: #5c0dad;
}

.text-purple {
    color: #6a0dad;
}

.text-purple:hover {
    color: #5c0dad;
}

</style>
</head>
<body>
    <div class="container-fluid d-flex justify-content-center align-items-center min-vh-100">
        <div class="row w-100 justify-content-center">
            <div class="col-md-4">
                <div class="card shadow-lg p-4 rounded-4">
                    <h3 class="text-center mb-4 text-purple">Login</h3>
                    <form action="login.php" method="POST">
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" class="form-control" name="password" required>
                        </div>
                        <button type="submit" name="login" class="btn btn-purple w-100">Login</button>
                        <p class="text-center mt-3">Don't have an account? <a href="register.php" class="text-purple">Register</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php
if(isset($_POST['login'])) {
    $conn = new mysqli("localhost", "root", "", "24rp15460-health");
    $stmt = $conn->prepare("SELECT user_password FROM tbl_users WHERE user_email = ?");
    $stmt->bind_param("s", $_POST['email']);
    $stmt->execute();
    $stmt->bind_result($hashed_password);
    $stmt->fetch();

    if(password_verify($_POST['password'], $hashed_password)) {
        echo "<script>alert('Login Successful!'); window.location.href='index.php';</script>";
        echo "<script>alert('Login Successful!'); window.location.href='index.php';</script>";
    } else {
        echo "<script>alert('Invalid Credentials!');</script>";
    }
}
?>

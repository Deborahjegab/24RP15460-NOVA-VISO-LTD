<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - NOVA VISO LTD</title>
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
            <div class="col-md-5">
                <div class="card shadow-lg p-4 rounded-4">
                    <h3 class="text-center mb-4 text-purple">Create an Account</h3>
                    <form action="register.php" method="POST">
                        <div class="mb-3">
                            <label class="form-label">First Name</label>
                            <input type="text" class="form-control" name="firstname" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Last Name</label>
                            <input type="text" class="form-control" name="lastname" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Gender</label>
                            <select class="form-control" name="gender" required>
                                <option value="">Select Gender</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" class="form-control" name="password" required>
                        </div>
                        <button type="submit" name="register" class="btn btn-purple w-100">Register</button>
                        <p class="text-center mt-3">Already have an account? <a href="login.php" class="text-purple">Login</a></p>
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
if(isset($_POST['register'])) {
    $conn = new mysqli("localhost", "root", "", "24rp15460_shareide_db");
    $conn = new mysqli("localhost", "root", "", "24rp15460_shareide_db");
    // Check for errors
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and bind parameters
    $stmt = $conn->prepare("INSERT INTO tbl_users (user_firstname, user_lastname, user_gender, user_email, user_password) VALUES (?, ?, ?, ?, ?)");
    $hashed_password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $stmt->bind_param("sssss", $_POST['firstname'], $_POST['lastname'], $_POST['gender'], $_POST['email'], $hashed_password);

    if($stmt->execute()) {
        echo "<script>alert('Registration Successful! Please login.'); window.location.href='login.php';</script>";
    } else {
        echo "<script>alert('Error in Registration!');</script>";
    }

    $stmt->close();
    $conn->close();
}
?>


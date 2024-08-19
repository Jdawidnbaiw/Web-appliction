<?php
// Start session to store user information once logged in
session_start();

// Include your database connection
include 'db.php';

// Initialize a variable to hold error messages
$error = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Prepare statement to prevent SQL injection
    $stmt = $pdo->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->execute([$username]);
    $user = $stmt->fetch();

    if ($user && password_verify($password, $user['password'])) {
        // Password is correct, set session variables
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        
        // Redirect to a new page (e.g., user dashboard)
        header('Location: index1.php');
        exit;
    } else {
        // User not found or password does not match
        $error = 'Invalid username or password.';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
	<style>
		body {
			background-color: #f8f9fa;
		}

		.login-form {
			background: white;
			padding: 20px;
			border-radius: 8px;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
		}

		.form-group label {
			font-weight: bold;
		}

		.form-control {
			border-radius: 5px;
		}

		.btn-primary {
			background-color: #007bff;
			border-color: #007bff;
		}

		.btn-secondary {
			background-color: #6c757d;
			border-color: #6c757d;
		}

		a {
			color: #007bff;
			text-decoration: none;
		}

		a:hover {
			text-decoration: underline;
		}

	</style>
</head>
<body>
    <?php include('includes/navigation.php'); ?>
    <div class="container mt-5 py-5">
        <div class="login-form">
            <?php if ($error): ?>
                <div class="alert alert-danger" role="alert">
                    <?= $error; ?>
                </div>
            <?php endif; ?>
            <form action="" method="post">
                <div class="form-group">
                    <label for="username">Username:</label>
                    <input type="text" class="form-control" id="username" name="username" placeholder="Enter Username" required>
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password" required>
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
                <button type="reset" class="btn btn-secondary">Reset</button>
            </form>
            <div class="mt-3">
                <p>Don't have an account? <a href="registerPage.php">Register here</a></p>
            </div>
        </div>
    </div>
    <?php include('includes/footer.php'); ?>
</body>
</html>

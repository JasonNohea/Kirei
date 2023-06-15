<?php
// Start session
session_start();

// Check if the user is already logged in
if (isset($_SESSION['user_id'])) {
    // User is already logged in, redirect to home page or dashboard
    echo "Login Berhasil";
    exit;
}

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Validate form data
    $errors = array();

    if (empty($email)) {
        $errors[] = 'Email is required.';
    }

    if (empty($password)) {
        $errors[] = 'Password is required.';
    }

    // If there are no errors, proceed with login
    if (empty($errors)) {
        // Perform necessary actions (e.g., verify user credentials)
        // You can customize this part based on your specific requirements
        
        // Assuming you have a database connection established
        $conn = mysqli_connect('127.0.0.1', 'root', '', 'regio');
        
        // Check if the connection was successful
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        
        // Escape user input to prevent SQL injection
        $email = mysqli_real_escape_string($conn, $email);
        
        // Retrieve user data from the database
        $query = "SELECT id, password FROM user WHERE email = '$email'";
        $result = mysqli_query($conn, $query);
        
        if (mysqli_num_rows($result) === 1) {
            // User found, verify password
            $row = mysqli_fetch_assoc($result);
            $hashedPassword = $row['password'];
            
            if (password_verify($password, $hashedPassword)) {
                // Password is correct, set session variables and redirect
                $_SESSION['user_id'] = $row['id'];
                //header("Location: home.php");
                echo "Home Page";
                exit;
            } else {
                // Password is incorrect
                $errors[] = 'Invalid email or password.';
            }
        } else {
            // User not found
            $errors[] = 'Invalid email or password.';
        }
    }
}

// Display form and errors
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>

    <?php if (!empty($errors)): ?>
        <div style="color: red;">
            <?php foreach ($errors as $error): ?>
                <p><?php echo $error; ?></p>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>

    <form method="POST" action="">
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" required><br><br>

        <input type="submit" value="Login">
    </form>
</body>
</html>

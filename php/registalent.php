<?php
// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get form data
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['pass'];
    $phone = $_POST['phone'];

    // Validate form data (you can add more validation as per your requirements)
    if (empty($fname) || empty($lname) || empty($email) || empty($password)) {
        $error = "All fields are required.";
    } else {
        // Connect to your database (replace hostname, username, password, and dbname with your own details)
        $conn = new mysqli('127.0.0.1', 'root', '', 'regio');

        // Check if the connection was successful
        if ($conn->connect_error) {
            die('Connection failed: ' . $conn->connect_error);
        }

        // Check if the fname or email already exists in the database
        $query = "SELECT * FROM users WHERE fname = '$fname' OR email = '$email'";
        $result = $conn->query($query);

        if ($result->num_rows > 0) {
            $error = "fname or email already exists.";
        } else {
            // Insert the new user into the database
            $query = "INSERT INTO users VALUES (4,'Talent','$fname','$lname', '$email', '$password',$phone)";
            if ($conn->query($query) === TRUE) {
                $success = "Registration successful!";
            } else {
                $error = "Error: " . $conn->error;
            }
        }

        // Close the database connection
        $conn->close();
    }
}
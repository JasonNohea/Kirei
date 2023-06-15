<?php
// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get form data
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phonenum'];

/*
    //Sequence for UserID
    $id = $db->nextId('mySequence');
if (PEAR::isError($id)) {
    die($id->getMessage());
}

// Use the ID in your INSERT query
$res =& $db->query("INSERT INTO myTable (id, text) VALUES ($id, 'foo')");
*/
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
            /*
             // Begin the transaction
            $conn->begin_transaction();

            // Insert the new user into the 'user' table
            $query1 = "INSERT INTO user VALUES (1, 'Talent',$fname, $lname, $email, $password, $phone)";
            $stmt1 = $conn->prepare($query1);
            $stmt1->bind_param("sssss", $fname, $lname, $email, $password, $phone);
            $stmt1->execute();

            // Retrieve the auto-generated user ID
            $userId = $conn->insert_id;

            // Insert the data into the 'talent' table
            $query2 = "INSERT INTO talent VALUES (1)";
            $stmt2 = $conn->prepare($query2);
            $stmt2->bind_param("is", $userId);
            $stmt2->execute();

            // Commit the transaction
            $conn->commit();

            $success = "Registration successful!";
        } */

            
            // Insert the new user into the database
            $query = "INSERT INTO user VALUES (1,'Talent','$fname','$lname', '$email', '$password','08191023234')";
            $query2= "INSERT INTO talent VALUES (1,'$tgl')";
            if ($conn->query($query) === TRUE) {
                $query2;
                $success = "Registration successful!";
            } else {
                $error = "Error: " . $conn->error;
            } 
            
        }

        // Close the database connection
        $conn->close();
    }
}

?>
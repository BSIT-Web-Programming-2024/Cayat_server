<?php
include 'db_connect.php';  // Include the database connection file

// Ensure $conn is initialized
if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}

// Check if the form was submitted via POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get user inputs from the form
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);  // Hash the password for security

    // Prepare the SQL statement to insert new user data
    $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";


    // Prepare the statement using the database connection
    $stmt = $conn->prepare($sql);  // Prepare the statement

    if ($stmt === false) {
        // Error occurred while preparing the SQL statement
        die("Error preparing the statement: " . $conn->error);
    }

    // Bind parameters to the prepared statement

    // Execute the query and check if successful
    if ($stmt->execute()) {
        echo "Registration successful!";
    } else {
        echo "Error: " . $stmt->error;  // Output any errors that occur
    }
}
?>

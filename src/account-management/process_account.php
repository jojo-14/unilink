<?php
session_start();
if (isset($_SESSION['user_type']) && $_SESSION['user_type'] === 'admin') {
    $servername = "localhost";
    $username = "root"; // Replace with your MySQL username
    $password = "";     // Replace with your MySQL password
    $dbname = "unilink"; // Replace with your desired database name

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
 
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and bind parameters
    $stmt = $conn->prepare("INSERT INTO unilink (username, password) VALUES (?, ?)");
    $stmt->bind_param("ss", $username, $hashed_password);

    // Set parameters and hash the password
    $username = $_POST["username"];
    $hashed_password = password_hash($_POST["password"], PASSWORD_DEFAULT);

    // Execute the SQL statement
    if ($stmt->execute()) {
        echo "Account created successfully!";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement and the connection
    $stmt->close();
    $conn->close();
} else {
    echo '<h2>You are not authorized to create user accounts.</h2>';
}
?>

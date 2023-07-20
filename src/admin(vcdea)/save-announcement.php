<?php
// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $title = $_POST["title"];
    $content = $_POST["content"];
    $category = $_POST["category"];
    $name = $_POST["name"];

    // Database connection details
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "unilink";

    // Create a new connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare the SQL statement
    $sql = "INSERT INTO announcements (title, content, category, name) VALUES (?, ?, ?, ?)";

    // Prepare the statement
    $stmt = $conn->prepare($sql);

    // Bind parameters and execute the statement
    $stmt->bind_param("sssss", $title, $content, $category, $name);

    // Execute the statement
    $stmt->execute();

    // Close the statement and the connection
    $stmt->close();
    $conn->close();

    // Redirect to ui-formPreview.php after adding data
    header("Location: announcement.php");
    exit(); // Make sure to exit after the redirect
}
?>

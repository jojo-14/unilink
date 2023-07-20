<?php
// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $activityName = $_POST["activityName"];
    $partnerName = $_POST["partnerName"];
    $department = $_POST["department"];
    $date = $_POST["date"];
    $file = $_FILES["file"]["name"];

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
    $sql = "INSERT INTO activityform (ActivityName, PartnerName, Department, Date, File) VALUES (?, ?, ?, ?, ?)";

    // Prepare the statement
    $stmt = $conn->prepare($sql);

    // Bind parameters and execute the statement
    $stmt->bind_param("sssss", $activityName, $partnerName, $department, $date, $file);

    // Execute the statement
    $stmt->execute();

    // Check if the file was uploaded successfully
    if ($_FILES["file"]["error"] == UPLOAD_ERR_OK) {
        // Define the target directory to store the uploaded file
        $targetDir = "uploads/";
        $targetFile = $targetDir . basename($_FILES["file"]["name"]);

        // Move the uploaded file to the target directory
        if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFile)) {
            echo "The file has been uploaded.";
        } else {
            echo "Error uploading the file.";
        }
    } else {
        echo "Error: " . $_FILES["file"]["error"];
    }

    // Close the statement and the connection
    $stmt->close();
    $conn->close();

    // Redirect to ui-formPreview.php after adding data
    header("Location: ui-formsPreview.php");
    exit(); // Make sure to exit after the redirect
}
?>

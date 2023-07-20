<!DOCTYPE html>
<html>
<head>
    <title>Account Management</title>
</head>
<body>
    <?php
    session_start();
    if (isset($_SESSION['user_type']) && $_SESSION['user_type'] === 'admin') {
        echo '<h2>Welcome, Admin!</h2>';
        echo '<a href="create_account.php">Create User Account</a>';
        // Add more admin-only functionalities here
    } else {
        echo '<h2>You are not authorized to access this page.</h2>';
    }
    ?>
</body>
</html>

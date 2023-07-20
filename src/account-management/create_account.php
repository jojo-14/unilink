<!DOCTYPE html>
<html>
<head>
    <title>Create User Account</title>
</head>
<body>
    <?php
    session_start();
    if (isset($_SESSION['user_type']) && $_SESSION['user_type'] === 'admin') {
        echo '<h2>Create User Account</h2>';
        echo '<form action="process_account.php" method="post">';
        echo '<label>Username:</label>';
        echo '<input type="text" name="username" required><br>';
        echo '<label>Password:</label>';
        echo '<input type="password" name="password" required><br>';
        echo '<input type="submit" value="Create Account">';
        echo '</form>';
    } else {
        echo '<h2>You are not authorized to access this page.</h2>';
    }
    ?>
</body>
</html>

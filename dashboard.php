<?php
session_start();  // Start the session to access session variables

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    header("Location: index.html");  // Redirect to login page if not logged in
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="dashboard">
        <h1>Welcome, <?php echo $_SESSION['username']; ?></h1>
        <a href="logout.php">Logout</a>
    </div>
</body>
</html>

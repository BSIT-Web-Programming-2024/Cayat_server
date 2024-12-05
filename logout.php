<?php
session_start();  // Start session to access session variables
session_destroy();  // Destroy the session
header("Location: index.html");  // Redirect to the login page
exit;
?>

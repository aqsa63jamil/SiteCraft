<?php
session_start();
require "../Connection/connection.php";

// Check if the user is logged in and their email is set in the session
if(isset($_SESSION['email'])) {
    $email = $_SESSION['email'];

    // Update the user's status to inactive
    $update_status_query = "update users SET Status_Update = 'inactive' WHERE email = ?";
    $stmt = $conn->prepare($update_status_query);
    $stmt->bind_param("s", $email);
    $stmt->execute();
}

// Clear the session array
$_SESSION = array();

// If the session uses cookies, delete the session cookie
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

// Destroy the session
session_destroy();

// Redirect to the login page
header("Location: login.php");
exit();
?>
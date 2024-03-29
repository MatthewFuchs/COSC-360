<?php

require 'database_connection.php';

session_start();


$message = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $password = $_POST['password'];

    if (!empty($username) && !empty($password)) {
        $stmt = $db->prepare("SELECT id, username, password FROM users WHERE username = ?");
        $stmt->execute([$username]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($password, $user['password'])) {
            // Password is correct
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            
            header('Location: index.php');
            exit;
        } else {
            $message = 'Incorrect username or password.';
        }
    } else {
        $message = 'Both fields are required.';
    }
    // Redirect back to the login form with a message
    header("Location: login.php?message=" . urlencode($message));
    exit;
}
?>

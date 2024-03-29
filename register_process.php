<?php




require 'database_connection.php'; 

$message = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $password = $_POST['password']; 
    $confirmPassword = $_POST['confirmPassword'];
//check if user exits in db
    $checkStmt = $db->prepare("SELECT id FROM user WHERE username = ? OR email = ?");
$checkStmt->execute([$username, $email]);
if ($checkStmt->fetch()) {
    $message = 'Username or email already exists.';
    header('Location: register.php?message=' . urlencode($message));
    exit;
}
    if (empty($username) || empty($email) || empty($password)) {
        $message = 'Please fill in all required fields.';
    } elseif ($password !== $confirmPassword) {
        $message = 'Passwords do not match.';
    } else {
        $passwordHash = password_hash($password, PASSWORD_DEFAULT);

        $stmt = $db->prepare("INSERT INTO user (username, email, password) VALUES (?, ?, ?)");

        if ($stmt->execute([$username, $email, $passwordHash])) {
            // Handle profile picture upload
            
            $message = 'Account successfully created!';
        } else {
            $message = 'An error occurred. Please try again.';
        }
    }
    // Redirect or display message
    header('Location: register.php?message=' . urlencode($message));
    exit;
}

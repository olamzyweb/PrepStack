<?php
include 'includes/connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $token = $_POST['token'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    if ($password !== $confirm_password) {
        die("Passwords do not match.");
    }

    // Hash the new password
    // $hashed_password = password_hash($password, PASSWORD_BCRYPT);

    // Verify the token and update the password
    $stmt = $conn->prepare("SELECT * FROM users WHERE reset_token = ? AND token_expiry > NOW()");
    $stmt->bind_param("s", $token);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $update_stmt = $conn->prepare("UPDATE users SET password = ?, reset_token = NULL, token_expiry = NULL WHERE reset_token = ?");
        $update_stmt->bind_param("ss", $password, $token);

        if ($update_stmt->execute()) {
            echo "Password reset successful. You can now log in.";
        } else {
            echo "Failed to reset password.";
        }
    } else {
        echo "Invalid or expired token.Try again";
    }

    $stmt->close();
    $conn->close();
}
?>

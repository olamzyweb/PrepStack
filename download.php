<?php session_start();
include 'includes/connection.php';

if (isset($_GET['file']) && isset($_GET['fileid']) && isset($_GET['filename'])) {
    $file_id = (int) $_GET['fileid']; // Cast to integer for safety
    $file_name = $_GET['filename'];
    $fileName = basename($_GET['file']); // Prevent directory traversal attacks
    $filePath = __DIR__ . "/file/" . $fileName;

    if (file_exists($filePath)) {
$user_id = $_SESSION['user_id']; // Assuming user ID is stored in session

// Log the download in the database
$stmt = $conn->prepare("INSERT INTO downloads (user_id, file_id, file_name, file_url) VALUES (?, ?, ?, ?)");
$stmt->bind_param("iiss", $user_id, $file_id, $file_name, $fileName);
$stmt->execute();
$stmt->close();


        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="' . $fileName . '"');
        header('Content-Length: ' . filesize($filePath));
        readfile($filePath);
        exit;
    } else {
        http_response_code(404);
        die("File not found.");
    }
} else {
    http_response_code(400);
    die("Invalid request.");
}
?>







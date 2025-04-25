<?php
// Show detailed errors
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Database credentials
$servername = "sql201.infinityfree.com";
$username = "if0_38786324";
$password = "inchristalone7G";
$dbname = "if0_38786324_student_registration";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check DB connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if POST data exists
if (!isset($_POST['name'], $_POST['email'], $_POST['password'])) {
    die("Required fields are missing.");
}

$name = $_POST['name'];
$email = $_POST['email'];
$hashedPassword = password_hash($_POST['password'], PASSWORD_DEFAULT);

// Use prepared statements to prevent SQL injection
$stmt = $conn->prepare("INSERT INTO students (name, email, password) VALUES (?, ?, ?)");

if (!$stmt) {
    die("Prepare failed: " . $conn->error);
}

$stmt->bind_param("sss", $name, $email, $hashedPassword);

if ($stmt->execute()) {
    header("Location: dashboard.php?message=success");
    exit();
} else {
    die("Execute failed: " . $stmt->error);
}

$stmt->close();
$conn->close();
?>

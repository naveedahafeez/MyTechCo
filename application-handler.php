<?php
// Database connection details
$host = 'localhost';
$dbname = 'mytechco';
$username = 'root'; // Replace with your MySQL username
$password = ''; // Replace with your MySQL password

// Create a connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}

// Function to sanitize input data
function sanitize_input($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and validate form inputs
    $name = sanitize_input($_POST['name']);
    $email = sanitize_input($_POST['email']);
    $phone = sanitize_input($_POST['phone']);
    $country = sanitize_input($_POST['country']);
    $degree = sanitize_input($_POST['degree']);
    $experience = sanitize_input($_POST['experience']);
    $additional_info = sanitize_input($_POST['additional_info']);
    
    // Validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<script>alert('Invalid email format.'); window.history.back();</script>";
        exit();
    }

    // Validate phone number format (Example: Simple validation)
    if (!preg_match('/^[0-9]{10,15}$/', $phone)) {
        echo "<script>alert('Invalid phone number format.'); window.history.back();</script>";
        exit();
    }

    // Insert data into the database
    $stmt = $conn->prepare("INSERT INTO applicants_job (name, email, phone, country, degree, experience, additional_info) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssss", $name, $email, $phone, $country, $degree, $experience, $additional_info);

    // Check if the insertion was successful
    if ($stmt->execute()) {
        echo "<script>alert('Application submitted successfully!'); window.location.href = 'jobs-update.php';</script>";
    } else {
        echo "<script>alert('Error submitting application: " . $stmt->error . "'); window.history.back();</script>";
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();
} else {
    echo "<script>alert('Invalid request method.'); window.history.back();</script>";
}
?>

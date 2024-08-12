<?php
// submit_contact.php

$servername = "localhost";
$username = "root"; // Replace with your database username
$password = ""; // Replace with your database password
$dbname = "mytechco_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $sql = "INSERT INTO contact_submissions (name, email, subject, message)
            VALUES ('$name', '$email', '$subject', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>
                alert('Message sent successfully!');
                window.location.href='index.php';
              </script>";
    } else {
        echo "<script>
                alert('Error: Could not send message. Please try again later.');
                window.location.href='index.php';
              </script>";
    }

    $conn->close();
}
?>

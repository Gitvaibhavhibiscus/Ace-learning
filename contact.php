<?php
// Retrieve form data
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$checkbox = $_POST['checkbox'];

// Validate the data
if (empty($name) || empty($email) || empty($message)) {
  die('Please fill in all required fields.');
}

// Connect to the database
// Replace 'host', 'username', 'password', and 'database' with your database credentials
$conn = new mysqli('host', 'username', 'password', 'database');
if ($conn->connect_error) {
  die('Database connection failed: ' . $conn->connect_error);
}

// Insert form data into the database
$stmt = $conn->prepare('INSERT INTO your_table_name (name, email, message) VALUES (?, ?, ?)');
$stmt->bind_param('sss', $name, $email, $message);
$stmt->execute();

// Close the database connection
$stmt->close();
$conn->close();

// Send an email
$to = 'vaibhav@hibiscus.services';
$subject = 'New Form Submission';
$body = "Name: $name\nEmail: $email\nMessage: $message";
$headers = "From: $email";

if (mail($to, $subject, $body, $headers)) {
  echo 'Thank you! Your form has been submitted.';
} else {
  echo 'Sorry, there was an error sending your message.';
}
?>

<?php
// Database connection details
$servername = ""; // Replace with your database server address
$username = "uhft5c5rloais"; // Replace with your database username
$password = "#]B2(b5#d1,@"; // Replace with your database password
$dbname = "db0bffoueftbi4"; // Replace with your database name

// Create a database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process the form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Perform any necessary form validation and processing

    // Example: Save form data to a database table
    $sql = "INSERT INTO your_table (name, email, message) VALUES ('$name', '$email', '$message')";

    if ($conn->query($sql) === TRUE) {
        // Redirect to a thank you page or display a success message
        header("Location: home.php?success=true");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>
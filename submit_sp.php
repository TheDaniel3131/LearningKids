<?php

// Assuming you have already established a connection to your MySQL database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "learningkids";

// Create a new MySQLi object
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Validate input fields
    if (empty($name) || empty($email) || empty($message)) {
        echo "Please fill in all the fields.";
        exit;
    }

    // Validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format.";
        exit;
    }

    // Prepare and execute the SQL statement
    $stmt = $conn->prepare("INSERT INTO sp_form (id, name, email, message, created_at) VALUES (NULL, ?, ?, ?, NOW())");
    $stmt->bind_param("sss", $name, $email, $message);
    $stmt->execute();

    // Check if the insertion was successful
    if ($stmt->affected_rows > 0) {
        // Show a message after the form is submitted
        echo "<script>alert('Form submitted successfully!');</script>";
        
        // Redirect back to support.php after a delay
        header("refresh:0.5;url=support.php");
        exit;
    } else {
        echo "Error inserting data: " . $stmt->error;
    }

    // Close the statement
    $stmt->close();
}

// Close the connection
$conn->close();
?>
>
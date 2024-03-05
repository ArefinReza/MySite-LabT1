<?php
// Database connection
$host = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'login';

$conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Register user
if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $email = $_POST['email'];
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];

    $sql = "INSERT INTO users (username, password, email, firstName, lastName) VALUES ('$username', '$password', '$email', '$firstName', '$lastName')";
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Register successful!');</script>";
        header("Location: register.html");
        exit();
    } else {
        $error = $conn->error;
        if (strpos($error, "Duplicate entry") !== false) {
            echo "<script>alert('Email already exists!');</script>";
        } else {
            echo "<script>alert('Error: $error');</script>";
        }
    }
}

$conn->close();
?>
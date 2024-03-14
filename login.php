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

// Login user
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username='$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            echo "Login successful!";
            header("Location: home.html");
        } else {
            // echo "Invalid password!";
            header("Location: index.html");
            echo "<script>alert('Wrong password Sir !');</script>";
        }
    } else {
        // echo "User not found!";
        header("Location: index.html");
        echo "<script>alert('Try Again Sir !');</script>";
    }
}

$conn->close();
?>

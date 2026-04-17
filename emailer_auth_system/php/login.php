
<?php
session_start();
$conn = new mysqli('localhost', 'root', '', 'emailer');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$email = $_POST['email'];
$password = $_POST['password'];
$sql = "SELECT * FROM users WHERE email='$email'";
$result = $conn->query($sql);
if ($result->num_rows === 1) {
    $row = $result->fetch_assoc();
    if (password_verify($password, $row['password'])) {
        $_SESSION['user'] = $row['name'];
        header("Location: ../dashboard.html");
    } else {
        echo "Incorrect password.";
    }
} else {
    echo "User not found.";
}
$conn->close();
?>

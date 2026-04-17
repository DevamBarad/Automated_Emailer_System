
<?php
$conn = new mysqli('localhost', 'root', '', 'emailer');
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$title = $_POST['title'];
$subject = $_POST['subject'];
$content = $_POST['content'];
$sql = "INSERT INTO campaigns (title, subject, content) VALUES ('$title', '$subject', '$content')";
if ($conn->query($sql) === TRUE) {
  echo "Campaign created successfully.";
} else {
  echo "Error: " . $conn->error;
}
$conn->close();
?>


<?php
$conn = new mysqli('localhost', 'root', '', 'emailer');
$result = $conn->query("SELECT * FROM logs ORDER BY sent_at DESC");
echo "<h2>Email Logs</h2><table border='1'><tr><th>Email</th><th>Status</th><th>Time</th></tr>";
while ($row = $result->fetch_assoc()) {
  echo "<tr><td>{$row['email']}</td><td>{$row['status']}</td><td>{$row['sent_at']}</td></tr>";
}
echo "</table>";
$conn->close();
?>

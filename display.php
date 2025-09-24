<?php 
$host = "localhost";
$user = "root";
$pass = "";
$db = "guestbook";

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$result = $conn->query("SELECT name, message, created_at FROM messages ORDER BY created_at DESC");

while ($row = $result->fetch_assoc()) {
    echo "<div class='message'>";
    echo "<h3>" . htmlspecialchars($row['name']) . "</h3>";
    echo "<p>" . nl2br(htmlspecialchars($row['message'])) . "</p>";
    echo "<small>Posted on: " . $row['created_at'] . "</small>";
    echo "</div>";
}

$conn->close();
?>
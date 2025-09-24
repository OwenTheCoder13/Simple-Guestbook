<?php 
$host = "localhost";
$user = "root";
$pass = "";
$db = "guestbook";

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $conn->real_escape_string($_POST['name']);
    $message = $conn->real_escape_string($_POST['message']);

    if ($name && $message) {
        $conn->query("INSERT INTO messages (name, message) VALUES ('$name', '$message')");
    }
}

$conn->close();
header("Location: index.php");
exit();

?>
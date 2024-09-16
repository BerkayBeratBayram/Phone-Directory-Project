<?php
// db.php veya database.php olarak adlandırabilirsiniz
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "rehber_projem";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

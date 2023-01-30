<!DOCTYPE html>
<html>

<body>

<?php
$servername = "localhost";
$username = "cpe0639";
$password = "0612929505";
$db_name = "cpe101";

// Create connection
$conn = new mysqli($servername, $username, $password, $db_name);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
    
</body>
</html>
<?php
$servername = getenv("DB_HOST");
$username = getenv("DB_USER");
$password = getenv("DB_PWD");
$dbname = getenv("DB_NAME");

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$date = date("Y-m-d H:i:s");
$sql = "INSERT INTO Test (message, date) VALUES ('New message here', '$date')";

if ($conn->query($sql) === true) {
    echo "New record created successfully\n";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
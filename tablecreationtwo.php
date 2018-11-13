<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "statusofproject";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// sql to create table
$sql = "CREATE TABLE majorproject (
teamid VARCHAR(50) PRIMARY KEY,
projectguide VARCHAR(50),
rv1a VARCHAR(50),
rv1b VARCHAR(50),
rv1c VARCHAR(50),
rv2a VARCHAR(50),
rv2b VARCHAR(50),
rv2c VARCHAR(50),
rv3a VARCHAR(50),
rv3b VARCHAR(50),
rv3c VARCHAR(50),
rv4a VARCHAR(50),
rv4b VARCHAR(50),
rv4c VARCHAR(50),
count INT(10)
)";

if ($conn->query($sql) === TRUE) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>

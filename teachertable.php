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
$sql = "CREATE TABLE guidetable (
guidename VARCHAR(50) PRIMARY KEY,
department VARCHAR(50)
)";

if ($conn->query($sql) === TRUE) {
    echo "Table guide created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>

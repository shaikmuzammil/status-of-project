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
$sql = "CREATE TABLE registerpages (
teamid VARCHAR(50) PRIMARY KEY,
password VARCHAR(50) NOT NULL,
mem1 VARCHAR(50) NOT NULL,
regdno1 VARCHAR(50) NOT NULL,
mem2 VARCHAR(50) NOT NULL,
regdno2 VARCHAR(50) NOT NULL,
mem3 VARCHAR(50),
regdno3 VARCHAR(50),
mem4 VARCHAR(50),
regdno4 VARCHAR(50),
dept VARCHAR(50),
projecttitle VARCHAR(50) NOT NULL,
projectguide VARCHAR(50),
projecttype VARCHAR(50)
)";

if ($conn->query($sql) === TRUE) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>

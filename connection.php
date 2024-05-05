<?php
$servername = "localhost";
$username = "user";
$password = "12345";
$dbname = "db_uni";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE tbl_student (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
s_id INT(6),
s_name VARCHAR(30) NOT NULL,
s_mail VARCHAR(30),
s_mobile VARCHAR(15),
s_address VARCHAR(30),
)";

if ($conn->query($sql) === TRUE) {
  echo "Student table created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
?>
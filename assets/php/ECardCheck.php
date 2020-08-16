<?php
$servername = "serverIP";
$username = "root";
$password = "pass";
$dbname = "Ecard";



// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM t_Barcodes WHERE v_Taken = 'NA' LIMIT 1";

$result = $conn->query($sql);

$conn->close();
?>
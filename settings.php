<?php

$website_title = "Andrej";



$servername = "localhost";
$username = "root";
$password = "";
$datenbank = "verkauf";

// Create connection
$conn = new mysqli($servername, $username, $password, $datenbank);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>
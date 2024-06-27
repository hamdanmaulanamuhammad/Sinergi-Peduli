<?php
$servername = "localhost"; // Sesuaikan dengan host Anda
$username = "root"; // Sesuaikan dengan username MySQL Anda
$password = ""; // Sesuaikan dengan password MySQL Anda
$database = "db_charity"; // Sesuaikan dengan nama database Anda

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>

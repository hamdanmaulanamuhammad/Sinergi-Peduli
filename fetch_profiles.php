<?php
include 'config.php';

$sql = "SELECT profile_picture, raiser_name, motto, about, instagram, facebook, raiser_contact FROM fundraiser";
$result = $conn->query($sql);

$profiles = [];
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $profiles[] = $row;
    }
} else {
    echo "0 results";
}

$conn->close();
?>

<?php
include 'config.php';

$sql = "SELECT 
            fundraising.picture AS fundraising_picture,
            category.category_name,
            fundraising.raising_title,
            fundraising.amount_raised,
            fundraiser.profile_picture AS fundraiser_profile_picture,
            fundraiser.raiser_name
        FROM 
            fundraising
        JOIN 
            category ON fundraising.category_id = category.category_id
        JOIN 
            fundraiser ON fundraising.raiser_id = fundraiser.raiser_id";

$result = $conn->query($sql);

$fund = [];
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $fund[] = $row;
    }
} else {
    echo "0 results";
}

$conn->close();
?>
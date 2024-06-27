<?php
include "config.php";
if (isset($_POST['confirm'])){
    if(!mysqli_query($conn, "insert into donations set
    raising_id = 10,
    category_id = 2,
    donator_name = '".$_POST['nama']."',
    donator_email = '".$_POST['email']."',
    donator_contact = '".$_POST['telp']."',
    amount = '".$_POST['nominal']."',
    payment_method = '".$_POST['metode']."',
    message = '".$_POST['pesan']."';
    ")){
        echo mysqli_error($conn);
    } else {
        header("Location: causes.php");
    }
}
?>
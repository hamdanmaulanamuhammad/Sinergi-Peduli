<?php
include "config.php";
if (isset($_POST['sub_comment'])){
    if(!mysqli_query($conn, "insert into comments set
    first_name = '".$_POST['namaDepan']."',
    last_name = '".$_POST['namaBelakang']."',
    email = '".$_POST['email']."',
    message = '".$_POST['komentar']."';
    ")){
        echo mysqli_error($conn);
    } else {
        header("Location: index.html");
    }
}
?>
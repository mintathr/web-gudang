<?php
require '../koneksi/koneksi.php';

$query = mysqli_query($connection, "UPDATE tbl_user SET 
    password        = md5('semangat')
    WHERE md5(id) = '$_GET[reset]'") or die("Gagal Query");

header("Location: ../view/admin?success=&alert=7");

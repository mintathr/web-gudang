<?php
require '../koneksi/koneksi.php';
$nama       = $_POST['nama'];
$email      = $_POST['email'];
$role       = $_POST['role'];
$id         = $_POST['id'];

$query = mysqli_query($connection, "UPDATE tbl_user SET 
    nama        = '$nama', 
    email       = '$email', 
    role        = '$role'
    WHERE md5(id) = '$id'") or die("Gagal Query");

header("Location: ../view/admin?success=&alert=5");

<?php
require '../koneksi/koneksi.php';
$nama_produk    = $_POST['nama_produk'];
$harga          = $_POST['harga'];
$stock          = $_POST['stock'];
$tgl_masuk      = $_POST['tgl_masuk'];
$id             = $_POST['id'];


$query = mysqli_query($connection, "UPDATE tbl_produk SET 
    nama_produk     = '$nama_produk', 
    harga           = '$harga', 
    stock           = '$stock', 
    tgl_masuk       = '$tgl_masuk'
    WHERE md5(id) = '$id'") or die("Gagal Query");

header("Location: ../view/produk?success=&alert=5");

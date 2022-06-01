<?php
require '../koneksi/koneksi.php';
$nama_produk    = $_POST['nama_produk'];
$harga          = $_POST['harga'];
$stock          = $_POST['stock'];
$tgl_masuk      = $_POST['tgl_masuk'];


$cek_produk = mysqli_query($connection, "SELECT * FROM tbl_produk where nama_produk = '$nama_produk'");
if (mysqli_num_rows($cek_produk) > 0) {
    echo '
            <script type="text/javascript">
                window.location = "../view/produk/create_produk?failed=&alert=8";
            </script>
        ';
}
$query = mysqli_query($connection, "INSERT INTO tbl_produk (
        nama_produk, harga, stock, tgl_masuk)
        VALUES
        ('$nama_produk', '$harga', '$stock', '$tgl_masuk')
        ") or die("Gagal Query");

header("Location: ../view/produk?success=&alert=9");

<?php
require '../koneksi/koneksi.php';



$cek_user = mysqli_query($connection, "SELECT * FROM tbl_produk where md5(id) = '$_GET[delete]'");
if (!mysqli_num_rows($cek_user) > 0) {
    echo '
            <script type="text/javascript">
                window.location = "../view/produk/update_produk?failed=&alert=4";
            </script>
        ';
}

$query = mysqli_query($connection, "DELETE FROM tbl_produk WHERE md5(id) = '$_GET[delete]'") or die("Gagal Query");

header("Location: ../view/produk?success=&alert=6");

<?php
require '../koneksi/koneksi.php';
$nama       = $_POST['nama'];
$email      = $_POST['email'];
$password   = md5($_POST['password']);

$cek_email = mysqli_query($connection, "SELECT * FROM tbl_user where email = '$email'");
if (mysqli_num_rows($cek_email) > 0) {
    echo '
            <script type="text/javascript">
                window.location = "../?failed=&alert=1";
            </script>
        ';
}
$query = mysqli_query($connection, "INSERT INTO tbl_user (
        nama, email, password)
        VALUES
        ('$nama', '$email', '$password')
        ") or die("Gagal Query");

header("Location: ../?success=&alert=2");

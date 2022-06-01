<?php
require '../koneksi/koneksi.php';
$nama       = $_POST['nama'];
$email      = $_POST['email'];
$role       = $_POST['role'];

$password   = md5('smkn6');

$cek_email = mysqli_query($connection, "SELECT * FROM tbl_user where email = '$email'");
if (mysqli_num_rows($cek_email) > 0) {
    echo '
            <script type="text/javascript">
                window.location = "../view/admin/create_user?failed=&alert=1";
            </script>
        ';
}
$query = mysqli_query($connection, "INSERT INTO tbl_user (
        nama, email, password, role)
        VALUES
        ('$nama', '$email', '$password', '$role')
        ") or die("Gagal Query");

header("Location: ../view/admin?success=&alert=2");

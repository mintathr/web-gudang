<?php
session_start();
require '../koneksi/koneksi.php';

$email      = $_POST['email'];
$password   = md5($_POST['password']);

$cek_user = mysqli_query($connection, "SELECT * FROM tbl_user 
        where email = '$email' and 
        password = '$password'
    ");
$data = mysqli_fetch_assoc($cek_user);

if (mysqli_num_rows($cek_user) > 0) {
    if ($data['role'] == 'admin') {
        $_SESSION['nama']       = $data['nama'];
        $_SESSION['email']      = $email;
        $_SESSION['role']       = $data['role'];
?>
        <script type="text/javascript">
            window.location = "../view/admin?success=&alert=99";
        </script>
    <?php
    } elseif ($data['role'] == 'user') {
        $_SESSION['nama']       = $data['nama'];
        $_SESSION['email']      = $data['email'];
        $_SESSION['role']       = $data['role'];
    ?>
        <script type="text/javascript">
            window.location = "../view/produk?success=&alert=99";
        </script>
    <?php
    }
} else {
    ?>
    <script type="text/javascript">
        window.location = "../?failed=&alert=3";
    </script>
<?php
}
?>
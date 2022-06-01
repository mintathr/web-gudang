<?php
require_once '_day.php';
// fungsi untuk menampilkan pesan
// jika alert = "" (kosong)
// tampilkan pesan "" (kosong)
if (empty($_GET['alert'])) {
    echo "";
} elseif ($_GET['alert'] == 99) {
    echo '
        <div class="alert success-alert">
            <h5>Selamat ' . $salam . ' & Selamat Datang Di Sistem Informasi Gudang!</h5>
            <a class="close">&times;</a>
        </div>
    ';
} elseif ($_GET['alert'] == 1) {
    echo '
        <div class="alert danger-alert">
            <h5>Email Pernah Didaftarkan!</h5>
            <a class="close">&times;</a>
        </div>
    ';
} elseif ($_GET['alert'] == 2) {
    echo '
    <div class="alert success-alert">
        <h5>Email Berhasil Didaftarkan!</h5>
        <a class="close">&times;</a>
    </div>
';
} elseif ($_GET['alert'] == 3) {
    echo '
    <div class="alert danger-alert">
        <h5>Email & Password Salah!</h5>
        <a class="close">&times;</a>
    </div>
';
} elseif ($_GET['alert'] == 4) {
    echo '
    <div class="alert danger-alert">
        <h5>Data Tidak Ditemukan!</h5>
        <a class="close">&times;</a>
    </div>
';
} elseif ($_GET['alert'] == 5) {
    echo '
    <div class="alert success-alert">
        <h5>Data Berhasil Diupdate!</h5>
        <a class="close">&times;</a>
    </div>
';
} elseif ($_GET['alert'] == 6) {
    echo '
    <div class="alert success-alert">
        <h5>Data Berhasil Didelete!</h5>
        <a class="close">&times;</a>
    </div>
';
} elseif ($_GET['alert'] == 7) {
    echo '
    <div class="alert success-alert">
        <h5>User Password Berhasil Direset!</h5>
        <a class="close">&times;</a>
    </div>
';
} elseif ($_GET['alert'] == 8) {
    echo '
    <div class="alert danger-alert">
        <h5>Nama Produk Sudah Ada!</h5>
        <a class="close">&times;</a>
    </div>
';
} elseif ($_GET['alert'] == 9) {
    echo '
    <div class="alert success-alert">
        <h5>Data Berhasil Disimpan!</h5>
        <a class="close">&times;</a>
    </div>
';
}

?>

<!-- Close automatic -->
<script type="text/javascript">
    window.setTimeout(function() {
        $(".alert").fadeTo(500, 0).slideUp(900, function() {
            $(this).remove();
        });
    }, 5000);
</script> <!-- end Close automatic -->
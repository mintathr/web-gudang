<?php
ob_start();
//require '../koneksi/koneksi.php';

//pengganti session_start() =>
if (!isset($_SESSION)) {
    session_start();
}


if (!isset($_SESSION['nama']) || (trim($_SESSION['nama']) == '')) {
    header("Location: ../");
    exit();
}

$session_nama   = $_SESSION['nama'];
$session_email  = $_SESSION['email'];
$session_role   = $_SESSION['role'];

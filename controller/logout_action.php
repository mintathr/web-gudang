<?php
ob_start();

require '../koneksi/koneksi.php';

session_start();
if (session_destroy()) {
    header('Location: ../');
    exit();
}

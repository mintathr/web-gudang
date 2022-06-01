<?php
$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "db_gudang";
$connection = mysqli_connect($servername, $username, $password, $dbname) or die("Gagal Koneksi");

if (mysqli_connect_errno()) {
    echo "Gagal Koneksi ke MySQL: " . mysqli_connect_error();
}

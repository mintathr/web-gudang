<?php
require '../../function/_session.php';
#require '../../koneksi/koneksi.php';
?>

<!DOCTYPE html>
<html>

<head>
    <title>Sistem Informasi Gudang</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../../library/css/style.css" type="text/css">
    <link rel="stylesheet" href="../../library/css/style2.css" type="text/css">
    <link rel="stylesheet" href="../../library/css/alert.css" type="text/css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="../../library/fa/font-awesome.min.css" type="text/css"> -->

    <style>
        html,
        body,
        h1,
        h2,
        h3,
        h4,
        h5 {
            font-family: "Raleway", sans-serif
        }
    </style>

    <script src="../../library/js/jquery.min.js" type="text/javascript"></script>
    <script src="../../library/js/jquery.validate.min.js" type="text/javascript"></script>

</head>

<body class="w3-light-grey">

    <!-- Top container -->
    <div class="w3-bar w3-top w3-black w3-large" style="z-index:4">
        <button class="w3-bar-item w3-button w3-hide-large w3-hover-none w3-hover-text-light-grey" onclick="w3_open();"><i class="fa fa-bars"></i>  Menu</button>
        <span class="w3-bar-item w3-right">Sistem Informasi Gudang</span>
    </div>




    <?php require 'sidebar.php'; ?>
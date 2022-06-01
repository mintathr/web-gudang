<?php
include '../layout/header.php';
require '../../koneksi/koneksi.php';
?>

<style>
    input[type=date],
    select {
        width: 15%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }
</style>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:43px;">

    <!-- Header -->
    <header class="w3-container" style="padding-top:22px">
        <h5><b><i class="fa fa-plus"></i> Tambah Produk</b></h5>
    </header>




    <div class="w3-container">
        <?php
        // fungsi untuk menampilkan pesan
        require_once '../../function/_alert.php';
        ?>
        <form method="POST" id="newValidate" action="../../controller/create_produk_action">
            <label for="fname">Nama Produk</label>
            <input type="text" name="nama_produk" id="nama_produk" oninput="this.value=this.value.replace(/[^A-Za-z0-9 ]/g,'');" placeholder="Nama Produk">

            <label for="harga">Harga</label>
            <input type="text" name="harga" id="harga" oninput="this.value=this.value.replace(/[^0-9 ]/g,'');" placeholder="Harga Produk">

            <label for="stock">Stock</label>
            <input type="text" name="stock" id="stock" min="0" maxlength="4" oninput="this.value=this.value.replace(/[^0-9 ]/g,'');" placeholder="Stock Produk">

            <label for="tgl_masuk">Tanggal Masuk</label><br>
            <input type="date" id="tgl_masuk" name="tgl_masuk" oninput="this.value=this.value.replace(/[^0-9 ]/g,''); placeholder=" Tanggal Masuk">

            <input type="submit" value="Submit">
        </form>
        <br>
    </div>


    <?php
    require_once '../../function/_form_validasi.php';
    ?>


    <?php require '../layout/footer.php'; ?>
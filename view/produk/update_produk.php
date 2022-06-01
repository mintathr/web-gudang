<?php

require '../../koneksi/koneksi.php';

$cek_id = mysqli_query($connection, "SELECT * FROM tbl_produk where md5(id) = '$_GET[update]'") or die("Gagal Query");
if (mysqli_num_rows($cek_id) > 0) {

    $data = mysqli_fetch_array($cek_id);
    include '../layout/header.php';
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
            <form method="POST" id="newValidate" action="../../controller/update_produk_action">
                <input type="hidden" name="id" value="<?= $_GET['update']; ?>">
                <label for="fname">Nama Produk</label>
                <input type="text" name="nama_produk" id="nama_produk" oninput="this.value=this.value.replace(/[^A-Za-z0-9 ]/g,'');" value="<?= $data['nama_produk'] ?>" placeholder="Nama Produk">

                <label for="harga">Harga</label>
                <input type="text" name="harga" id="harga" oninput="this.value=this.value.replace(/[^0-9 ]/g,'');" value="<?= $data['harga'] ?>" placeholder="Harga Produk">

                <label for="stock">Stock</label>
                <input type="text" name="stock" id="stock" min="0" maxlength="4" oninput="this.value=this.value.replace(/[^0-9 ]/g,'');" value="<?= $data['stock'] ?>" placeholder="Stock Produk">

                <label for="tgl_masuk">Tanggal Masuk</label><br>
                <input type="date" id="tgl_masuk" name="tgl_masuk" value="<?= $data['tgl_masuk'] ?>" placeholder="Tanggal Masuk">

                <input type="submit" value="Submit">
            </form>
            <br>
        </div>


        <?php
        require_once '../../function/_form_validasi.php';
        ?>


        <?php require '../layout/footer.php'; ?>

    <?php
} else {
    echo '
        <script type="text/javascript">
            window.location = "../view/produk?failed=&alert=4";
        </script>
    ';
}
    ?>
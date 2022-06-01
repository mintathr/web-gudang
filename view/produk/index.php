<?php
include '../layout/header.php';
require '../../koneksi/koneksi.php';
?>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:43px;">

    <!-- Header -->
    <header class="w3-container" style="padding-top:22px">
        <h5><b><i class="fa fa-dashboard"></i> My Dashboard</b></h5>
    </header>
    <?php
    // fungsi untuk menampilkan pesan
    require_once '../../function/_alert.php';
    ?>
    <br>

    <div class="w3-container">
        <h5>Tabel Produk</h5>
        <a href="create_produk" class="w3-button w3-dark-grey">Tambah Produk  <i class="fa fa-plus"></i></a>
        <table class="w3-table w3-striped w3-bordered w3-border w3-hoverable w3-white">
            <tr>
                <th style="text-align: center">No</th>
                <th style="text-align: center;">Nama Produk</th>
                <th style="text-align: center;">Harga (Rp)</th>
                <th style="text-align: center;">Stock</th>
                <th style="text-align: center;">Tgl Masuk</th>
                <th style="text-align: center;">Tgl Keluar</th>
                <th style="text-align: center;">Action</th>
            </tr>
            <?php
            $cek_query = mysqli_query($connection, "SELECT * FROM tbl_produk") or die("Gagal Query");
            $no = 1;
            while ($row = mysqli_fetch_array($cek_query)) {
            ?>
                <tr>
                    <td style="text-align: center"><?= $no; ?></td>
                    <td><?= $row['nama_produk']; ?></td>
                    <td style="text-align: right;"><?= number_format($row['harga'], 2); ?></td>
                    <td style="text-align: center;"><?= $row['stock']; ?></td>
                    <td style="text-align: center;"><?= $row['tgl_masuk']; ?></td>
                    <td style="text-align: center;"><?= $row['tgl_keluar']; ?></td>
                    <td>
                        <button type="button" class="button button-primary" onclick="location.href='update_produk?update=<?= md5($row["id"]) ?>';"><i class="fa fa-pencil"></i> Ubah</button>

                        <button onclick="document.getElementById('id01').style.display='block'" class="button button-danger"><i class="fa fa-trash"></i> Hapus</button>
                        <div id="id01" class="w3-modal">
                            <div class="w3-modal-content w3-animate-zoom">
                                <div class="w3-container">
                                    <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-display-topright">&times;</span>
                                    <p>Yakin Hapus Data?</p>
                                    <button type="button" class="button button-primary" onclick="location.href='../../controller/delete_produk_action?delete=<?= md5($row["id"]) ?>';"><i class="fa fa-check"></i> Ya</button>
                                    <button onclick="document.getElementById('id01').style.display='none'" type="button" class="button button-danger"><i class="fa fa-close"></i> Tidak</button>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            <?php
                $no++;
            }
            ?>

        </table>
        <br>
    </div>





    <?php require '../layout/footer.php'; ?>
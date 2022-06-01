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
    <?php
    $cek_jml_produk = mysqli_query($connection, "SELECT COUNT(email) AS jumlah_produk FROM tbl_user") or die("Gagal Query");
    $jml_produk  = mysqli_fetch_array($cek_jml_produk);

    $cek_jml_user = mysqli_query($connection, "SELECT COUNT(email) AS jumlah_user FROM tbl_user") or die("Gagal Query");
    $jml_user  = mysqli_fetch_array($cek_jml_user);
    ?>
    <div class="w3-row-padding w3-margin-bottom">
        <div class="w3-quarter">
            <div class="w3-container w3-red w3-padding-16">
                <div class="w3-left"><i class="fa fa-comment w3-xxxlarge"></i></div>
                <div class="w3-right">
                    <h3>52</h3>
                </div>
                <div class="w3-clear"></div>
                <h4>Messages</h4>
            </div>
        </div>
        <div class="w3-quarter">
            <div class="w3-container w3-blue w3-padding-16">
                <div class="w3-left"><i class="fa fa-eye w3-xxxlarge"></i></div>
                <div class="w3-right">
                    <h3>99</h3>
                </div>
                <div class="w3-clear"></div>
                <h4>Views</h4>
            </div>
        </div>
        <div class="w3-quarter">
            <div class="w3-container w3-teal w3-padding-16">
                <div class="w3-left"><i class="fa fa-table w3-xxxlarge"></i></div>
                <div class="w3-right">
                    <h3><?= $jml_produk['jumlah_produk']; ?></h3>
                </div>
                <div class="w3-clear"></div>
                <h4>Produk</h4>
            </div>
        </div>
        <div class="w3-quarter">
            <div class="w3-container w3-orange w3-text-white w3-padding-16">
                <div class="w3-left"><i class="fa fa-users w3-xxxlarge"></i></div>
                <div class="w3-right">
                    <h3><?= $jml_user['jumlah_user']; ?></h3>
                </div>
                <div class="w3-clear"></div>
                <h4>Users</h4>
            </div>
        </div>
    </div>

    <div class="w3-container">
        <h5>Tabel User</h5>
        <a href="create_user" class="w3-button w3-dark-grey">Tambah User  <i class="fa fa-plus"></i></a>
        <table class="w3-table w3-striped w3-bordered w3-border w3-hoverable w3-white">
            <tr>
                <th style="text-align: center">No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Role</th>
                <th>Action</th>
            </tr>
            <?php
            $cek_query = mysqli_query($connection, "SELECT * FROM tbl_user") or die("Gagal Query");
            $no = 1;
            while ($row = mysqli_fetch_array($cek_query)) {
            ?>
                <tr>
                    <td style="text-align: center"><?= $no; ?></td>
                    <td><?php echo $row['nama']; ?></td>
                    <td><?= $row['email']; ?></td>
                    <td><?= $row['role']; ?></td>
                    <td>
                        <button type="button" class="button button-black" onclick="location.href='../../controller/reset_user_action?reset=<?= md5($row["id"]) ?>';"> Reset Password</button>

                        <button type="button" class="button button-primary" onclick="location.href='update_user?update=<?= md5($row["id"]) ?>';"><i class="fa fa-pencil"></i> Ubah</button>


                        <button onclick="document.getElementById('id01').style.display='block'" class="button button-danger"><i class="fa fa-trash"></i> Hapus</button>

                        <div id="id01" class="w3-modal">
                            <div class="w3-modal-content w3-animate-zoom">
                                <div class="w3-container">
                                    <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-display-topright">&times;</span>
                                    <p>Yakin Hapus Data?</p>
                                    <button type="button" class="button button-primary" onclick="location.href='../../controller/delete_user_action?delete=<?= md5($row["id"]) ?>';"><i class="fa fa-check"></i> Ya</button>
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
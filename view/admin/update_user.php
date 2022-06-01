<?php

require '../../koneksi/koneksi.php';

$cek_id = mysqli_query($connection, "SELECT * FROM tbl_user where md5(id) = '$_GET[update]'") or die("Gagal Query");
if (mysqli_num_rows($cek_id) > 0) {

    $row = mysqli_fetch_array($cek_id);
    include '../layout/header.php';
?>



    <!-- !PAGE CONTENT! -->
    <div class="w3-main" style="margin-left:300px;margin-top:43px;">

        <!-- Header -->
        <header class="w3-container" style="padding-top:22px">
            <h5><b><i class="fa fa-plus"></i> <?= $row['email']; ?></b></h5>
        </header>




        <div class="w3-container">
            <?php
            // fungsi untuk menampilkan pesan
            require_once '../../function/_alert.php';
            ?>
            <form method="POST" id="newValidate" action="../../controller/update_user_action">
                <input type="hidden" name="id" value="<?= $_GET['update']; ?>">
                <label for="fname">Nama</label>
                <input type="text" name="nama" id="nama" oninput="this.value=this.value.replace(/[^A-Za-z ]/g,'');" value="<?= $row['nama']; ?>" placeholder="Nama Lengkap">

                <label for="lname">Alamat Email</label>
                <input type="email" name="email" id="email" value="<?= $row['email']; ?>" placeholder="Alamat Email">

                <label for="lname">Role</label><br>
                <input type="radio" class="w3-radio" name="role" value="user" <?php if ($row['role'] == 'user') echo "checked='checked'" ?>>
                <label for="user">User</label> &nbsp; &nbsp; &nbsp;
                <input type="radio" class="w3-radio" name="role" value="admin" <?php if ($row['role'] == 'admin') echo "checked='checked'" ?>>
                <label for="admin">Admin</label>

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
            window.location = "../view/admin?failed=&alert=4";
        </script>
    ';
}
    ?>
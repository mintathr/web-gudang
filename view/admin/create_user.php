<?php
include '../layout/header.php';
require '../../koneksi/koneksi.php';
?>



<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:43px;">

    <!-- Header -->
    <header class="w3-container" style="padding-top:22px">
        <h5><b><i class="fa fa-plus"></i> Tambah User</b></h5>
    </header>




    <div class="w3-container">
        <?php
        // fungsi untuk menampilkan pesan
        require_once '../../function/_alert.php';
        ?>
        <form method="POST" id="newValidate" action="../../controller/create_user_action">
            <label for="fname">Nama</label>
            <input type="text" name="nama" id="nama" oninput="this.value=this.value.replace(/[^A-Za-z ]/g,'');" placeholder="Nama Lengkap">

            <label for="lname">Alamat Email</label>
            <input type="email" name="email" id="email" placeholder="Alamat Email">

            <label for="lname">Role</label><br>
            <input type="radio" class="w3-radio" name="role" value="user" checked>
            <label for="user">User</label> &nbsp; &nbsp; &nbsp;
            <input type="radio" class="w3-radio" name="role" value="admin">
            <label for="admin">Admin</label>
            <br><br>
            <label for="lname">Password Default: smkn6</label>

            <input type="submit" value="Submit">
        </form>
        <br>
    </div>


    <?php
    require_once '../../function/_form_validasi.php';
    ?>


    <?php require '../layout/footer.php'; ?>
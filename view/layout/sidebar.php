<?php
include '../../parameter/_parameter.php';
?>
<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
    <div class="w3-container w3-row">
        <div class="w3-col s3">
            <img src="../../library/img/avatar2.png" class="w3-circle w3-margin-right" style="width:46px">
        </div>
        <div class="w3-col s9 w3-bar">
            <span>Welcome, <strong><?= $session_nama; ?></strong></span><br>
            <a href="#" class="w3-bar-item w3-button"><i class="fa fa-twitter"></i></a>
            <a href="#" class="w3-bar-item w3-button"><i class="fa fa-google"></i></a>
            <a href="#" class="w3-bar-item w3-button"><i class="fa fa-instagram"></i></a>
            <a href="#" class="w3-bar-item w3-button"><i class="fa fa-youtube"></i></a>

        </div>
        <span id="tanggalwaktu"></span>


    </div>
    <hr>
    <div class=" w3-container">
        <h5>Dashboard</h5>
    </div>
    <div class="w3-bar-block">
        <a href="#" class="w3-bar-item w3-button w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black" onclick="w3_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>  Close Menu</a>

        <a href="../produk" <?php
                            if (($uri[0] == '/gudang_php/view/produk/') or ($uri[0] == '/gudang_php/view/produk/create_produk') or ($uri[0] == '/gudang_php/view/produk/update_produk')) {
                                echo 'class="w3-bar-item w3-button w3-padding w3-blue"';
                            } else {
                                echo 'class="w3-bar-item w3-button w3-padding"';
                            } ?>><i class="fa fa-table fa-fw"></i>  Produk</a>
        <?php
        if ($session_role == 'admin') {
        ?>


            <a href="../admin" <?php
                                if (($uri[0] == '/gudang_php/view/admin/') or ($uri[0] == '/gudang_php/view/admin/create_user') or ($uri[0] == '/gudang_php/view/admin/update_user')) {
                                    echo 'class="w3-bar-item w3-button w3-padding w3-blue"';
                                } else {
                                    echo 'class="w3-bar-item w3-button w3-padding"';
                                } ?>><i class="fa fa-users fa-fw"></i>  Users</a>
        <?php } ?>
        <a href="../../controller/logout_action" class="w3-bar-item w3-button w3-padding"><i class="fa fa-sign-out fa-fw"></i>  Logout</a>
        <br><br>
    </div>
</nav>


<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<script>
    window.setTimeout("tw()", 1000);

    function tw() {
        var tw = new Date();
        setTimeout("tw()", 1000);
        if (tw.getTimezoneOffset() == 0)(a = tw.getTime() + (7 * 60 * 60 * 1000))
        else(a = tw.getTime());
        tw.setTime(a);
        var tahun = tw.getFullYear();
        var hari = tw.getDay();
        var bulan = tw.getMonth();
        var tanggal = tw.getDate();
        var hariarray = new Array("Minggu,", "Senin,", "Selasa,", "Rabu,", "Kamis,", "Jum'at,", "Sabtu,");
        var bulanarray = new Array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "Nopember", "Desember");
        document.getElementById("tanggalwaktu").innerHTML = hariarray[hari] + " " + tanggal + " " + bulanarray[bulan] + " " + tahun + " &nbsp;  <br> Jam " + (("0" + tw.getHours()).slice(-2)) + " : " + (("0" + tw.getMinutes()).slice(-2) + " : " + (("0" + tw.getSeconds()).slice(-2)));
    }
    /* tw.toLocaleTimeString() */
</script>
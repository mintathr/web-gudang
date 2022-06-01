<br>
<div class="w3-container w3-dark-grey w3-padding-32">
    <div class="w3-row">
        <div class="w3-container w3-third">
            <h5 class="w3-bottombar w3-border-green">Media Sosial</h5>
            <p>Twitter</p>
            <p>Instagram</p>
            <p>Facebook</p>
            <p>Youtube</p>
        </div>
        <div class="w3-container w3-third">
            <h5 class="w3-bottombar w3-border-red">Bahasa Pemrograman</h5>
            <p>C++</p>
            <p>HTML</p>
            <p>JavaScript</p>
            <p>CSS</p>
            <p>PHP</p>
        </div>
        <div class="w3-container w3-third">
            <h5 class="w3-bottombar w3-border-orange">Menu</h5>
            <p>Users</p>
        </div>
    </div>
</div>

<!-- Footer -->
<footer class="w3-container w3-padding-16 w3-light-grey">
    <strong>Copyright &copy; 2022<?= (date('Y') > 2022 ? ' - ' . date('Y') : '') ?> | </strong> SMKN 6 | All rights
    reserved.

    <!-- <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p> -->
</footer>

<!-- End page content -->
</div>

<script type="text/javascript">
    $(".close").click(function() {
        $(this)
            .parent(".alert")
            .fadeOut();
    });
</script>

<script>
    // Get the Sidebar
    var mySidebar = document.getElementById("mySidebar");

    // Get the DIV with overlay effect
    var overlayBg = document.getElementById("myOverlay");

    // Toggle between showing and hiding the sidebar, and add overlay effect
    function w3_open() {
        if (mySidebar.style.display === 'block') {
            mySidebar.style.display = 'none';
            overlayBg.style.display = "none";
        } else {
            mySidebar.style.display = 'block';
            overlayBg.style.display = "block";
        }
    }

    // Close the sidebar with the close button
    function w3_close() {
        mySidebar.style.display = "none";
        overlayBg.style.display = "none";
    }
</script>

</body>

</html>
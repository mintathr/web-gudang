<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="stylesheet" href="library/css/login_style.css" type="text/css">
    <link rel="stylesheet" href="library/css/alert.css" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
    <script src="library/js/jquery.min.js" type="text/javascript"></script>
    <!-- <script src="library/js/jquery.validate.min.js" type="text/javascript"></script> -->



</head>

<body>
    <div class="main">
        <input type="checkbox" id="chk" aria-hidden="true">
        <!-- INI UNTUK DIV DAFTAR -->


        <!-- INI UNTUK DIV LOGIN -->
        <div class="login">
            <form action="controller/login_action.php" method="POST">
                <label for="chk" aria-hidden="true">Login</label>
                <?php
                // fungsi untuk menampilkan pesan
                require_once 'function/_alert.php';
                ?>
                <input type="email" name="email" placeholder="Email">
                <input type="password" name="password" placeholder="Password">
                <button>Login</button>
            </form>
        </div>

        <!-- INI UNTUK DIV REGISTER -->
        <div class="signup">
            <form action="controller/register_action.php" method="POST" id="newValidate">
                <label for="chk" aria-hidden="true">Daftar</label>
                <input type="text" name="nama" id="txt_nama" placeholder="Nama Lengkap" oninput="this.value=this.value.replace(/[^A-Za-z ]/g,'');" required>
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="Password" required>
                <button>Daftar</button>
            </form>
        </div>

    </div>

    <?php
    #require_once 'function/_form_validasi.php';
    ?>
    <script type="text/javascript">
        $(".close").click(function() {
            $(this)
                .parent(".alert")
                .fadeOut();
        });
    </script>
</body>

</html>
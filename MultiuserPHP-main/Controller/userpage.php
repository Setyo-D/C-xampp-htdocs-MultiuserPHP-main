<!DOCTYPE html>
<html>

<head>
    <title>Halaman User - www.malasngoding.com</title>
</head>

<body>
    <?php
    session_start();

    // cek apakah yang mengakses halaman ini sudah login
    if ($_SESSION['level'] == "") {
        header("location:index.php?pesan=gagal");
    }

    ?>
    <h1>Halaman Pengurus</h1>

    <p>Halo <b><?php echo $_SESSION['username']; ?></b> Anda telah login sebagai <b><?php echo $_SESSION['level']; ?></b>.</p>
    <p>Halaman ini hanya bisa diakses oleh akun <b>USER</b></p>
    <a href="logout.php">LOGOUT</a>

    <br />
    <br />

    <a><a href="https://www.malasngoding.com/membuat-login-multi-user-level-dengan-php-dan-mysqli">Membuat Login Multi Level Dengan PHP</a> - www.malasngoding.com</a>
</body>
<style>
    body {
        background-color: #f0f0f0;
        font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        text-align: center;
    }

    p {
        text-align: center;
    }

    a {
        text-align: center;
        text-decoration: none;
    }

    h1 {
        text-align: center;
    }
</style>

</html>
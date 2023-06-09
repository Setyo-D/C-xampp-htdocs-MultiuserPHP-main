<?php
    require '../config/config.php';

    $perpustakaan = query("SELECT * FROM buku");
?>

<!DOCTYPE html>
<html>

<head>
    <title>Halaman admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <?php
    session_start();

    // cek apakah yang mengakses halaman ini sudah login
    if ($_SESSION['level'] == "") {
        header("location:index.php?pesan=gagal");
    }

    ?>
    <h1>Halaman Admin</h1>
    <hr/>
    <p>Halo <b><?php echo $_SESSION['username']; ?></b> Anda telah login sebagai <b><?php echo $_SESSION['level']; ?></b>.</p>
    <p>Halaman ini hanya bisa diakses oleh akun <b>ADMIN</b></p>
    <br>
    <a href="tambah.php"><button type="button" class="btn btn-primary">Tambah Buku</button></a>
    
    <br>
    <br>

    <table align="center" border="1" cellpadding="10" cellspacing="0" width="1000px">
        <tr>
            <th>ID</th>
            <th>Nama Buku</th>
            <th>Penerbit</th>
            <th>Tahun Terbit</th>
            <th>Stok</th>
            <th>Edit</th>
        </tr>

        <?php $i = 1;?>
        <?php foreach($perpustakaan as $perpus): ?>
            <tr>
                <td><?php echo $perpus["id"]; ?></td>
                <td><?php echo $perpus["namabuku"]; ?></td>
                <td><?php echo $perpus["penerbit"]; ?></td>
                <td><?php echo $perpus["tahun"]; ?></td>
                <td><?php echo $perpus["stok"]; ?></td>
                <td><a href="ubah.php?id=<?= $perpus["id"]; ?>"><button type="button" class="btn btn-outline-warning">Ubah</button></a> |
                <a href="hapus.php?id=<?= $perpus["id"]; ?>" onclick ="return confirm('Apakah data ingin dihapus');"><button type="button" class="btn btn-outline-danger">Hapus</button></a>
            </td>
            </tr>
        <?php $i++; ?>
        <?php endforeach ?>
    </table>
    <br>
    <a href="Logout.php"><button type="button" class="btn btn-danger">Logout</button></a>
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
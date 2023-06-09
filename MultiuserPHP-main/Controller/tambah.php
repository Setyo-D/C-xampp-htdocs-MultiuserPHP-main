<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
</head>
<body>
<h1>Tambah Buku</h1>

<table border="1" cellpadding="10" cellspacing="0">
<form action="" method="post">
    <ul>
        <tr>
            <td><label for="namabuku">Nama Buku : </label></td>
            <td><input type="text" name="namabuku" id="namabuku" required></td>
        </tr>

        <tr>
            <td><label for="penerbit">Penerbit : </label></td>
            <td><input type="text" name="penerbit" id="penerbit" required></td>
        </tr>

        <tr>
            <td><label for="tahun">Tahun Terbit : </label></td>
            <td><input type="text" name="tahun" id="tahun" required></td>
        </tr>

        <tr>
            <td><label for="stok">Stok : </label></td>
            <td><input type="text" name="stok" id="stok" required></td>
        </tr>

        <tr>
            <td><button type="submit" name="submit">Tambah Data</button></td>
        </tr>
    </ul>
</table>
    <p><a href="adminpage.php">Kembali Ke Halaman Utama</a></p>
</form>
</body>
</html>

<?php 

session_start();

require '../config/config.php';

if(isset($_POST["submit"])){
    if(tambah($_POST) > 0 ){
        echo "
        <script>
            alert('Data Berhasil Ditambahkan');
            document.location.href = 'adminpage.php';
        </script>
        ";
        
    } else {
        echo "
        <script>
            alert('Data Gagal Ditambahkan');
            document.location.href = 'adminpage.php';
        </script>
        ";
    }
}
?>
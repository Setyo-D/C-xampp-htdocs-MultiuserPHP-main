<?php 

session_start();

require '../config/config.php';

$id = $_GET["id"];
$bku = query("SELECT * FROM buku WHERE id = $id")[0];

if(isset($_POST["submit"])){
    if(ubah($_POST) > 0 ){
        echo "
        <script>
            alert('Data Berhasil Diubah');
            document.location.href = 'adminpage.php';
        </script>
        ";
        
    } else {
        echo "
        <script>
            alert('Data Gagal Diubah');
            document.location.href = 'adminpage.php';
        </script>
        ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data</title>
</head>
<body>
<h1>Ubah Data Buku</h1>

<table border="1" cellpadding="10" cellspacing="0">
<form action="" method="post">
    <input type="hidden" name="id" value="<?= $bku["id"]; ?>">
    <ul>
        <tr>
            <td><label for="namabuku">Nama Buku : </label></td>
            <td><input type="text" name="namabuku" id="namabuku" value="<?= $bku["namabuku"]; ?>"></td>
        </tr>

        <tr>
            <td><label for="penerbit">Penerbit : </label></td>
            <td><input type="text" name="penerbit" id="penerbit" value="<?= $bku["penerbit"]; ?>"></td>
        </tr>

        <tr>
            <td><label for="tahun">Tahun Terbit : </label></td>
            <td><input type="text" name="tahun" id="tahun" value="<?= $bku["tahun"]; ?>"></td>
        </tr>

        <tr>
            <td><label for="stok">Stok : </label></td>
            <td><input type="text" name="stok" id="stok" value="<?= $bku["stok"]; ?>"></td>
        </tr>

        <tr>
            <td><button type="submit" name="submit">Ubah Data</button></td>
        </tr>
    </ul>
</table>
    <p><a href="adminpage.php">Kembali Ke Halaman Utama</a></p>
</form>
</body>
</html>
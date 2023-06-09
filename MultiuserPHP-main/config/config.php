<?php
$server = "localhost";
$user = "root";
$pass = "";
$database = "test_mu";
$conn = mysqli_connect($server, $user, $pass, $database);
if (!$conn) {
    die("<script>alert('Gagal tersambung dengan database.')</script>");
}

function query($query){
    global $conn;

    $result = mysqli_query($conn,$query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data){
    global $conn;

    $nama = htmlspecialchars($_POST["namabuku"]);
    $pnrbt = htmlspecialchars($_POST["penerbit"]);
    $thn = htmlspecialchars($_POST["tahun"]);
    $stok = htmlspecialchars($_POST["stok"]);

    $query = "INSERT INTO buku 
                VALUES
                ('','$nama','$pnrbt','$thn','$stok')";

    mysqli_query($conn,$query);

    return mysqli_affected_rows($conn);
}

function hapus($id){
    global $conn;
    mysqli_query($conn,"DELETE FROM buku WHERE id = $id");
    return mysqli_affected_rows($conn);
}

function ubah($data){
    global $conn;

    $id = $data["id"];
    $nama = htmlspecialchars($data["namabuku"]);
    $pnrbt = htmlspecialchars($data["penerbit"]);
    $thn = htmlspecialchars($data["tahun"]);
    $stok = htmlspecialchars($data["stok"]);

    $query = "UPDATE buku SET
                namabuku = '$nama',
                penerbit = '$pnrbt',
                tahun = '$thn',
                stok = '$stok'
            WHERE id = '$id'
                ";

    mysqli_query($conn,$query);

    return mysqli_affected_rows($conn);
}
<?php 
session_start();

require '../config/config.php';

$id = $_GET["id"];

if( hapus($id) > 0 ){
    echo "
        <script>
            alert('Data Berhasil Dihapus');
            document.location.href = 'adminpage.php';
        </script>
        ";

    echo "
        <script>
            alert('Data Gagal Dihapus');
            document.location.href = 'adminpage.php';
        </script>
        ";
}
?>
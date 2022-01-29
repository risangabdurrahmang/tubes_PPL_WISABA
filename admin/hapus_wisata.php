<?php
    require 'fungsi.php';

    // Cek Login
    session_start();
    if(!isset($_SESSION['login'])) {
        header('location:auth/login.php');
        exit;
    }

    $id_wisata = $_GET ['id_wisata'];

    if(empty($id_wisata)) {
        header('location:wisata.php');
        exit;
    }
    
    if(hapuswst($id_wisata) > 0) {
        echo "<script>
            alert('Berhasil');
            document.location.href = 'wisata.php';
        </script>";
    } else {
        echo "<script>
            alert('Gagal');
            document.location.href = 'wisata.php';
        </script>";
    }
?>
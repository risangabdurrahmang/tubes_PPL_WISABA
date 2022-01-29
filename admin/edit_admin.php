<?php

    require 'fungsi.php';
    require 'header.php';
    
    // Ambil id di url
    // untuk menghindari sql injection gunakan fungsi real_escape_string pada fungsi mysqli
    $conn = koneksi();
    $id_admin = $conn->real_escape_string($_GET['id_admin']);

    // menampilkan data mahasiswa berdasarkan id
    $dt = query("SELECT * FROM tabel_admin WHERE id_admin = '$id_admin'");

    // Jika tombil edit ditekan
    if(isset($_POST['editadm'])) {
        editadm($_POST);
    }
?>

<h2 class='page mt-3 mb-4'>Edit Data Admin</h2>
<div class="card mb-4">
    <div class="card-body">
        <form action="" method="POST">
            <div class="form-group mb-3">
                <label for="nama_admin">Nama</label>
                <input type="text" name="nama_admin" class="form-control" value="<?= $dt['nama_admin']; ?>">
            </div>
            <div class="form-group mb-3">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control" value="<?= $dt['password']; ?>"></input>
            </div>
            <button type="submit" name="editadm" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</div>
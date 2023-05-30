<?php

include 'koneksi.php';

if(isset($_POST['simpan'])){

    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $prodi = $_POST['prodi'];
    $alamat = $_POST['alamat'];
    $noHP = $_POST['noHP'];

    // buat query update
    $sql = "UPDATE t_mahasiswa SET nim='$nim', nama='$nama', prodi='$prodi', alamat='$alamat', noHP='$noHP' WHERE nim='$nim'";
    $query = mysqli_query($conn, $sql);

    // apakah query update berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman list-siswa.php
        header('Location: view.php');
    } else {
        // kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan...");
    }

}
header("location:view.php")
?>
<?php

include 'koneksi.php';
if(isset($_GET['nim'])) {
    $nim = $_GET['nim'];
    $query = "DELETE FROM t_mahasiswa WHERE nim='$nim' ";
    $hasil_query = mysqli_query($conn, $query);

    if(!$hasil_query) {
        die ("Gagal menghapus data: ".mysqli_errno($link).
            " - ".mysqli_error($link));
    }

    header('location:view.php');
}

?>
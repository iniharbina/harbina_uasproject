<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style1.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet">
    <title>Input Data Mahasiswa</title>
</head>
<body>
    <table class="table1" border="0" cellspacing="0" cellpadding="5" align="center">
        <tr>
            <center><font size="7" face="Century Gothic">Input Data Mahasiswa</font></center>
        </tr>
        <br><br>
        <form action="" method="POST">
            <tr>
                <td>NIM</td>
                <td>: <input type="text" name="nim" placeholder="NIM Mahasiswa" required></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>: <input type="text" name="nama" placeholder="Nama Mahasiswa" required></td>
            </tr>
            <tr>
                <td>Prodi</td>
                <td>: <input type="text" name="prodi" placeholder="Prodi Mahasiswa" required></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>: <input type="text" name="alamat" placeholder="Alamat Mahasiswa" required></td>
            </tr>
            <tr>
                <td>No HP</td>
                <td>: <input type="text" name="nohp" placeholder="No HP Mahasiswa" required></td>
            </tr>
            <tr> 
                <td style="text-align: center;"><input type="submit" name="simpan" value="SIMPAN" class="btn"></td>
            </tr>
        </form>
    </table>
    <br><br><br>
        <center>
			<a href="view.php" style="padding:0.2% 0.4%;background-color :#ff1b5b; color:#fff;border-radius:5px;text-decoration:none;">🔃Kembali</a>
		</center>

<?php 

include 'koneksi.php';
if(isset($_POST['simpan'])) {
    $insert = mysqli_query($conn, "INSERT INTO t_mahasiswa VALUES
    ('".$_POST['nim']."', 
	'".$_POST['nama']."',
	'".$_POST['prodi']."',
    '".$_POST['alamat']."',
	'".$_POST['nohp']."')"
    );

    if($insert){
        echo "<script>alert('Data Berhasil diSimpan!')</script>";
    } else {
        echo "Data Gagal diSimpan!";
    }
}
?>
</body>
</html>
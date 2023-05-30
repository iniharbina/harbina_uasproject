<?php

include 'koneksi.php';

if( !isset($_GET['nim']) ){
    header('Location: view.php');
}

//ambil id dari query string
$nim = $_GET['nim'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM t_mahasiswa WHERE nim='$nim'";
$query = mysqli_query($conn, $sql);
$data = mysqli_fetch_array($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style1.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet">
    <title>Update Data Mahasiswa</title>
</head>
<body>
    <table class="table1" border="0" cellspacing="0" cellpadding="5" align="center">
        <tr>
            <center><font size="7" face="Century Gothic" >Update Data Mahasiswa</font></center>
        </tr>
        <br><br>
        <form action="proses_update.php" method="POST">
            <tr>
                <td>NIM</td>
                <td>: <input type="text" name="nim" value="<?php echo "$data[nim]";?>" readonly></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>: <input type="text" name="nama" value="<?php echo "$data[nama]";?>" required></td>
            </tr>
            <tr>
                <td>Prodi</td>
                <td>: <input type="text" name="prodi" value="<?php echo "$data[prodi]";?>" required></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>: <input type="text" name="alamat" value="<?php echo "$data[alamat]";?>" required></td>
            </tr>
            <tr>
                <td>No HP</td>
                <td>: <input type="text" name="noHP" value="<?php echo "$data[noHP]";?>" required></td>
            </tr>
            <tr> 
                <td style="text-align: center;"><input type="submit" name="simpan" value="UPDATE" class="btn"></td>
            </tr>
        </form>
    </table>
    <br><br><br>
        <center>
			<a href="view.php" style="padding:0.2% 0.4%;background-color :#ff1b5b; color:#fff;border-radius:5px;text-decoration:none;">🔃Kembali</a>
		</center>
</body>
</html>

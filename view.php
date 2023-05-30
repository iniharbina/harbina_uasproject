<?php

session_start();
$form_error = '';

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style1.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet">
    <title>Data Mahasiswa</title>
</head>
<body>
    <table class="table1" border="3" cellspacing="0" cellpadding="5" align="center">
        <tr>
            <center><font size="7" face="Century Gothic">Data Mahasiswa</font></center>
        </tr>
        <tr>
            <br>
            <tr>
                <center>
                    <a href="create.php" style="padding:0.2% 0.4%; background-color:#ff1b5b; color:#fff; border-radius:5px; text-decoration:none;">➕ Tambah Data</a>
                    <a href="logout.php" style="padding:0.2% 0.4%; background-color:#ff1b5b; color:#fff; border-radius:5px; text-decoration:none;">Logout</a>
                </center>
            </tr>
            <br>
        </tr>
        <tr>
            <th>NIM</th>
            <th>Nama</th>
            <th>Prodi</th>
            <th width="2" align="left">Alamat</th>
            <th>No HP</th>
            <th>Opsi</th>
        </tr>

    <?php
    include 'koneksi.php';
    $select = mysqli_query($conn, "SELECT * FROM t_mahasiswa");

    if(mysqli_num_rows($select) > 0) {
        while($hasil = mysqli_fetch_array($select)) {
    ?>
      
      <tr>
        <td><?php echo $hasil['nim'] ?></td>
        <td><?php echo $hasil['nama'] ?></td>
        <td><?php echo $hasil['prodi'] ?></td>
        <td><?php echo $hasil['alamat'] ?></td>
        <td><?php echo $hasil['noHP'] ?></td>
        <td>
            <a href="update.php?nim=<?php echo $hasil['nim'] ?>">🔜 Edit</a> |
            <a href="delete.php?nim=<?php echo $hasil['nim'] ?>">❌Delete</a>
        </td>
    </tr>
       
    <?php }} else{ ?>
    <tr>
        <td colspan="6" align="center">Data None</td>
    </tr>
    <?php } ?>

    </table>
        
</body>
</html>

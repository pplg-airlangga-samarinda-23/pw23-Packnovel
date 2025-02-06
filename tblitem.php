<!-- menampilkan data dari database ke tabel -->
<?php

require 'koneksi.php';

// ambil data di sini, nampilkannya di bawah
$sql = "SELECT * FROM tblitem";
$rows = $koneksi->execute_query($sql)->fetch_all(MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>[tblitem]</title>
</head>
<body>
    <h1>Halaman [tblitem]</h1>

    <a href="tblitem-tambah.php">Tambah Data</a>
    <table>
        <thead>
        <tr>
            <th>nama</th>
            <th>kehadiran</th>
            <th>keterangan</th>
            <th>tanggal</th>
        </tr>



        </thead>
        
        
        
        <tbody>
        


            <!-- foreach dengan sintaks alternatif -->
            <?php $no=0; foreach ($rows as $row) : ?>
            <tr>
                <td><?= ++$no ?></td>
                <td><?php echo $row['nama']; ?></td>
                <td><?php echo $row['kehadiran']; ?></td>
                <td><?php echo $row['keterangan']; ?></td>
                <td><?php echo $row['tanggal']; ?></td>
                <td>
                    <a href="tblitem-edit.php?id=<?= $row['id'] ?>">Edit</a>
                    <a href="tblitem-hapus.php?id=<?= $row['id'] ?>">Hapus</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>

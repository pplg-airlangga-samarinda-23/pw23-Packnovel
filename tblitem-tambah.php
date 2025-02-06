<?php
require "koneksi.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nama = $_POST["nama"];
    $kehadiran = $_POST["kehadiran"];
    $keterangan = $_POST["keterangan"];
    $tanggal = $_POST["tanggal"];


    $sql = "INSERT INTO tblitem (nama, kehadiran, keterangan, tanggal) values (?, ?, ?, ?)";
    // PHP 8.2
    $row = $koneksi->execute_query($sql, [$nama, $kehadiran,$keterangan,$tanggal]);


    // untuk semua versi PHP
    // $stmt = $koneksi->prepare($sql);
    // $stmt->bind_param("sis", $nama, $stok, $status);
    // $stmt->execute();

    header("location:tblitem.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Tambah Barang</title>
</head>

<body>
    <h1 style="font-size:large;">Tambah tamu</h1>
    <form action="" method="post">
        <div class="form-item">
            <label for="nama">Nama </label>
            <input type="text" name="nama" id="nama">
        </div>
        <div class="form-item">
            <label for="tanggal">date</label>
            <input type="date" name="tanggal" id="tanggal">
        </div>
        <div class="form-item">
            <label for="kehadiran">kehadiran</label>
            <select name="kehadiran" id="kehadiran">
                <option value="" disabled selected>Pilih kehadiran</option>
                <option value="hadir">hadir</option>
                <option value="tidak hadir">tidak hadir</option>
            </select>
        </div>
        <div class="form-item">
            <label for="keterangan">keterangan</label>
            <input type="text" name="keterangan" id="keterangan">
        </div>
        <button type="submit">Submit</button>
    </form>
    <a href="tblitem.php">Kembali</a>
</body>

</html>

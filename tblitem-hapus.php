<?php
require 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_GET['id'];
    $sql = "DELETE FROM [nama-tabel] WHERE id = '$id'";
    $row = $koneksi->execute_query($sql, [$id]);
    if ($row) {
        header("location:[nama-tabel].php");
    }
}
?>
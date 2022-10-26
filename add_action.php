<?php
include 'connect.php';

$nama_barang = $_POST['nama_barang'];
$kategori = $_POST['kategori'];
$jumlah = $_POST['jumlah'];

mysqli_query($connect, "insert into barang values('','$nama_barang','$kategori','$jumlah')");

header("location:index.php");

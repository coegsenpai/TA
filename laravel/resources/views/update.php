<?php

//include koneksi database
include('koneksi.php');

//get data dari form
$id = $_POST['id'];
$judul = $_POST['judul'];
$penulis = $_POST['penulis'];
$isbn = $_POST['isbn'];
$kategori = $_POST['kategori'];
$harga = $_POST['harga'];

//query update data ke dalam database berdasarkan ID
$query = "UPDATE tbl_buku SET judul = '$judul', penulis = '$penulis',
isbn = '$isbn', kategori = '$kategori', harga = '$harga' WHERE id = '$id'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if ($connection->query($query)) {
    //redirect ke halaman index.php
    header("location: index.php");
} else {
//pesan error gagal update data
echo "Data Gagal Diupate!";
}
?>
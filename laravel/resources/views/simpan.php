<?php

//include koneksi database
include('koneksi.php');

//get data dari form
$judul = $_POST['judul'];
$penulis = $_POST['penulis'];
$isbn = $_POST['isbn'];
$kategori = $_POST['kategori'];
$harga = $_POST['harga'];

//query insert data ke dalam database
$query = "INSERT INTO tbl_buku (judul, penulis, isbn, kategori, harga) VALUES
('$judul', '$penulis', '$isbn' , '$kategori' , '$harga')";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($connection->query($query)) {

    //redirect ke halaman index.php
    header("location: index.php");

} else {

    //pesan error gagal insert data 
    echo "Data Gagal Disimpan!";
}

?>
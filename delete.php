<?php 
// koneksi database
include 'connection.php';

// menangkap data yang di kirim dari form
$id = $_GET["id"];
 
// menginput data ke database
$perintah = "DELETE FROM `latihan` WHERE `id`='$id'";
$hasil = mysqli_query($koneksi,$perintah);

//if($hasil){
//	echo "BERHASIL mengubah";
//} else {
//	echo "GAGAL mengubah";}

// mengalihkan halaman kembali ke index.php
header("location:index.php");

?>
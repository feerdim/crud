<?php 
// koneksi database
include 'connection.php';
 
// menangkap data yang di kirim dari form
$nama = $_POST["nama"];
$npm = $_POST["npm"];
$nilai = $_POST["nilai"];
 
// menginput data ke database
$perintah = "INSERT INTO `latihan` (`id`, `nama`, `npm`, `nilai`) VALUES (NULL,'$nama','$npm','$nilai')";
$hasil = mysqli_query($koneksi,$perintah);

//if($hasil){
//	echo "BERHASIL Menambahkan nama=".$nama." npm=".$npm." nilai=".$nilai;
//} else {
//	echo "GAGAL Menambahkan";}

// mengalihkan halaman kembali ke index.php
header("location:input.php");
 
?>
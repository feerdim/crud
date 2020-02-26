<?php 
// koneksi database
include 'connection.php';

// menangkap data yang di kirim dari form
$id = $_POST["id"];
$nama = $_POST["nama"];
$npm = $_POST["npm"];
$nilai = $_POST["nilai"];
 
// menginput data ke database
$perintah = "UPDATE `latihan` SET `nama`='$nama', `npm`='$npm', `nilai`='$nilai' where `id`='$id'";
$hasil = mysqli_query($koneksi,$perintah);
$loc = "edit.php?id=".$id;
//if($hasil){
//	echo "BERHASIL mengubah nama=".$nama." npm=".$npm." nilai=".$nilai;
//} else {
//	echo "GAGAL mengubah";}

// mengalihkan halaman kembali ke index.php
header("location: $loc");

?>
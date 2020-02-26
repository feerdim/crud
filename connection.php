<?php
// Koneksi XAMPP
$host = 'localhost'; //Dikasih oleh penyedia hosting
$username ='root';//Dikasih oleh penyedia hosting
$password ='';//Dikasih oleh penyedia hosting
$db_name = 'test'; //nama database yg akan digunakan

$koneksi = mysqli_init(); //Untuk inisiasi akan memakai mysqli
mysqli_real_connect($koneksi,$host,$username,$password,$db_name,3306); //mengkoneksikan mysqli>3306(port mysql default)

if(mysqli_connect_errno($koneksi)) {
  die('Gagal : '.mysqli_connect_error()); //jika menggunakan die kode setelah die tidak akan dieksekusi
}
?>
<?php
error_reporting(0);
  $nama=$_POST["nama"];
  $npm=$_POST["npm"];

  // Koneksi XAMPP
  $host = 'localhost';  //Dikasih oleh penyedia hosting
  $username ='root';    //Dikasih oleh penyedia hosting
  $password ='';        //Dikasih oleh penyedia hosting
  $db_name = 'test';    //Nama database yg akan digunakan

  $koneksi = mysqli_init(); //Untuk inisiasi akan memakai mysqli
  mysqli_real_connect($koneksi,$host,$username,$password,$db_name,3306); //mengkoneksikan mysqli
  if(mysqli_connect_errno($koneksi)) {
    die('Gagal : '.mysqli_connect_error());
  }
  $perintah = "SELECT * FROM `latihan` WHERE `nama` = '$nama' AND `npm` = '$npm';"; // membaca data
  $hasil=mysqli_query($koneksi,$perintah);
  if(mysqli_num_rows($hasil) > 0){
    echo "BERHASIL";
  }
  else {
    echo "GAGAL";
  } // akhir if(isset($_POST["login"]))
?>
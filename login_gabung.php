<?php
error_reporting(0);
session_start();
if(isset($_GET["deleted"])) { // jika akun sdah dihapus
	echo "Akun anda sudah dihapus";
}
if(isset($_GET["error"])) { // jika error
	echo "Silahkan login terlebih dahulu"; // karena mengakses halaman
	// yang harusnya login dulu
}
if($_SESSION['id'] != "") { // sudah punya session
header('Location: update.php'); // dipindah ke halaman update
}
if(isset($_POST["login"])) {
  $nama=$_POST["nama"];
  $npm=$_POST["npm"];
  
//  echo $nama."<br>".$npm; //debug

  // Koneksi XAMPP
  $host = 'localhost'; //Dikasih oleh penyedia hosting
  $username ='root';//Dikasih oleh penyedia hosting
  $password ='';//Dikasih oleh penyedia hosting
  $db_name = 'test'; //nama database yg akan digunakan

  $koneksi = mysqli_init(); //Untuk inisiasi akan memakai mysqli
  mysqli_real_connect($koneksi,$host,$username,$password,$db_name,3306); //mengkoneksikan mysqli
  if(mysqli_connect_errno($koneksi)) {
  die('Gagal : '.mysqli_connect_error());
  }
  $perintah = "SELECT * FROM `latihan` WHERE `nama` = '$nama' AND `npm` = '$npm';"; // membaca data
  $hasil=mysqli_query($koneksi,$perintah);
//  print_r($hasil);
  if(mysqli_num_rows($hasil) > 0){
//	echo "BERHASIL";
	$arr = mysqli_fetch_array($hasil); // mengambil row
//	echo $arr['id']."<br>".$arr['nama']."<br>".$arr['npm']."<br>";
	// pengisian session
	$_SESSION['id'] = $arr['id'];
	$_SESSION['nama'] = $arr['nama'];
	$_SESSION['npm'] = $arr['npm'];
	header('Location: update.php');
  } else {
	echo "GAGAL";
  }
} // akhir if(isset($_POST["login"]))
 ?>
<!DOCTYPE html>
<html>
  <head>
    <title>Form</title>
  </head>
  <body>
    <form action="login_gabung.php" method="post"> <!--di olah oleh file onlogin.php, metodenya get, saat di klik new tab -->
    <p>Nama :<input type="text" name="nama" value="" size="30"></p> <!-- tipe nya text,key nya nama, nilai nya Muhamad Oc,-->
    <p>NPM : <input type="text" name="npm"></p><!--tulisannya karakter biasa -->
  <input class="tombol" type="submit" name="login" value="Login" >
    </form>
</body>
</html>

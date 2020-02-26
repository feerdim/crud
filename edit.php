<!DOCTYPE html>
<html>
  <head>
  	<title>Edit Data Nilai Mahasiswa</title>
  </head>
  <body>
	<h2>Edit Data Nilai Mahasiswa</h2>
	<br/>
	<a href="index.php">KEMBALI</a>
	<br/>
  <?php
  //error_reporting(0);
  include 'connection.php';
  $id=$_GET['id'];
  $data="SELECT * FROM `latihan` where id='$id'";
  $edit=mysqli_query($koneksi,$data);
  while($d=mysqli_fetch_array($edit)){
    ?>
    <form action="dbedit.php" method="post"> <!--diumpan ke onlogin.php dengan metode post-->
      <p><input type="hidden" name="id" value="<?php echo $d['id'];?>"></p>
      <p>Nama :<input type="text" name="nama" value="<?php echo $d['nama'];?>"></p> <!-- Variabel nama dengan tipe data text -->
      <p>NPM : <input type="number" name="npm" value="<?php echo $d['npm'];?>"></p> <!-- Variabel npm dengan tipe data text -->
      <p>Nilai : <input type="text" name="nilai" value="<?php echo $d['nilai'];?>"></p>
      <input class="tombol" type="submit" value="UPDATE" >
    </form>
    <?php
  }
	?>
</body>
</html>
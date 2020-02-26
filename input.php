<!DOCTYPE html>
<html>
  <head>
  	<title>Input Data Nilai Mahasiswa</title>
  </head>
  <body>
	<h2>Input Data Nilai Mahasiswa</h2>
	<br/>
	<a href="index.php">KEMBALI</a>
	<br/>
	<form action="dbinput.php" method="post"> <!--diumpan ke onlogin.php dengan metode post-->
      <p>Nama :<input type="text" name="nama"></p> <!-- Variabel nama dengan tipe data text -->
      <p>NPM : <input type="number" name="npm"></p> <!-- Variabel npm dengan tipe data text -->
      <p>Nilai : <input type="text" name="nilai"></p>
      <input class="tombol" type="submit" value="INPUT" >
    </form>
</body>
</html>
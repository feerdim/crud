<!DOCTYPE html>
<html>
  <head>
    <title>Form</title>
  </head>
  <body>
    <h2>TABEL DATA NILAI MAHASISWA</h2>
    <br/>
    <a href="input.php">INPUT DATA</a>
    <br/>
    <table border="1">
      <tr>
        <th>No</th>
        <th>Nama</th>
        <th>NPM</th>
        <th>Nilai</th>
        <th>Opsi</th>
      </tr>
<?php
  include 'connection.php';
  $no = 1;
  $data = "SELECT * FROM `latihan`";
  $tampil=mysqli_query($koneksi,$data);
  while($d=mysqli_fetch_array($tampil)){
    ?>
    <tr>
      <td><?php echo $no++; ?></td>
      <td><?php echo $d['nama']; ?></td>
      <td><?php echo $d['npm']; ?></td>
      <td><?php echo $d['nilai']; ?></td>
      <td>
        <a href="edit.php?id=<?php echo $d['id']; ?>">EDIT</a>
        <a href="delete.php?id=<?php echo $d['id']; ?>">DELETE</a>
      </td>
    </tr>
    <?php
  }
?>
</table>


<!--    <form action="onlogin.php" method="post" target="_blank"> <!--diumpan ke onlogin.php dengan metode post, saat diklik new tab -->
<!--      <h2>Login Database</h2>
    	<p>Nama :<input type="text" name="nama" value="" size="30"></p> <!-- Variabel nama dengan tipe data text -->
<!--      <p>NPM : <input type="text" name="npm"></p> <!-- Variabel npm dengan tipe data text -->
<!--      <input class="tombol" type="submit" value="Login" >
    </form>-->
  </body>
</html>
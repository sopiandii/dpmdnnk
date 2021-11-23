<?php
require 'functions.php';

$pegawai = query("SELECT * FROM pegawai");


if (isset($_POST["tambah"])) {
  header("Location: tambah.php");
  exit;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Pegawai</title>
</head>

<body>
  <h1>Daftar Pegawai</h1>

  <form action="" method="POST">
    <button type="submit" name="tambah">Tambah Data Pegawai</button>
    <br><br>
  </form>


  <table border="1" cellpadding="10" cellspacing="0">
    <tr>
      <th>No.</th>
      <th>Aksi</th>
      <th>Foto</th>
      <th>NIP</th>
      <th>Nama Pegawai</th>
      <th>Pangkat, Gol.</th>
      <th>Jabatan</th>
    </tr>
    <?php $i = 1 ?>
    <?php foreach ($pegawai as $pns) : ?>
      <tr>
        <td><?= $i; ?></td>
        <td>
          <a href="">ubah</a> | <a href="hapus.php?id=<?= $pns["id"]; ?>" onclick="return confirm('Hapus data?');">hapus</a>
        </td>
        <td><img src="img/<?= $pns["gambar"]; ?>" width="40"></td>
        <td><?= $pns["nip"]; ?></td>
        <td><?= $pns["nama"]; ?></td>
        <td><?= $pns["pangkat"]; ?></td>
        <td><?= $pns["jabatan"]; ?></td>
      </tr>
      <?php $i++; ?>
    <?php endforeach; ?>

  </table>

</body>

</html>
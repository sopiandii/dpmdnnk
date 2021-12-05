<?php
session_start();
if (!isset($_SESSION["login"])) {
  header("Location: login.php");
  exit;
}

require 'functions.php';

$pegawai = query("SELECT * FROM pegawai");

if (isset($_POST["tambah"])) {
  header("Location: tambah.php");
  exit;
}

if (isset($_POST["daftar"])) {
  header("Location: registrasi.php");
  exit;
}

if (isset($_POST["logout"])) {
  header("Location: logout.php");
  exit;
}

if (isset($_POST["cari"])) {
  $pegawai = cari($_POST["keyword"]);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Pegawai</title>

  <style>
    .loader {
      width: 100px;
      position: absolute;
      top: 128px;
      left: 285px;
      z-index: -1;
      display: none;
    }

    @media print {

      .user,
      .logout,
      .form-cari,
      .aksi {
        display: none;
      }
    }
  </style>

  <script src="js/jquery-3.6.0.min.js"></script>
  <script src="js/script.js"></script>
</head>

<body>

  <form action="" method="POST">
    <button type="submit" name="daftar" class="user">Tambah user baru</button>
    <button type="submit" name="logout" class="logout">Keluar</button>
    <br>
  </form>

  <h1>Daftar Pegawai</h1>

  <form action="" method="POST" class="form-cari">
    <button type="submit" name="tambah">Tambah Data Pegawai</button> | <a href="cetak.php" target="_blank">Cetak</a>
    <!-- <button type="submit" name="cetak" target="_blank">Cetak</button> -->
    <br><br>
    <input type="text" name="keyword" placeholder="Masukkan nama pegawai..." autocomplete="off" autofocus size="40" id="keyword">
    <button type="submit" name="cari" id="tombol-cari">Cari</button>
    <img src="img/loading.gif" class="loader">
    <br><br>
  </form>

  <br>

  <div id="container">
    <table border="1" cellpadding="10" cellspacing="0">
      <tr>
        <th>No.</th>
        <th class="aksi">Aksi</th>
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
          <td class="aksi">
            <a href="ubah.php?id=<?= $pns["id"]; ?>">ubah</a> | <a href="hapus.php?id=<?= $pns["id"]; ?>" onclick="return confirm('Hapus data?');">hapus</a>
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
  </div>

</body>

</html>
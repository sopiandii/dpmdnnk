<?php
session_start();
if (!isset($_SESSION["login"])) {
  header("Location: login.php");
  exit;
}

require 'functions.php';

// pagination
// konfigurasi
$jumlahDataPerHalaman = 5; //untuk menentukan berapa jumlah data yang ditampilkan per halaman
$jumlahData = count(query("SELECT * FROM pegawai")); //untuk menghitung jumlah seluruh data dalam database
$jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman); //untuk menghitung banyaknya halaman yang akan dibuat
$halamanAktif = (isset($_GET["halaman"])) ? $_GET["halaman"] : 1; //untuk menentukan halaman yang sedang aktif
$awalData = ($jumlahDataPerHalaman * $halamanAktif) - $jumlahDataPerHalaman; //untuk menentukan index data awal tiap halaman
$pegawai = query("SELECT * FROM pegawai LIMIT $awalData, $jumlahDataPerHalaman"); //untuk menentukan index data awal dan jumlah data yg ditampilkan


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
</head>

<body>

  <form action="" method="POST">
    <button type="submit" name="daftar">Tambah user baru</button>
    <button type="submit" name="logout">Keluar</button>
    <br>
  </form>

  <h1>Daftar Pegawai</h1>

  <form action="" method="POST">
    <button type="submit" name="tambah">Tambah Data Pegawai</button>
    <br><br>
    <input type="text" name="keyword" placeholder="Masukkan nama pegawai..." autocomplete="off" autofocus size="40" id="keyword">
    <button type="submit" name="cari" id="tombol-cari">Cari</button>
    <br><br>
  </form>

  <!-- navigasi -->
  <?php if (!isset($_POST["cari"])) : ?>
    <?php if ($halamanAktif > 1) : ?>
      <a href="?halaman=<?= $halamanAktif - 1; ?>">&laquo;</a>
    <?php endif; ?>

    <?php for ($i = 1; $i <= $jumlahHalaman; $i++) : ?>
      <?php if ($i == $halamanAktif) : ?>
        <a href="?halaman=<?= $i; ?>" style="font-weight: bolder; color:red"><?= $i; ?></a>
      <?php else : ?>
        <a href="?halaman=<?= $i; ?>"><?= $i; ?></a>
      <?php endif; ?>
    <?php endfor; ?>

    <?php if ($halamanAktif < $jumlahHalaman) : ?>
      <a href="?halaman=<?= $halamanAktif + 1; ?>">&raquo;</a>
    <?php endif; ?>
  <?php endif; ?>
  <br>

  <div id="container">
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
  <script src="js/script.js"></script>
</body>

</html>
<?php
// sleep(1);
require '../functions.php';
$keyword = $_GET["keyword"];

$query = "SELECT * FROM pegawai WHERE nama LIKE '%$keyword%'";

$pegawai = query($query);

?>

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
<?php
require 'functions.php';

$id = $_GET["id"];
$pns = query("SELECT * FROM pegawai WHERE id = $id")[0];


if (isset($_POST["submit"])) {
  if (ubah($_POST) > 0) {
    echo "
      <script>
        alert('Data berhasil diubah!');
        document.location.href = 'index.php';
      </script>
    ";
  } else {
    echo "
      <script>
        alert('Data gagal diubah!');
        document.location.href = 'index.php';
      </script>
    ";
  }
}


// if (isset($_POST["batal"])) {
//   header("Location: index.php");
//   exit;
// }

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ubah Data</title>
</head>

<body>
  <h1>Ubah Data Pegawai</h1>

  <form action="" method="POST">
    <input type="hidden" name="id" required value="<?= $pns["id"]; ?>">
    <ul>
      <li>
        <label>
          NIP :
          <input type="text" name="nip" required value="<?= $pns["nip"]; ?>">
        </label>
      </li>
      <li>
        <label>
          Nama Pegawai :
          <input type="text" name="nama" required value="<?= $pns["nama"]; ?>">
        </label>
      </li>
      <li>
        <label>
          Pangkat :
          <input type="text" name="pangkat" required value="<?= $pns["pangkat"]; ?>">
        </label>
      </li>
      <li>
        <label>
          Jabatan :
          <input type="text" name="jabatan" required value="<?= $pns["jabatan"]; ?>">
        </label>
      </li>
      <li>
        <label>
          Foto :
          <input type="text" name="gambar" required value="<?= $pns["gambar"]; ?>">
        </label>
      </li>
      <br>
      <button type="submit" name="submit">Simpan</button>
      <a href="index.php">Kembali</a>
      <!-- <button type="button" name="batal">Batal</button> -->
    </ul>
  </form>
</body>

</html>
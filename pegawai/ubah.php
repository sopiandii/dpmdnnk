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

  <form action="" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?= $pns["id"]; ?>">
    <input type="hidden" name="gambarLama" value="<?= $pns["gambar"]; ?>">

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
          <input type="text" name="nama" required value="<?= $pns["nama"]; ?>" size="40">
        </label>
      </li>
      <li>
        <label>
          Pangkat :
          <input type="text" name="pangkat" required value="<?= $pns["pangkat"]; ?>" size="40">
        </label>
      </li>
      <li>
        <label>
          Jabatan :
          <input type="text" name="jabatan" required value="<?= $pns["jabatan"]; ?>" size="40">
        </label>
      </li>
      <li>
        <label>
          Foto :
          <br>
          <img src="img/<?= $pns["gambar"]; ?>" width="40"> <br>
          <input type="file" name="gambar">
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
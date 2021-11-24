<?php
require 'functions.php';

if (isset($_POST["submit"])) {
  if (tambah($_POST) > 0) {
    echo "
      <script>
        alert('Data berhasil disimpan!');
        document.location.href = 'index.php';
      </script>
    ";
  } else {
    echo "
      <script>
        alert('Data gagal disimpan!');
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
  <title>Tambah Data</title>
</head>

<body>
  <h1>Tambah Data Pegawai</h1>

  <form action="" method="POST" enctype="multipart/form-data">
    <ul>
      <li>
        <label>
          NIP :
          <input type="text" name="nip" required>
        </label>
      </li>
      <li>
        <label>
          Nama Pegawai :
          <input type="text" name="nama" size="40" required>
        </label>
      </li>
      <li>
        <label>
          Pangkat :
          <input type="text" name="pangkat" size="40" required>
        </label>
      </li>
      <li>
        <label>
          Jabatan :
          <input type="text" name="jabatan" size="50" required>
        </label>
      </li>
      <li>
        <label>
          Foto :
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
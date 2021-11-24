<?php
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "phpdasar");


function query($query)
{
  global $conn;
  $result = mysqli_query($conn, $query);
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}

function tambah($data)
{
  global $conn;

  $nip = htmlspecialchars($data["nip"]);
  $nama = htmlspecialchars($data["nama"]);
  $pangkat = htmlspecialchars($data["pangkat"]);
  $jabatan = htmlspecialchars($data["jabatan"]);
  $gambar = htmlspecialchars($data["gambar"]);

  $query = "INSERT INTO pegawai 
            VALUES
            ('', '$nip', '$nama', '$pangkat', '$jabatan', '$gambar')
            ";

  mysqli_query($conn, $query);
  return mysqli_affected_rows($conn);
}

function hapus($id)
{
  global $conn;
  mysqli_query($conn, "DELETE FROM pegawai WHERE id = $id");
  return mysqli_affected_rows($conn);
}

function ubah($data)
{
  global $conn;

  $id = htmlspecialchars($data["id"]);
  $nip = htmlspecialchars($data["nip"]);
  $nama = htmlspecialchars($data["nama"]);
  $pangkat = htmlspecialchars($data["pangkat"]);
  $jabatan = htmlspecialchars($data["jabatan"]);
  $gambar = htmlspecialchars($data["gambar"]);

  $query = "UPDATE pegawai SET
            nip = '$nip',
            nama = '$nama',
            pangkat = '$pangkat',
            jabatan = '$jabatan',
            gambar = '$gambar'
            WHERE id = '$id'
            ";
  mysqli_query($conn, $query);
  return mysqli_affected_rows($conn);
}

function cari($keyword)
{
  $query = "SELECT * FROM pegawai WHERE 
              nama LIKE '%$keyword%'";

  return query($query);
}

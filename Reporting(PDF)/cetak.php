<?php

require 'functions.php';

$pegawai = query("SELECT * FROM pegawai");

require_once __DIR__ . '/vendor/autoload.php';

$html = '<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Pegawai</title>
  <link rel="stylesheet" href="css/print.css">
</head>
<body>

  <h1>Daftar Pegawai DPMD Nunukan</h1>

  <table border="1" cellpadding="10" cellspacing="0">
      <tr>
        <th>No.</th>
        <th>Foto</th>
        <th>NIP</th>
        <th>Nama Pegawai</th>
        <th>Pangkat, Gol.</th>
        <th>Jabatan</th>
      </tr>';

$i = 1;
foreach ($pegawai as $pns) {
  $html .= '<tr>
            <td>' . $i++ . '</td>
            <td><img src="img/' . $pns["gambar"] . '" width="30"></td>
            <td>' . $pns["nip"] . '</td>
            <td>' . $pns["nama"] . '</td>
            <td>' . $pns["pangkat"] . '</td>
            <td>' . $pns["jabatan"] . '</td>
        </tr>';
}


$html .= '</table>  
</body>
</html>
';

$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML($html);
$mpdf->Output('daftar-pegawai-dpmd.pdf', 'I');

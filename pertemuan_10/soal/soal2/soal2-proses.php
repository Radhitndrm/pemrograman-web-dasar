<html>

<head>
  <title>Hitung Gaji Karyawan</title>
</head>

<body>
  <h1>Hitung Gaji Karyawan</h1>
  <?php
  $jamKerja = $_POST['jamKerja'];

  if ($jamKerja > 48) {
    $jamLembur = $jamKerja - 48;
    $gaji = ($jamLembur * 3000) + 96000;
    echo "<p> Total Jam Kerja minggu ini adalah " . $jamKerja . ", dengan Jam Lembur " . $jamLembur . "Mendapat gaji sebesar " . $gaji;
  }
  ?>
</body>

</html>

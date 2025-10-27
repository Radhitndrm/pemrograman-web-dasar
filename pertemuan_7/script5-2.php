<html>

<head>
  <title>Menghitung Gaji Bersih Karyawan</title>
</head>

<body>
  <h1>Menghitung Komisi Salesman </h1>
  <?php

  $gajiPokok = 1000000;
  $tunjangan = 500000;
  $gajiKotor = $gajiPokok + $tunjangan;
  $pajak = 0.15 * $gajiKotor;
  $gajiBersih = $gajiPokok + $tunjangan - $pajak;
  echo "<p> Gaji Bersih Karyawan Adalah Rp. " . $gajiBersih . "</p>";

  $gajiPokok = 1000000;
  $tunjangan = 500000;
  $gajiKotor = $gajiPokok + $tunjangan;
  $gajiBersih = $gajiKotor - (0.15 * $gajiKotor);
  echo "<p> Gaji Bersih Karyawan Adalah Rp. " . $gajiBersih . "</p>";

  $gajiPokok = 1000000;
  $tunjangan = 500000;
  $gajiBersih = $gajiPokok + $tunjangan - 0.15 * ($gajiPokok + $tunjangan);
  echo "<p> Gaji Bersih Karyawan Adalah Rp. " . $gajiBersih . "</p>";
  ?>
</body>

</html>

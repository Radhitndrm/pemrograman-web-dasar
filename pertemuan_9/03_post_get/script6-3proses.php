<html>

<head>
  <title>Menghitung Selisih dua Waktu</title>
</head>

<body>
  <h1>Menghitung Selisih Dua Waktu</h1>
  <?php
  $jam1 = $_POST['jam1'];
  $menit1 = $_POST['menit1'];
  $detik1 = $_POST['detik1'];


  $jam2 = $_POST['jam2'];
  $menit2 = $_POST['menit2'];
  $detik2 = $_POST['detik2'];

  $totalDetik1 = $jam1 * 3600 + $menit1 * 60 + $detik1;
  $totalDetik2 = $jam2 * 3600 + $menit2 * 60 + $detik2;

  $selisih = $totalDetik1 - $totalDetik2;

  echo "<p>Selisih dari kedua waktu adalah " . $selisih . " detik"
  ?>
</body>

</html>

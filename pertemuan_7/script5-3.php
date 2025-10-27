<html>

<head>
  <title>Konversi Waktu Tempuh ke Detik</title>
</head>

<body>
  <h1>Konversi Waktu Tempuh ke Detik</h1>
  <?php
  $jam = 10;
  $menit = 16;
  $detik = 42;

  $jamKeDetik = $jam * 3600;
  $menitKeDetik = $menit * 60;

  $totalDetik = $jamKeDetik + $menitKeDetik + $detik;

  echo "<p>Jika waktu " . $jam . ":" . $menit . ":" . $detik . " dinyatakan dalam satuan detik adalah: " . $totalDetik . " detik.</p>";
  ?>
</body>

</html>

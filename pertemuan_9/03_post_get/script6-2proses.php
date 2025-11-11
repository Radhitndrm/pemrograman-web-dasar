<html>

<head>
  <title>Menghitung Komisi Salesman</title>
</head>

<body>
  <h1>Menghitung Komisi Salesman</h1>
  <?php
  $nilaiJual = $_POST['penjualan'];
  $prosesKomisi = $_POST['komisi'];
  $komisi = $nilaiJual * $prosesKomisi / 100;

  echo "<p>Nilai penjualan salesman : Rp. " . $nilaiJual . "</p>";
  echo "<p>Presentase Komisi :" . $prosesKomisi . " % </p>";
  echo "<p>Komisi yang didapat salesman adalah : Rp. " . $komisi . "</p>";
  ?>
</body>

</html>

<html>

<head>
  <title>Tahun Kabisat</title>
</head>

<body>
  <h1>Tahun Kabisat</h1>
  <h2>Masukan Tahun</h2>
  <?php
  $tahun = $_POST['tahun'];
  if ($tahun % 4 == 0) {
    echo "<p> Tahun " . $tahun . " Merupakan tahun Kabisat";
  } else {
    echo "<p> Tahun " . $tahun . " Merupakan BUKAN tahun Kabisat";
  }
  ?>
</body>

</html>

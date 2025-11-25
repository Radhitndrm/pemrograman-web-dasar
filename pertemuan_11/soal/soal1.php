<!DOCTYPE html>
<html>

<head>
  <title>Hitung Saldo Akhir Tabungan</title>
</head>

<body>

  <h2>Form Perhitungan Saldo Tabungan</h2>

  <form method="POST">
    Saldo Awal (Rp): <br>
    <input type="number" name="saldo_awal" required> <br><br>

    Jumlah Bulan (N): <br>
    <input type="number" name="bulan" required> <br><br>

    <button type="submit">Hitung</button>
  </form>

  <hr>

  <?php
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $saldo = $_POST['saldo_awal'];
    $bulan = $_POST['bulan'];

    $admin = 9000;

    for ($i = 1; $i <= $bulan; $i++) {

      if ($saldo < 1100000) {
        $bunga_tahunan = 0.03;
      } else {
        $bunga_tahunan = 0.04;
      }

      $bunga_bulanan = $bunga_tahunan / 12;

      $bunga = $saldo * $bunga_bulanan;

      $saldo = $saldo + $bunga - $admin;
    }

    echo "<h3>Hasil Perhitungan</h3>";
    echo "Saldo akhir setelah $bulan bulan adalah: <b>Rp " . number_format($saldo, 0, ',', '.') . "</b>";
  }
  ?>

</body>

</html>

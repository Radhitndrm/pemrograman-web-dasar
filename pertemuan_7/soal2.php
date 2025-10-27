
<?php
$jumlahUang = 1575250;
$pecahan = [100000, 50000, 20000, 5000, 100, 50];

echo "Total uang: Rp" . number_format($jumlahUang, 0, ',', '.') . "<br><br>";

foreach ($pecahan as $uang) {
  $lembar = intdiv($jumlahUang, $uang);
  $jumlahUang %= $uang;
  echo "Rp" . number_format($uang, 0, ',', '.') . " : " . $lembar . " lembar<br>";
}
?>

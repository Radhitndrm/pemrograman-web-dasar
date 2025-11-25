
<?php
$jumlah = 0;

for ($x = 1; $x < 25; $x++) {
  for ($y = 1; $y < 25; $y++) {
    $z = 25 - $x - $y;

    if ($z >= 1) {
      echo "x = $x, y = $y, z = $z<br>";
      $jumlah++;
    }
  }
}

echo "<br>Jumlah penyelesaian: $jumlah";
?>

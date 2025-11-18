<?php
if (isset($_POST['hitung'])) {
  $jam = $_POST['jam'];
  $golongan = $_POST['golongan'];

  switch ($golongan) {
    case "A":
      $upah_per_jam = 4000;
      break;
    case "B":
      $upah_per_jam = 5000;
      break;
    case "C":
      $upah_per_jam = 6000;
      break;
    case "D":
      $upah_per_jam = 7500;
      break;
    default:
      $upah_per_jam = 0;
  }

  $upah_lembur = 3000;

  if ($jam > 48) {
    $jam_lembur = $jam - 48;
    $jam_normal = 48;

    $total = ($jam_normal * $upah_per_jam) + ($jam_lembur * $upah_lembur);
  } else {
    $total = $jam * $upah_per_jam;
  }

  echo "<h3>Total Upah Golongan $golongan: Rp. " . number_format($total, 0, ',', '.') . "</h3>";
}

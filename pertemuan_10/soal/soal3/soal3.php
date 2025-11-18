<!DOCTYPE html>
<html>

<head>
  <title>Hitung Upah Karyawan Berdasarkan Golongan</title>
</head>

<body>

  <h2>Form Menghitung Upah Karyawan Berdasarkan Golongan</h2>

  <form method="post" action="soal3-proses.php">
    Jumlah jam kerja per minggu:
    <input type="number" name="jam" required><br><br>

    <select name="golongan" required>
      <option value="">-- Pilih --</option>
      <option value="A">Golongan A</option>
      <option value="B">Golongan B</option>
      <option value="C">Golongan C</option>
      <option value="D">Golongan D</option>
    </select>
    <br><br>

    <input type="submit" name="hitung" value="Hitung Upah">
  </form>


</body>

</html>

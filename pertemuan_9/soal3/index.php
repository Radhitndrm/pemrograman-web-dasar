<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Soal 3</title>
</head>

<body>
  <h1>Isi Form ini</h1>
  <form action="script.php" method="post">
    <label for="nama">Nama</label> <br>
    <input type="text" name="nama" placeholder="Masukan Nama Anda" required> <br> <br>
    <label for="tempatLahir">Tempat Lahir</label> <br>
    <input type="text" name="tempat_lahir" placeholder="Masukan Tempat Lahir Anda" required><br><br>
    <label>Tanggal Lahir:</label><br>
    <select name="tgl">
      <?php
            for ($i = 1; $i <= 31; $i++) {
                echo "<option value='$i'>$i</option>";
            }
        ?>
    </select>

    <select name="bln">
      <?php
            for ($i = 1; $i <= 12; $i++) {
                echo "<option value='$i'>$i</option>";
            }
        ?>
    </select>

    <select name="thn">
      <?php
            for ($i = 1980; $i <= 2005; $i++) {
                echo "<option value='$i'>$i</option>";
            }
        ?>
    </select>
    <br><br>

    <label>Alamat Rumah:</label><br>
    <textarea name="alamat" rows="4" cols="40" required></textarea><br><br>

    <label>Jenis Kelamin:</label><br>
    <input type="radio" name="gender" value="Pria" required> Pria
    <input type="radio" name="gender" value="Wanita" required> Wanita
    <br><br>

    <label>Asal Sekolah:</label><br>
    <input type="text" name="asal_sekolah" required placeholder="Masukan asal sekolah Anda"><br><br>

    <label>Nilai UAN:</label><br>
    <input type="text" name="nilai_uan" placeholder="Masukan nilai UAN Anda" required><br><br>

    <button type="submit">Submit</button>
    <button type="reset">Reset</button>
  </form>

</body>

</html>

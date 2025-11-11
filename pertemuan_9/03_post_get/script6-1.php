<html>

<head>
  <title>Baca Input dari form</title>
</head>

<body>

  <h1>Baca Input dari Form</h1>
  <form action="script6-1proses.php" method="post">
    <table>
      <tr>
        <td>Nama Anda</td>
        <td>:</td>
        <td><input type="text" name="nama" size="30"></td>
      </tr>
      <tr>
        <td>Alamat</td>
        <td>:</td>
        <td><textarea name="alamat" rows="10" cols="20"></textarea></td>
      </tr>
      <tr>
        <td>Jenis Kelamin</td>
        <td>:</td>
        <td>
          <input type="radio" name="sex" value="L">Laki-Laki
          <input type="radio" name="sex" value="P">Perempuan
        </td>
      </tr>
      <tr>
        <td>Pilih Pekerjaan</td>
        <td>:</td>
        <td>
          <select name="job">
            <option value="Petani">Pekerjaanku adalah petani</option>
            <option value="Guru">Pekerjaanku adalah Guru</option>
            <option value="Dokter">Pekerjaanku adalah Dokter</option>
          </select>
        </td>
      </tr>
      <tr>
        <td>Status Menikah</td>
        <td>:</td>
        <td><input type="checkbox" name="status" value="menikah">Ya</td>
      </tr>
    </table>
    <input type="submit" name="submit" value="Submit"><input type="reset" name="reset" value="Hapus">
  </form>
</body>

</html>

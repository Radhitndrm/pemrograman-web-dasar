<html>

<head>
  <title>Baca Input dari form</title>
</head>

<body>
  <h1>Baca Input dari form</h1>
  <p>Berikut ini data yang telah Anda masukan dalam form</p>


  <?php
  $namaAnda = $_POST['nama'];
  $alamatAnda = $_POST['alamat'];
  $sexAnda = $_POST['sex'];
  $jobAnda = $_POST['job'];
  $statusMenikah = $_POST['status'];

  echo "<table>";
  echo "<tr><td>Nama Anda</td><td>:</td><td>" . $namaAnda . "</td></tr>";
  echo "<tr><td>Alamat Anda</td><td>:</td><td>" . $alamatAnda . "</td></tr>";
  echo "<tr><td>Jenis Kelamin Anda</td><td>:</td><td>" . $sexAnda . "</td></tr>";
  echo "<tr><td>Pekerjaan Anda</td><td>:</td><td>" . $jobAnda . "</td></tr>";
  echo "<tr><td>Status Menikah</td><td>:</td><td>" . $statusMenikah . "</td></tr>";
  echo "</table>"
  ?>
</body>

</html>

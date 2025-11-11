<?php
    $nama   = $_POST["nama"];
    $tempat = $_POST["tempat_lahir"];
    $tgl    = $_POST["tgl"];
    $bln    = $_POST["bln"];
    $thn    = $_POST["thn"];
    $alamat = $_POST["alamat"];
    $gender = $_POST["gender"];
    $asal   = $_POST["asal_sekolah"];
    $nilai  = $_POST["nilai_uan"];

    echo "<h3>Terimakasih $nama sudah mengisi form pendaftaran.</h3>";
    echo "Nama Lengkap : $nama <br>";
    echo "Tempat Lahir : $tempat <br>";
    echo "Tanggal Lahir : $tgl-$bln-$thn <br>";
    echo "Alamat Rumah : $alamat <br>";
    echo "Jenis Kelamin : $gender <br>";
    echo "Asal Sekolah : $asal <br>";
    echo "Nilai UAN : $nilai <br>";
?>

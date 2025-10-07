function runExercises() {
  console.clear();

  const universitas = "Universitas Muhammadiyah Kalimantan Timur"
  console.log("Nama Universitas: ", universitas);

  let jumlahMahasiswa = 25;
  jumlahMahasiswa = jumlahMahasiswa + 5;
  console.log("Jumlah mahasiswa sekarang: ", jumlahMahasiswa);

  let namaLengkap = "Ahmad Sahroni";
  console.log("Halo, nama saya " + namaLengkap);

  let angka1 = 10;
  let angka2 = 5;
  console.log("Hasil Penjumlahan: ", angka1 + angka2);
  console.log("Hasil Pengurangan: ", angka1 - angka2);
  console.log("Hasil Perkalian: ", angka1 * angka2);
  console.log("Hasil Pembagian: ", angka1 / angka2);

  let nilaiUjian = 80;
  let lulus = nilaiUjian >= 70;
  console.log("Apakah Lulus?", lulus);
}

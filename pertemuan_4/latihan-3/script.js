function cekKelulusan() {
  console.clear();
  let nilai = document.getElementById("nilai").value;


  if (nilai === "") {
    console.log("Silahkan masukan nilai terlebih dahulu");
    return;
  }

  nilai = parseInt(nilai);
  if (nilai >= 70) {
    console.log("Nilai Anda : ", nilai, "Status : Lulus");
  } else {
    console.log("Nilai Anda : ", nilai, "Status : Tidak Lulus")
  }
}

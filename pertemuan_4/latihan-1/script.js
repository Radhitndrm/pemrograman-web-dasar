const tombol = document.getElementById("btn");
const teks = document.getElementById("teks");

tombol.addEventListener("click", function() {
  teks.textContent = "Teks berhasil diubah dengan JavaScript";
  teks.style.color = "green";
})

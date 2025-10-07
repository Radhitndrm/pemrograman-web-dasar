function ubahDenganId() {
  const paragrafId = document.getElementById("teks-id");
  paragrafId.textContent = "Teks ini diubah dengan getElementById()";
  paragrafId.style.color = "green";
  paragrafId.style.fontWeight = "bold";
  console.log("Berhasil ubah dengan getElementId()");
}

function ubahDenganQuery() {
  const paragrafClass = document.querySelector(".text-class");
  paragrafClass.textContent = "Teks ini diubah dengan querySelector()";
  paragrafClass.style.color = "blue";
  paragrafClass.style.fontStyle = "italic";
  console.log("Berhasil ubah dengan querySelector()");
}

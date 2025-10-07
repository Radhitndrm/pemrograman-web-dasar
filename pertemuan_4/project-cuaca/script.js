const weatherData = {
  "Jakarta": { temp: 30, condition: "cerah", humidity: 65, wind: 12 },
  "Surabaya": { temp: 29, condition: "hujan", humidity: 80, wind: 15 },
  "Medan": { temp: 28, condition: "berawan", humidity: 72, wind: 10 },
  "Bandung": { temp: 24, condition: "cerah", humidity: 60, wind: 8 },
  "Bekasi": { temp: 31, condition: "berkabut", humidity: 55, wind: 20 },
  "Depok": { temp: 27, condition: "hujan", humidity: 85, wind: 13 },
  "Semarang": { temp: 29, condition: "berawan", humidity: 70, wind: 11 },
  "Palembang": { temp: 30, condition: "cerah", humidity: 68, wind: 9 },
  "Makassar": { temp: 28, condition: "hujan", humidity: 82, wind: 14 },
  "Tangerang": { temp: 29, condition: "berkabut", humidity: 58, wind: 18 },
  "Samarinda": { temp: 27, condition: "hujan", humidity: 40, wind: 20 }
};

const searchBox = document.querySelector(".search input");
const searchBtn = document.querySelector(".search button");
const weatherIcon = document.querySelector(".weather-icon");
const card = document.querySelector(".card");
const weatherSection = document.querySelector(".weather");

searchBtn.addEventListener("click", () => {
  const city = searchBox.value.trim();
  if (weatherData[city]) {
    const data = weatherData[city];
    document.querySelector(".city").innerHTML = city;
    document.querySelector(".tempt").innerHTML = data.temp + "°C";
    document.querySelector(".humidity").innerHTML = data.humidity + "%";
    document.querySelector(".wind").innerHTML = data.wind + " km/h";

    weatherIcon.classList.remove("show");

    setTimeout(() => {
      if (data.condition === "hujan") {
        weatherIcon.src = "images/rain.png";
        card.style.background = "linear-gradient(135deg, #3a7bd5, #3a6073)";
      } else if (data.condition === "cerah") {
        weatherIcon.src = "images/clear.png";
        card.style.background = "linear-gradient(135deg, #f6d365, #fda085)";
      } else if (data.condition === "berawan") {
        weatherIcon.src = "images/clouds.png";
        card.style.background = "linear-gradient(135deg, #bdc3c7, #2c3e50)";
      } else if (data.condition === "berkabut") {
        weatherIcon.src = "images/mist.png";
        card.style.background = "linear-gradient(135deg, #74ebd5, #ACB6E5)";
      }

      weatherIcon.classList.add("show");
    }, 300);

    weatherSection.style.display = "block";
  } else {
    alert("Kota tidak ada dalam data dummy!");
  }
});

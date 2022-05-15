const url = "https://api.openweathermap.org/data/2.5/weather?q=";
const key = '178ab5584cde8fb5e9022b8136b07c7c';


function HavaDurumuGetir(cityID) {
    fetch('https://api.openweathermap.org/data/2.5/weather?q=' + cityID+ '&lang=tr&appid=' + key ) 
    .then(function(resp) { return resp.json() }) 
    .then(function(data) {
    HavaDurumuGoster(data);
    });
    }

const getWeather = (city) => {
    let link = `${url}${city}&appid=${key}&units=metric&lang=tr`;
    fetch(link)
        .then(weather =>{
            return weather.json();
        })
        .then(showWeather);
}

const HavaDurumuGoster = (result) => {
    let city = document.querySelector('#city');
    city.innerText = `${result.name}`;

    var celcius = Math.round(parseFloat(result.main.temp)-273.15);
    document.getElementById('weather').innerHTML = celcius + '&deg;';

    let description = document.querySelector('.description');
    description.innerText =`${result.weather[0].description}`;
}
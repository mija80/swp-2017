var dropdown = document.querySelector('.gradovi');
var temp = document.querySelector('.weather-temp');
var hum = document.querySelector('.weather-hum');
var pres = document.querySelector('.weather-pres');

dropdown.addEventListener('change',function(){
	getWeather(dropdown.value)
});

function getWeather (city){
	fetch('http://api.openweathermap.org/data/2.5/weather?q=' + city + '&units=metric&APPID=59abe6985130dc16cd5c166c3af3e513')

	.then(function(res){
		return res.json();
	})
		
	.then(function(res) {
		renderData(res);
	});
	
}

function renderData (data){
	temp.innerText = data.main.temp;
	hum.innerText = data.main.humidity;
	pres.innerText =  data.main.pressure;
}
getWeather('Skopje,mk');
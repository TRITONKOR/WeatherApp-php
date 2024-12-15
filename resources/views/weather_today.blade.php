<!DOCTYPE html>
<html>
<head>
    <title>Today's Weather</title>
    <link rel="stylesheet" href="{{ asset('css/weather_today.css') }}">
</head>
<body>
<h1>Weather in {{ $data['name'] }}</h1>
<img class="weather-icon" src="https://openweathermap.org/img/wn/{{ $data['weather'][0]['icon'] }}.png" alt="Weather icon">
<p>Temperature: {{ $data['main']['temp'] }}°C</p>
<p>Weather: {{ $data['weather'][0]['description'] }}</p>
<p>Humidity: {{ $data['main']['humidity'] }}%</p>
<a href="{{ route('home') }}">Back</a>
</body>
</html>

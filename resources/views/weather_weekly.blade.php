<!DOCTYPE html>
<html>
<head>
    <title>Weekly Weather</title>
    <link rel="stylesheet" href="{{ asset('css/weather_weekly.css') }}">
</head>
<body>
<h1>Weekly Weather Forecast for {{ $data['city']['name'] }}</h1>
<ul>
    @foreach ($data['list'] as $forecast)
        <li>
            <div>
                <div>
                    Date: {{ $forecast['dt_txt'] }}<br>
                    Temperature: {{ $forecast['main']['temp'] }}°C<br>
                    Weather: {{ $forecast['weather'][0]['description'] }}
                </div>
                <img class="weather-icon" src="https://openweathermap.org/img/wn/{{ $forecast['weather'][0]['icon'] }}.png" alt="Weather icon">
            </div>
        </li>
    @endforeach
</ul>
<a href="{{ route('home') }}">Back</a>
</body>
</html>

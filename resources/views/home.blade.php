<!DOCTYPE html>
<html>
<head>
    <title>Weather App</title>
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
</head>
<body>
<h1>Weather App</h1>
<form action="{{ route('weather.today') }}" method="POST">
    @csrf
    <label for="city">City:</label>
    <input type="text" name="city" id="city" required>
    <button type="submit">Get Today's Weather</button>
</form>
<form action="{{ route('weather.weekly') }}" method="POST">
    @csrf
    <label for="city">City:</label>
    <input type="text" name="city" id="city" required>
    <button type="submit">Get Weekly Weather</button>
</form>
</body>
</html>

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WeatherController;

Route::get('/', [WeatherController::class, 'index'])->name('home');
Route::post('/weather', [WeatherController::class, 'getWeather'])->name('weather.today');
Route::post('/weather/weekly', [WeatherController::class, 'getWeeklyWeather'])->name('weather.weekly');

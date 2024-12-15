<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WeatherController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function getWeather(Request $request)
    {
        $city = $request->input('city');
        $apiKey = env('OPENWEATHER_API_KEY');
        $url = "https://api.openweathermap.org/data/2.5/weather?q={$city}&units=metric&appid={$apiKey}";

        $response = Http::get($url);

        if ($response->successful()) {
            $data = $response->json();
            return view('weather_today', compact('data'));
        }

        return redirect()->back()->withErrors('City not found or API error');
    }

    public function getWeeklyWeather(Request $request)
    {
        $city = $request->input('city');
        $apiKey = env('OPENWEATHER_API_KEY');
        $url = "https://api.openweathermap.org/data/2.5/forecast?q={$city}&units=metric&appid={$apiKey}";

        $response = Http::get($url);

        if ($response->successful()) {
            $data = $response->json();
            return view('weather_weekly', compact('data'));
        }

        return redirect()->back()->withErrors('City not found or API error');
    }
}

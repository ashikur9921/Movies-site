<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class homepage extends Controller
{
    public function index()
    {
        $latestmovies = Movie::latest()->take(8)->get();
        
        $categori = Movie::where('categori', 'movie')
            ->latest()
            ->paginate(12, ['*'], 'category_page');
        
        $series = Movie::where('categori', 'series')
            ->latest()
            ->paginate(12, ['*'], 'series_page');
        
        $animes = Movie::where('categori', 'anime')
            ->latest()
            ->paginate(12, ['*'], 'anime_page');
        
        return view('welcome', compact('latestmovies', 'categori', 'series', 'animes'));
    }
}


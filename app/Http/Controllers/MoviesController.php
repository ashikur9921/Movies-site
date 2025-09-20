<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MoviesController extends Controller
{
    public function index(Request $request)
    {
       
          $categori = Movie::where('categori', 'movie')
            ->latest()
            ->paginate(18, ['*'], 'category_page');
        return view('pages.movies', compact( 'categori'));
    }

     public function search(Request $request)
{
    $query = $request->input('query');

    
    $movies = \App\Models\Movie::where('name', 'LIKE', "%{$query}%")->get();

    return view('pages.search', compact('movies', 'query'));
}



}


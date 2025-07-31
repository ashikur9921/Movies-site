<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class AnimesController extends Controller
{
     public function index(Request $request)
    {
       
         $animes = Movie::where('categori', 'anime')
            ->latest()
            ->paginate(18, ['*'], 'animes_page');
        return view('pages.animes', compact( 'animes'));
    }

}
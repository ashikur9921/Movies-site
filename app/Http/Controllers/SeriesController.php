<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class SeriesController extends Controller
{
     public function index(Request $request)
    {
       
         $series = Movie::where('categori', 'series')
            ->latest()
            ->paginate(18, ['*'], 'series_page');
        return view('pages.series', compact( 'series'));
    }

}


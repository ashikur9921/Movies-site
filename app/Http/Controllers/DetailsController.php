<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class DetailsController extends Controller
{
    public function index($id)
    {
 
    $movie = Movie::where('id',$id)->first();
    return view('pages.details', compact('movie'));
    }
}
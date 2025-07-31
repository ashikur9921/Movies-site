<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UploadController extends Controller
{
    public function index()
    {

        return view('pages.upload');
    }

    public function store(Request $request){
        //    dd($request->all());
        // DB::table('movies')->insert([
        //     'name' => $request->input('name'),
        //     'type' => $request->input('type'),
        //     'movie_image_link' => $request->input('image_link'),
        //     'rating' => $request->input('rating'),
        //     'description' => $request->input('description'),
        //     'download_link' => $request->input('download_link'),
        // ]);

        Movie::create([
            'name' => $request->input('name'),
            'type' => $request->input('type'),
            'movie_image_link' => $request->input('image_link'),
            'rating' => $request->input('rating'),
            'description' => $request->input('description'),
            'download_link' => $request->input('download_link'),
            'watch_link' => $request->input('watch_link'),
            'trailer' => $request->input('trailer'),
            'categori'=> $request->input('categori'),
        ]);
        return redirect()->back()->with('success', 'Movie uploaded successfully!');
    }
}

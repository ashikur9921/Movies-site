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
     public function all()
    {
        $movies = Movie::latest()
        ->paginate(20, ['*'], 'movies_list');
        return view('pages.movies_list', compact('movies'));
    }
    public function edit($id)
    {
        $movies = movie::findOrFail($id);
        return view('pages.edit', compact('movies'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'string|max:255',
            'type' => 'string|max:255',
            'movie_image_link' => 'string',
            'rating' => 'numeric|min:0|max:10',
            'description' => 'string',
            'download_link' => 'string',
            'watch_link' => 'string',
            'trailer' => 'string',
            'categori' => 'string|max:255',

        ]);

        $movie = movie::findOrFail($id);
        $movie->name = $request->name;
        $movie-> type= $request->type;
        $movie-> movie_image_link= $request->movie_image_link;
        $movie-> rating= $request->rating;
        $movie-> description= $request->description;
        $movie-> download_link= $request->download_link;
        $movie-> watch_link= $request->watch_link;
        $movie-> trailer= $request->trailer;
        $movie-> categori= $request->categori;
        $movie->save();

        return redirect()->route('all')->with('success', 'Data updated successfully!');
    }
    public function destroy($id)
    {
        $movie = movie::findOrFail($id);
        $movie->delete();

        return redirect()->route('all')->with('success', 'Data deleted successfully!');
    }
          public function moviesearch(Request $request)
    {
        $query = $request->input('query');

        $movies = Movie::where('name', 'LIKE', "%{$query}%")->paginate(20);

        return view('pages.movies_scarch', compact('movies', 'query'));
    }


}
